<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

$lang['accounts_admin_account_create_success'] = 'Admin account successfully created';
$lang['accounts_admin_account_create_fail'] = 'Problem creating Admin account';
$lang['accounts_admin_account_delete_success'] = 'Admin account successfully deleted';
$lang['accounts_admin_account_delete_fail'] = 'Problem deleting Admin account';

$lang['actions_cancel'] = 'Cancel';
$lang['actions_change'] = 'Change';
$lang['actions_create_invoice'] = 'Create Invoice';
$lang['actions_donate'] = 'Donate';
$lang['actions_delete'] = 'Delete';
$lang['actions_edit'] = 'Edit';
$lang['actions_required_fields'] = 'Required Fields';
$lang['actions_select_below'] = 'select below';

$lang['bambooinvoice_logo'] = '<span class=\'bamboo_invoice_bam\'>Bamboo</span><span class=\'bamboo_invoice_inv\'>Invoice</span>';
$lang['bambooinvoice_version'] = 'Version';

$lang['clients_add_contact'] = 'Add Contact';
$lang['clients_address1'] = 'Address1';
$lang['clients_address2'] = 'Address2';
$lang['clients_assigned_to_them'] = 'invoices assigned to them. You are about to <strong class="error">permanently delete</strong> this client, and <strong class="error">every invoice associated with them</strong>. Are you sure you want to do this?';
$lang['clients_cancel_add_contact'] = 'Cancel Add Contact';
$lang['clients_city'] = 'City';
$lang['clients_client_has'] = 'This client has ';
$lang['clients_clients_registered'] = 'clients registered';
$lang['clients_contact_add'] = 'Unable to add this contact. Please note that First Name, Last Name and a valid email are required.';
$lang['clients_contact_delete_fail'] = 'Unable to delete this contact.';
$lang['clients_contacts'] = 'Contacts';
$lang['clients_country'] = 'Country';
$lang['clients_create_new_client'] = 'Create New Client';
$lang['clients_created'] = 'New Client Added';
$lang['clients_delete_all_invoices'] = 'Delete client and all invoices';
$lang['clients_delete_client'] = 'Delete Client';
$lang['clients_delete_contact'] = 'Delete Contact';
$lang['clients_deleted'] = 'Client successfully deleted';
$lang['clients_deleted_error'] = 'Client could not be deleted'; 
$lang['clients_edit_client'] = 'Edit Client';
$lang['clients_edit_contact'] = 'Edit Contact';
$lang['clients_edited'] = 'Client edited successfully';
$lang['clients_edited_contact_info'] = 'Contact information successfully updated';
$lang['clients_email'] = 'Email';
$lang['clients_first_name'] = 'First Name';
$lang['clients_id'] = 'Client Id';
$lang['clients_last_name'] = 'Last Name';
$lang['clients_name'] = 'Client Name';
$lang['clients_new_contact_fail'] = 'Unable to add this contact. Please note that First Name, Last Name and a valid email are required.';
$lang['clients_no_invoice_listed'] = 'There are no contacts currently listed for';
$lang['clients_notes'] = 'Notes';
$lang['clients_phone'] = 'Phone';
$lang['clients_postal'] = 'Postal Code';
$lang['clients_province'] = 'Province/State';
$lang['clients_save_client'] = 'Save Client';
$lang['clients_title'] = 'Title';
$lang['clients_to'] = 'to';
$lang['clients_update_client'] = 'Update Client';
$lang['clients_website'] = 'Website';
$lang['clients_you_have'] = 'You have ';

$lang['error_date_fill'] = 'There appeared to be errors. Please note that the date must be in the format YYYY-MM-DD, and the amount must be a number. Please go back and try again.';
$lang['error_date_format'] = 'The date must be in the format YYYY-MM-DD';
$lang['error_email_recipients'] = 'Please select at least 1 recipient for this invoice';
$lang['error_field_required'] = 'This field is required';
$lang['error_login_password'] = 'Provide a password please';
$lang['error_login_username'] = 'Provide a username please';
$lang['error_problem_editing'] = 'There was a problem editing this invoice. Please report error invoice_controller_edit';
$lang['error_problem_inserting'] = 'Problem inserting';
$lang['error_problem_saving'] = 'There was a problem saving the invoice for sending.';
$lang['error_selection'] = 'The selection you made had no invoices in it.';

$lang['install_explain'] = 'Your email is used both as your &quot;username&quot; for logging in, and also for any email tasks, such as sending invoices, resetting passwords, etc.  The Primary Contact name is used in the &quot;from&quot; field when sending out invoices over email.';
$lang['install_install'] = 'Install';
$lang['install_welcome'] = 'Welcome to '.$lang['bambooinvoice_logo'].'.  In order to install I just need to gather a few things about you.';

$lang['invoice_add_note'] = 'Add Note';
$lang['invoice_all_clients'] = 'All Clients';
$lang['invoice_all_invoices'] = 'All Invoices';
$lang['invoice_amount'] = 'Amount';
$lang['invoice_amount_item'] = 'Amount';
$lang['invoice_amount_error'] = 'Please enter an amount';
$lang['invoice_amount_numbers_only'] = 'Numbers only please';
$lang['invoice_amount_paid'] = 'Amount Paid';
$lang['invoice_amount_outstanding'] = 'Amount Outstanding';
$lang['invoice_bill_to'] = 'Bill to';
$lang['invoice_quote_for'] = 'Quote for';
$lang['invoice_client'] = 'Client';
$lang['invoice_client_id'] = 'Client Id';
$lang['invoice_closed'] = 'Closed';
$lang['invoice_comment'] = 'Note';
$lang['invoice_comment_success'] = 'Note successfully added, you can review below.';
$lang['invoice_contact_add'] = 'There are no contacts available to send this invoice to. To add, please use the';
$lang['invoice_date_issued'] = 'Date Issued';
$lang['invoice_date_issued_full'] = 'Date Issued (in format YYYY-MM-DD)';
$lang['invoice_date_paid_full'] = 'Date Paid (in format YYYY-MM-DD)';
$lang['invoice_email_demo'] = 'Please note that to prevent abuse of this demo, email is <em>not</em> sent. To see a copy of the PDF attachment, select &ldquo;generate invoice&rdquo; from the menu.';
$lang['invoice_email_invoice_to'] = 'Email Invoice to';
$lang['invoice_email_quote_to'] = 'Email Quote to';
$lang['invoice_email_message'] = 'Email message';
$lang['invoice_email_no_recipient'] = 'Please go back, and select whom this invoice should be sent to.';
$lang['invoice_email_invoice_success'] = 'Invoice successfully emailed. You can review the history below.';
$lang['invoice_email_quote_success'] = 'Quote successfully emailed. You can review the history below.';
$lang['invoice_export_to'] = 'Export your invoice data to';
$lang['invoice_generated_by'] = 'Invoice generated by';
$lang['invoice_quote_generated_by'] = 'Quote generated by';
$lang['invoice_history_comments'] = 'Invoice History &amp; Private Notes';
$lang['invoice_invoice'] = 'Invoice';
$lang['invoice_quote'] = 'Quote';
$lang['invoice_blind_copy_me'] = 'blind copy me on this email';
$lang['invoice_invoice_delete_success'] = 'Invoice successfully deleted';
$lang['invoice_invoice_edit_success'] = 'Invoice successfully edited';
$lang['invoice_is_tax_exempt'] = 'is tax exempt';
$lang['invoice_item'] = 'Item';
$lang['invoice_last_used'] = 'last number used ';
$lang['invoice_new_item'] = 'New Item';
$lang['invoice_new_invoice'] = 'New Invoice';
$lang['invoice_new_invoice_error'] = 'New Invoice Error';
$lang['invoice_new_invoice_to'] = 'New invoice to';
$lang['invoice_no_payments_entered'] = 'No payments have been entered for this invoice. To enter a payment, use the &quot;Enter Payment&quot; option on your menu.';
$lang['invoice_not_sent'] = 'Invoice not yet sent to client. To send this invoice, use the &quot;Email Invoice&quot; option on your menu.';
$lang['invoice_not_taxable'] = 'Not Taxable';
$lang['invoice_not_unique'] = 'This invoice number is not unique';
$lang['invoice_note'] = 'Invoice Note';
$lang['invoice_note_max_chars'] = '(max 255 characters)';
$lang['invoice_no_invoice_match'] = 'There are no invoices in the system that match that criteria';
$lang['invoice_number'] = 'Invoice Number';
$lang['invoice_open'] = 'Open';
$lang['invoice_or'] = 'or';
$lang['invoice_or_new_client'] = 'or enter a new client';
$lang['invoice_overdue'] = 'Overdue';
$lang['invoice_overdue_invoices'] = 'overdue invoice(s)';
$lang['invoice_payment_enter'] = 'Enter Payment for';
$lang['invoice_payment_history'] = 'Payment history';
$lang['invoice_payment_success'] = 'Invoice payment successfully entered.';
$lang['invoice_payment_term'] = 'Payment Terms';
$lang['invoice_premenently_delete'] = 'You are about to <strong class="error">permanently delete</strong> invoice';
$lang['invoice_problem_creating'] = 'There was a problem creating your invoice.';
$lang['invoice_quantity'] = 'Quantity';
$lang['invoice_return_invoice_view'] = 'return to invoice view';
$lang['invoice_save_edited_invoice'] = 'Save Edited Invoice';
$lang['invoice_select_client'] = 'Select client';
$lang['invoice_send_to'] = 'Send this invoice to';
$lang['invoice_send_quote_to'] = 'Send this quote to';
$lang['invoice_sent_to'] = 'Invoice sent to';
$lang['invoice_sent_quote_to'] = 'Quote sent to';
$lang['invoice_status'] = 'Status';
$lang['invoice_summary'] = 'Summary';
$lang['invoice_sure_delete'] = 'Are you sure you want to do this? ';
$lang['invoice_tax1_description'] = 'Name of tax charged';
$lang['invoice_tax1_rate'] = 'Rate of tax1';
$lang['invoice_tax2_description'] = 'Name of second tax';
$lang['invoice_tax2_rate'] = 'Rate of tax2';
$lang['invoice_tax_exempt'] = 'Note: This client is tax exempt';
$lang['invoice_tax_status'] = 'Tax Status';
$lang['invoice_taxable'] = 'Taxable';
$lang['invoice_there_are_currently'] = 'There are currently';
$lang['invoice_total'] = 'Total';
$lang['invoice_work_description'] = 'Work Description';
$lang['invoice_you_may_now'] = 'You may now';
$lang['invoice_you'] = 'You';

$lang['login_allow_login'] = 'Add new admin account';
$lang['login_caps_lock'] = 'Please ensure your <em>Caps Lock</em> key is not pressed';
$lang['login_forgot_password'] = 'Forgotten password';
$lang['login_login'] = 'Login';
$lang['login_logout'] = 'Logout';
$lang['login_logout_confirm'] = 'You are about to logout. Are you sure you want to do this?';
$lang['login_logout_success1'] = "You've been successfully logged out. If you wish, you can";
$lang['login_logout_success2'] = 'login again';
$lang['login_password'] = 'Password';
$lang['login_password_confirm'] = 'Password Confirm';
$lang['login_password_email'] = "can email your password to the email address you were registered with. If you've forgotten it and want to have it reset, simply fill out the form below.";
$lang['login_password_email1'] = 'Your password change has been successful. Your new password is';
$lang['login_password_email2'] = 'and can now be used to';
$lang['login_password_fail'] = "Something went wrong. I know this isn't a very helpful error, looks like some debugging is needed";
$lang['login_password_reset_demo'] = 'For the demo, this is disabled, but you would have received an email with reset information.';
$lang['login_password_reset_disabled'] = 'For the demo version, password resetting is disabled.';
$lang['login_password_reset_email1'] = 'Someone (presumably you), has requested a password reset for your BambooInvoice account.';
$lang['login_password_reset_email2'] = 'To reset it now, follow this link to our website:';
$lang['login_password_reset_email3'] = "If you did not initiate this request, simply disregard this email, and we're sorry for bothering you.";
$lang['login_password_reset_title'] = 'BambooInvoice Password Reset';
$lang['login_password_reset_unable'] = 'Unable to reset your password. Please try again.';
$lang['login_password_sent'] = 'Your password change confirmation has been sent to';
$lang['login_password_submit'] = 'Send password';
$lang['login_password_success'] = 'Your password change has been successful, and has been emailled.';
$lang['login_remember_me'] = 'Remember me';
$lang['login_username'] = 'Email';
$lang['login_wrong_password'] = 'Sorry, the username and/or password could not be found or was wrong. Please try again.';

$lang['menu_accounts'] = 'Accounts';
$lang['menu_bugs'] = 'Bugs';
$lang['menu_catchphrase'] = 'Simple,<br />Beautiful,<br />Open Source,<br />Online Invoicing';
$lang['menu_catchphrase_nobreak'] = 'Simple, Beautiful, Open Source, Online Invoicing';
$lang['menu_changelog'] = 'Change Log';
$lang['menu_clients'] = 'Clients';
$lang['menu_credits'] = 'Credits';
$lang['menu_delete_invoice'] = 'Delete Invoice';
$lang['menu_delete'] = 'Delete';
$lang['menu_duplicate_invoice'] = 'Duplicate Invoice';
$lang['menu_duplicate'] = 'Duplicate';
$lang['menu_did_you_know'] = 'Did you know?';
$lang['menu_edit_invoice'] = 'Edit Invoice';
$lang['menu_edit'] = 'Edit';
$lang['menu_view_invoice'] = 'View As Invoice';
$lang['menu_view_quote'] = 'View As Quote';
$lang['menu_email_invoice'] = 'Email As Invoice';
$lang['menu_email_quote'] = 'Email As Quote';
$lang['menu_enter_payment'] = 'Enter Payment';
$lang['menu_faq'] = 'Frequently Asked Questions';
$lang['menu_generate_pdf'] = 'PDF As Invoice';
$lang['menu_generate_quote_pdf'] = 'PDF As Quote';
$lang['menu_help'] = 'Help';
$lang['menu_invoice_summary'] = 'Invoice Summary';
$lang['menu_private_note'] = 'Private Note';
$lang['menu_invoices'] = 'Invoices';
$lang['menu_logout'] = 'Logout';
$lang['menu_new_invoice'] = 'New Invoice';
$lang['menu_print_invoice'] = 'Print Invoice';
$lang['menu_print'] = 'Print';
$lang['menu_reports'] = 'Reports';
$lang['menu_roadmap'] = 'Roadmap';
$lang['menu_root_system'] = 'Root System';
$lang['menu_see_also'] = 'See Also';
$lang['menu_settings'] = 'Settings';
$lang['menu_utilities'] = 'Utilities';

$lang['notice_english_only'] = '';
$lang['notice_generated_by'] = 'Generated by';

$lang['reports_back_to_reports'] = 'back to reports';
$lang['reports_collected'] = 'collected';
$lang['reports_end_date'] = 'End Date (yyyy-mm-dd)';
$lang['reports_first_quarter'] = 'first quarter';
$lang['reports_fourth_quarter'] = 'fourth quarter';
$lang['reports_generate_report'] = 'Generate report';
$lang['reports_invoices_issued_year'] = 'invoices issued this year';
$lang['reports_legend'] = 'Legend';
$lang['reports_second_quarter'] = 'second quarter';
$lang['reports_start_date'] = 'Start Date (yyyy-mm-dd)';
$lang['reports_third_quarter'] = 'third quarter';
$lang['reports_year_to_date'] = 'Year to Date';
$lang['reports_no_data'] = 'There is no data available for those dates.';
$lang['reports_yearly_income'] = 'Yearly Income';

$lang['settings_account_settings'] = 'Account Settings';
$lang['settings_invoice_settings'] = 'Invoice Settings';
$lang['settings_advanced_settings'] = 'Advanced Settings';

$lang['settings_company_name'] = 'Company Name';
$lang['settings_currency_symbol'] = 'Currency Symbol';
$lang['settings_currency_type'] = 'Currency Type';
$lang['settings_days_payment_due'] = 'Days until invoice due';
$lang['settings_default_note'] = 'Default Invoice Note';
$lang['settings_display_branding'] = 'Display BambooInvoice Branding';
$lang['settings_logo'] = 'Logo';
$lang['settings_modify_fail'] = 'A problem was encountered when modifying your settings.';
$lang['settings_modify_success'] = 'Settings successfully modified.';
$lang['settings_note_max_chars'] = '(max 255 characters)';
$lang['settings_primary_contact'] = 'Primary Contact';
$lang['settings_primary_email'] = 'Primary Contact Email';
$lang['settings_primary_email_message'] = 'Changing this email will also change the email you use to login with.';
$lang['settings_save_settings'] = 'Save Settings';
$lang['settings_save_invoices'] = 'Save Invoices';
$lang['settings_save_invoices_warning'] = '<strong>Warning:</strong> Turning this off will remove all currently saved invoices.';
$lang['settings_settings_default'] = 'These settings are the defaults';
$lang['settings_short_language'] = 'en';
$lang['settings_tax_code'] = 'Tax number/code';
$lang['settings_will_use'] = 'will use when you generate invoices or clients.';

$lang['utilities_download_backup'] = 'Download backup';
$lang['utilities_automatic_version_check'] = 'Automatically check for new versions';
$lang['utilities_phpinfo'] = 'PHP info';
$lang['utilities_phpinfo_not_available'] = 'This feature is not available in the demo.';
$lang['utilities_new_version_available'] = "A new version of BambooInvoice version is now available. "; // space after period
$lang['utilities_up_to_date'] = "You are using the most recent version of BambooInvoice.";
$lang['utilities_connection_failed'] = "A connection to http://bambooinvoice.org could not be established.";
$lang['utilities_version_check'] = "New version check";
$lang['utilities_version_undetermined'] = "Version status could not be determined.";

$lang['menu_did_you_know_quotes'] = array(
          "BambooINVOICE has forums at forums.bambooinvoice.org for support, feature requests, and to chat.",
          "BambooINVOICE is released under the GPL license.",
          "Your settings can be changed at any time through the &ldquo;settings&rdquo; menu.",
          "The help file is sprouting every day.  Visit BambooINVOICE.org for the latest version!",
          "You can create a new client from the &ldquo;clients&rdquo; menu, or right before you issue an invoice!",
          "A single stem of bamboo from an established root system typically reaches full height in just one year!",
          "The bamboo plant&rsquo;s long life makes it a Chinese symbol of long life, and in India it is a symbol of friendship."
          );
?>
