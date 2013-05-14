<?php 
namespace PayPal\PayPalAPI;
use PayPal\Core\AbstractRequestType;
/**
 * 
 */
class GetRecurringPaymentsProfileDetailsRequestType  extends AbstractRequestType  
  {

	/**
	 * 
	 * @access public
	 
	 * @namespace ns
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $ProfileID;

	/**
	 * Constructor with arguments
	 */
	public function __construct($ProfileID = NULL) {
		$this->ProfileID = $ProfileID;
	}


   
}