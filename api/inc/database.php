<?php
	$_db = null;
	
	/* Open PDO Database connection */ 
	function Database_Open()
	{
		global $_db;
		try {
			$_db = new PDO('mysql:host=localhost;dbname=beats;charset=utf8', 'beats_user', 'jVFE4BUMqdvNNfyd');
			$_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			LogOut("ERROR: " . $e->getMessage());
			return ERROR_DBOPEN;
		}
		return ERROR_OK;
	}
?>