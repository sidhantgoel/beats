<?php
	ob_start("ob_gzhandler");
	session_start();
	include("error.php");
	include("database.php");
	include("users.php");
	include("session.php");
	if(Database_Open() != ERROR_OK)
	{
		exit(0);
	}
?>