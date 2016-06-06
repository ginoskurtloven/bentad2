<?php
$connection = new Database();

class User {


	//Add USER
	public function add_user($fullname,$username,$email_add,$password) {
		global $connection;
		$hash_pass = md5($password); //Password HASH
		
		$query = mysqli_query($connection->connect(),"INSERT user(user_full_name,username,user_email_add,password) VALUES('$fullname','$username','$email_add','$hash_pass')");
		
		$result = $query;
		return $result;	
	}

/**
* Get User Info Base on User Email Address from SESSION
*
* return associative array
*/
	public function Fetch($user_email_add) {
		global $connection;
		$query = "SELECT * FROM user WHERE user_email_add='$user_email_add'";

		if ($result = mysqli_query($connection->connect(),$query)) {		
		$row = mysqli_fetch_assoc($result);
		
		foreach ($row as $key => $value) {
			$row['user_id']; //return user id
			$row['user_full_name']; //return user full name
			$row['username']; //return user username
			$row['user_email_add']; //return email add
			$row['password']; //rturn user pass
			$row['avatar']; // return profile path
		}

		}
		return $row;
	}
}
?>