<?php defined('SYSPATH') or die('No direct script access.');

// Are we in test mode?
define("AUTHORIZENET_SANDBOX", Kohana::$config->load('authorizenet.test_mode'));

// Credentials
define("AUTHORIZENET_API_LOGIN_ID", Kohana::$config->load('authorizenet.api_login'));
define("AUTHORIZENET_TRANSACTION_KEY", Kohana::$config->load('authorizenet.transaction_key'));