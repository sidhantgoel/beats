<?php
	
	/* Check if handle is not already registered */
	function Users_CheckHandle($handle)
	{
		global $_db;
		$stmt = $_db->prepare('SELECT handle FROM users WHERE handle = :handle');
		$stmt->bindParam(':handle', $handle, PDO::PARAM_STR);
    	$stmt->execute();
		if($stmt->rowCount() == 0)
			return ERROR_OK;
		else
			return ERROR_HANDLE;
	}
	
	/* Check if email is not already registered */
	function Users_CheckEmail($email)
	{
		global $_db;
		$stmt = $_db->prepare('SELECT handle FROM users WHERE email = :email');
		$stmt->bindParam(':email', $email, PDO::PARAM_STR);
    	$stmt->execute();
		if($stmt->rowCount() == 0)
			return ERROR_OK;
		else
			return ERROR_HANDLE;
	}
	
	/* insert into registration table */
	function Users_Insert($handle, $email, $password, $name)
	{
		global $_db;
		global $_key;
		$key = sha1(mt_rand(10000,99999).time().$email);
		$stmt = $_db->prepare('INSERT INTO register (handle, email, name, password, key) VALUES (:handle, :email, :name, MD5(:password), :key);');
		$stmt->bindParam(':handle', $handle, PDO::PARAM_STR);
		$stmt->bindParam(':email', $email, PDO::PARAM_STR);
		$stmt->bindParam(':name', $name, PDO::PARAM_STR);
		$stmt->bindParam(':password', $password, PDO::PARAM_STR);
		$stmt->bindParam(':key', $key, PDO::PARAM_STR);
		try {
			$stmt->execute();
		} catch(PDOException $e) {
			LogOut("ERROR: " . $e->getMessage());
			return ERROR_REGINSERT;
		}
		$_key = $key;
		return ERROR_OK;
	}
?>