<?php
namespace PayPalPaymentsProClassicLite\ExpressCheckout;
include_once(__DIR__.'/../PayPalAPI.php');
use PayPalPaymentsProClassicLite\PayPalAPI;
class SetExpressCheckout extends PayPalAPI{
	
	
	
	//Validation Variables
	protected $validation_parameters;
	
	public function __construct()
	{
		parent::__construct();
		
		//Set Method
		$this->call_variables['METHOD'] = 'SetExpressCheckout';
		
		//setup validation parameters.  Make sure these are present before executing call.
		$this->validation_parameters = array(
				'RETURNURL',
				'CANCELURL',
				'PAYMENTREQUEST_0_PAYMENTACTION',
				'PAYMENTREQUEST_0_AMT',
				'PAYMENTREQUEST_0_CURRENCYCODE',
				'VERSION',
		);
		
	}
	
}