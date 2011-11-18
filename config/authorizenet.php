<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'test_mode' => Kohana::$environment !== Kohana::PRODUCTION,
	
	'api_login'         => 'your_login_id',
	'transaction_key'   => 'your_transaction_key',
	
	'md5_setting'       => '',
);