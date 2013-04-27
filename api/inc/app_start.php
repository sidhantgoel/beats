<?php
	ob_start("ob_gzhandler");
	session_start();
	include("result.php");
	include("error.php");
	include("validation.php");
	include("database.php");
	include("users.php");
	include("session.php");
	$_ok = true;
	//Open database connection
	if($_ok && Database_Open() != ERROR_OK)
	{
		$_ok = false;
		Result_SetParam(ERROR_DBOPEN, ErrorInfo(ERROR_DBOPEN), null);
	}
	//Check request method
	if($_ok && $METHOD!="ANY" && $METHOD!=$_method)
	{
		$_ok = false;
		Result_SetParam(ERROR_METHOD, ErrorInfo(ERROR_METHOD), null);
	}
	//Check for GET parameters
	if($_ok)
	{
		foreach($PARAMS_GET as $key) {
			if(!array_key_exists($key,$_get)) {
				$_ok = false;
				Result_SetParam(ERROR_PARAMS, ErrorInfo(ERROR_PARAMS), null);
				break;
			}
		}
	}
	//Check for POST parameters
	if($_ok)
	{
		foreach($PARAMS_POST as $key) {
			if(!array_key_exists($key,$_post)) {
				$_ok = false;
				Result_SetParam(ERROR_PARAMS, ErrorInfo(ERROR_PARAMS), null);
				break;
			}
		}
	}
?>