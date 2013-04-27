<?php
	
	//no error
	const ERROR_OK = 0;
	//database errors
	const ERROR_DBOPEN = 1001;
	//users errors
	const ERROR_HANDLE	= 2001;
	const ERROR_EMAIL	= 2002;
	
	/* Appends to log */
	function LogOut($message)
	{
		error_log("$message\n", 3, "/var/www/html/messages");
	}
?>