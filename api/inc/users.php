<?php
	
	/* Check if handle is not already registered */
	function Users_CheckHandle($handle)
	{
	}
	
	/* Check if email is not already registered */
	function Users_CheckEmail($email)
	{
	}
	
	/* Register a new user */
	function Users_Register($handle, $email, $password, $name)
	{
		$key = sha1(mt_rand(10000,99999).time().$email);
	}
?>