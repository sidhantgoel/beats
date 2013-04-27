<?php
	
	//no error
	const ERROR_OK = 0;
	//database errors
	const ERROR_DBOPEN = 1001;
	//users errors
	const ERROR_HANDLE	= 2001;
	const ERROR_EMAIL	= 2002;
	const ERROR_REGINSERT = 2003;
	//validation errors
	const ERROR_INVHANDLE = 3001;
	const ERROR_INVEMAIL = 3002;
	//other errors
	const ERROR_METHOD = 9001;
	const ERROR_PARAMS = 9002;
	
	/* returns error informtion */
	function ErrorInfo($e)
	{
		switch($e)
		{
		//Success
		case ERROR_OK:
			return "Success";
		//database.php
		case ERROR_DBOPEN:
			return "DB Error";
		//users.php
		case ERROR_HANDLE:
			return "Existing Handle";
		case ERROR_EMAIL:
			return "Existing Email";
		case ERROR_REGINSERT:
			return "DB Error (REG INSERT)";
		//validate.php
		case ERROR_INVHANDLE:
			return "Invalid Handle";
		case ERROR_INVEMAIL:
			return "Invalid Email";
		//other errors
		case ERROR_METHOD:
			return "Invalid request method";
		case ERROR_PARAMS:
			return "Invalid parameters";
		//unknown error
		default:
			return "Unknown";
		}
	}
	
	/* Appends to log */
	function LogOut($message)
	{
		error_log("$message\n", 3, "/var/www/html/messages");
	}
?>