<?php 

class Database {
	//Database Information
	protected $database_host = "localhost";
	protected $database_username = "root";
	protected $database_password = "root";
	protected $database_name = "bentad2";

	//Function Connect
	public function connect() {
		$connection = new mysqli($this->database_host, $this->database_username, $this->database_password, $this->database_name);
		//Check Connection
		if ($connection->connect_errno) {
			echo("Database Connection Failed %s\n" . $connection->connect_error);
			exit(); //Cut the Process
		}
		return $connection;
	}

	//Insert User
	public function insert($user_full_name,$user_username,$user_email_add,$user_password) {
		$result = mysqli_query($this->connect(), "INSERT user(user_full_name,username,user_email_add,password) VALUES('$user_full_name','$user_username','$user_email_add','$user_password')");
		return $result;
	}


	//Select
	public function select() {
		$result = mysqli_query("SELECT * FROM user");
		return $result;
	}


}
 ?>