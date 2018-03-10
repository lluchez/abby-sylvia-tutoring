<?php
	// include the config files
	include_once DIR_CONFIG.'config.php';
	include_once DIR_CORE.'lib.php';
	include_once DIR_APP.'lib/router_helper.php';

	class NotFoundException extends Exception
	{
		public function __construct($message, $code = 0, Exception $previous = null)
		{
			parent::__construct($message, $code, $previous);
		}
	}

	try
	{
		$url_args = parse_query_string($_SERVER['QUERY_STRING']);
		$action = urldecode($url_args['action']);
		if( $action === 'css_bundle' )
		{
		  include DIR_CSS.'bundle.php';
		}
		else
		{
			include DIR_VIEWS.'home.php';
		}
	}
	catch(NotFoundException $e)
	{
		set_status_header(404);
		render_json(Array("error" => Array("code" => 404, "text" => $e->getMessage())));
	}
	catch(Exception $e)
	{
		set_status_header(500);
	}

