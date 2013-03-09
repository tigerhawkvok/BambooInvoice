<?php
class Recur extends Controller
{
	function __construct()
	{
		parent::Controller();
		$this->lang->load('calendar');
		$this->load->model('invoices_model');
		$this->load->model('clients_model');
		$this->load->helper(array('date', 'text', 'typography'));
	}
	
	// --------------------------------------------------------------------

	function index()
	{
		// Initial variables
		$today = date('Y-m-d', time());
		
		//Select invoices where recur interval exists
		$result_a = $this->db->query('SELECT * FROM '.$this->db->dbprefix('invoices').' WHERE recur_interval > "0" ORDER BY invoice_number DESC');
		
		foreach ($result_a->result() as $row_a)
		{
			$recur_interval = $row_a->recur_interval;
			
			if ($today == date('Y-m-d', strtotime($row_a->dateIssued) + ($recur_interval * 24 * 60 * 60)))
			{
				$id = $row_a->id;
				$invoice_number = $row_a->invoice_number;
				
				// If it already has date attatched remove it
				if ((strlen($invoice_number) > 10) and (strtotime(substr($invoice_number, -10))))
				{
					$invoice_number = substr($invoice_number, 0, -11);
				}
				
				// Does this invoice exist already?
				$invoiceExists = $this->db->query('SELECT * FROM '.$this->db->dbprefix('invoices').' WHERE invoice_number = "'.$invoice_number.'_'.$today.'"');
				
				if ($invoiceExists->num_rows() == 0)
				{
					// Create the new invoice
					$this->db->query('INSERT INTO '.$this->db->dbprefix('invoices').' (
						client_id,
						invoice_number,
						dateIssued,
						payment_term,
						tax1_desc,
						tax1_rate,
						tax2_desc,
						tax2_rate,
						invoice_note,
						recur_interval
					) VALUES (
						"'.$row_a->client_id.'",
						"'.$invoice_number.'_'.$today.'",
						"'.$today.'",
						"'.$row_a->payment_term.'",
						"'.$row_a->tax1_desc.'",
						"'.$row_a->tax1_rate.'",
						"'.$row_a->tax2_desc.'",
						"'.$row_a->tax2_rate.'",
						"'.$row_a->invoice_note.'",
						"'.$recur_interval.'"
					)');
					
					$new_id = $this->db->insert_id();
					
					// Get items from invoice
					$result_b = $this->db->query('SELECT * FROM '.$this->db->dbprefix('invoice_items').' WHERE invoice_id = "'.$id.'"');	
					
					// Add them to the new invoice
					foreach ($result_b->result() as $row_b)
					{	
						$this->db->query('INSERT INTO '.$this->db->dbprefix('invoice_items').' (
							invoice_id,
							amount,
							quantity,
							work_description,
							taxable
						) VALUES (
							"'.$new_id.'",
							"'.$row_b->amount.'",
							"'.$row_b->quantity.'",
							"'.$row_b->work_description.'",
							"'.$row_b->taxable.'"
						)');
					}
					
					// And finally, email it
					$this->_email($new_id);
				}
			}
		}
	}
	
	// --------------------------------------------------------------------

	function _email($id)
	{
		$this->lang->load('date');
		$this->load->plugin('to_pdf');
		$this->load->helper(array('logo', 'file', 'path'));
		$this->load->library('email');
		$this->load->model('clientcontacts_model');
		$this->load->model('invoice_histories_model', '', TRUE);
		
		// Collect information for PDF
		$data['row'] = $this->invoices_model->getSingleInvoice($id)->row();
		$data['id'] = $id;
		
		$data['companyInfo'] = $this->settings_model->getCompanyInfo()->row();
		$data['company_logo'] = get_logo($this->settings_model->get_setting('logo_pdf'), 'pdf');
		$data['client_note'] = $this->clients_model->get_client_info($data['row']->client_id)->client_notes;		
		$data['date_invoice_issued'] = formatted_invoice_date($data['row']->dateIssued);
		$data['date_invoice_due'] = formatted_invoice_date($data['row']->dateIssued, $this->settings_model->get_setting('days_payment_due'));
		$invoice_number = $data['row']->invoice_number;
		
		// Get invoice information
		$items = $this->invoices_model->getInvoiceItems($id);
		
		$data['items'] = $items;
		$data['total_no_tax'] = $this->lang->line('invoice_amount').': '.$this->settings_model->get_setting('currency_symbol').number_format($data['row']->total_notax, 2, $this->config->item('currency_decimal'), '')."<br />\n";
		$data['tax_info'] = $this->_tax_info($data['row']);		
		$data['total_with_tax'] = $this->lang->line('invoice_total').': '.$this->settings_model->get_setting('currency_symbol').number_format($data['row']->total_with_tax, 2, $this->config->item('currency_decimal'), '')."<br />\n";;
		
		if ($data['row']->amount_paid > 0)
		{
			$data['total_paid'] = $this->lang->line('invoice_amount_paid').': '.$this->settings_model->get_setting('currency_symbol').number_format($data['row']->amount_paid, 2, $this->config->item('currency_decimal'), '')."<br />\n";;
			$data['total_outstanding'] = $this->lang->line('invoice_amount_outstanding').': '.$this->settings_model->get_setting('currency_symbol').number_format($data['row']->total_with_tax - $data['row']->amount_paid, 2, $this->config->item('currency_decimal'), '');
		}
		else
		{
			$data['total_paid'] = '';
			$data['total_outstanding'] = '';
		}
		
		// Create invoice HTML & convert to PDF
		$html = $this->load->view('invoices/pdf', $data, TRUE);
		$invoice_localized = url_title(strtolower($this->lang->line('invoice_invoice')));

		if (pdf_create($html, $invoice_localized.'_'.$invoice_number, FALSE))
		{
			show_error($this->lang->line('error_problem_saving'));
		}

		// Get first client contact and send it to them
		$result_a = $this->db->query('SELECT * FROM '.$this->db->dbprefix('clientcontacts').' WHERE client_id = "'.$data['row']->client_id.'" LIMIT 1;');
		$row_a = $result_a->row();
		$recipient_names = '';
		$recipient_names[] .= $row_a->first_name.' '.$row_a->last_name;
		$email_body = 'See attatched file.';
		
		// Email it
		$this->email->clear(true);
		$this->email->to($row_a->email);
		$this->email->from($data['companyInfo']->primary_contact_email, $data['companyInfo']->primary_contact);
		$this->email->subject($this->lang->line('invoice_invoice')." $invoice_number : ".$data['companyInfo']->company_name);
		$this->email->message($email_body);
		$this->email->attach("./invoices_temp/".$invoice_localized."_"."$invoice_number.pdf");
		$this->email->send();
		
		// Save this email being sent in invoice history
		$this->invoice_histories_model->insert_history_note($id, 'Sent by Recurring Invoices + PayNow mod.', $recipient_names);
	}

	// --------------------------------------------------------------------

	function _tax_info($data)
	{
		$tax_info = '';
		
		if ($data->total_tax1 > 0)
		{
			$tax_info .= $data->tax1_desc." (".$data->tax1_rate."%): ".$this->settings_model->get_setting('currency_symbol').number_format($data->total_tax1, 2, '.', '')."<br />\n";
		}
		
		if ($data->total_tax2 > 0)
		{
			$tax_info .= $data->tax2_desc." (".$data->tax2_rate."%): ".$this->settings_model->get_setting('currency_symbol').number_format($data->total_tax2, 2, '.', '')."<br />\n";
		}
		
		return $tax_info;
	}
}
?>