<?php
	//request method
	$_method = $_SERVER['REQUEST_METHOD'];
	//get parameters
	$_get = $_GET;
	//post json data;
	$_post = null;
	/* Result object */
	$_result = array('return' => 0, 'message' => '', 'data' => null);
	
	/* Result set parameters */
	function Result_SetParam($return, $message, $data)
	{
		global $_result;
		$_result['return'] = $return;
		$_result['message'] = $message;
		$_result['data'] = $data;
	}
	
	/* Buld string */
	function Result_GetString()
	{
		global $_result;
		return json_encode($_result);
	}
?>