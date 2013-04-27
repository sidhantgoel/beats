<?php
	/* function to validate handle */
	function Validate_Handle($handle)
	{
		if(preg_match('/^[A-Za-z][A-Za-z0-9]*(?:_+[A-Za-z0-9]+)*$/', $handle))
			return ERROR_OK;
		else
			return ERROR_INVHANDLE;
	}
	/* function to validate email address */
	function Validate_Email($email)
	{
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
			return ERROR_OK;
		else
			return ERROR_INVEMAIL;
	}
?>