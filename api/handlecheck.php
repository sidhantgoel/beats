<?php
	$METHOD = "GET";
	$PARAMS_GET = array("handle");
	$PARAMS_POST = array();
	include("inc/app_start.php");
	$handle = $_get["handle"];
	$ret = 0;
	if($ret == 0)
		$ret = Validate_Handle($handle);
	if($ret == 0)
		$ret = Users_CheckHandle($handle);
	Result_SetParam($ret, ErrorInfo($ret), null);
	include("inc/app_end.php");
?>