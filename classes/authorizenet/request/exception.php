<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @package    Authorize-Net
 * @author     Jonathan Davis <jonathan.davis@objectivecompany.com>
 * @copyright  (c) 2011 The Objective Company
 * @license    https://raw.github.com/ObjectiveCompany/kohana-authorize-net/3.2/master/LICENSE.md
 **/
class AuthorizeNet_Request_Exception extends Kohana_Exception {
	
	/**
	 * @var  object  Authorize.Net response
	 */
	public $response;

	/**
	 * @param  object  Authorize.Net response
	 */
	public function __construct($response)
	{
		$this->response = $response;
		
		if ($response instanceof AuthorizeNetResponse)
		{
			parent::__construct($response->response_reason_text, NULL, $response->response_reason_code);
		}
		elseif ($response instanceof AuthorizeNetXMLResponse)
		{
			parent::__construct($response->getMessageText(), NULL, $response->getMessageCode());
		}
		else
		{
			throw new Kohana_Exception('Unsupported Authorize.Net response used in :class', array(
				':class' => get_class($this),
			));
		}
	}
	
}