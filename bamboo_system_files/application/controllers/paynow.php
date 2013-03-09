<?
class PayNow extends Controller
{
	function __construct()
	{
		parent::Controller();
		$this->load->model('invoices_model');
		$this->load->model('settings_model');
	}
	
	// --------------------------------------------------------------------

	function index()
	{
		redirect('');
	}
	
	// --------------------------------------------------------------------
	
	function getcurrency()
	{

		if ($this->settings_model->get_setting('currency_type'))
		{
			return $this->settings_model->get_setting('currency_type');
		}
		else
		{		
			$cur_symbol = $this->settings_model->get_setting('currency_symbol');
			
			if ($cur_symbol == htmlentities('$')) 
			{
				return 'USD';
			}
			else if ($cur_symbol == '€')
			{
				return 'EUR';
			}
			else if ($cur_symbol == '£')
			{
				return 'GBP';	
			}
			else if ($cur_symbol == '¥') 
			{
				return 'JPY';
			}
		}
	}
	
	// --------------------------------------------------------------------

	function googlecheckout($id)
	{
		if (!$id)
			redirect('');
			
		$data['row'] = $this->invoices_model->getSingleInvoice($id)->row();
		
		if (!$data['row'])
			redirect('');
		
		echo '<html>
			<head>
				<title>Redirecting to Google Checkout ...</title>
			</head>
			<body>
				<h1 style="text-align: center">Redirecting to Google Checkout ...</h1>
				<form action="https://checkout.google.com/api/checkout/v2/checkoutForm/Merchant/'.$this->settings_model->get_setting('google_merchant_id').'" id="BB_BuyButtonForm" method="post" name="BB_BuyButtonForm">
					<input name="item_name_1" type="hidden" value="Invoice '.$data['row']->invoice_number.'" />
					<input name="item_description_1" type="hidden" value="" />
					<input name="item_quantity_1" type="hidden" value="1" />
					<input name="item_price_1" type="hidden" value="'.($data['row']->total_with_tax - $data['row']->amount_paid).'" />
					<input name="item_currency_1" type="hidden" value="'.$this->getcurrency().'" />
					<input name="_charset_" type="hidden" value="utf-8" />
				</form>
				<script>document.forms["BB_BuyButtonForm"].submit();</script>
			</body>
		</html>';
	}
	
	// --------------------------------------------------------------------

	function paypal($id)
	{
		if (!$id)
			redirect('');
			
		$data['row'] = $this->invoices_model->getSingleInvoice($id)->row();
		
		if (!$data['row'])
			redirect('');
		
		echo '<html>
			<head>
				<title>Redirecting to PayPal ...</title>
			</head>
			<body>
				<h1 style="text-align: center">Redirecting to PayPal ...</h1>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="paypalredirect">
					<input type="hidden" name="business" value="'.$this->settings_model->get_setting('paypal_email').'" />
					<input type="hidden" name="cmd" value="_xclick" />
					<input type="hidden" name="item_name" value="Invoice '.$data['row']->invoice_number.'" /> 
					<input type="hidden" name="amount" value="'.($data['row']->total_with_tax - $data['row']->amount_paid).'" />
					<input type="hidden" name="currency_code" value="'.$this->getcurrency().'" />
				</form>
				<script>document.forms["paypalredirect"].submit();</script>
			</body>
		</html>';
	}
}
?>