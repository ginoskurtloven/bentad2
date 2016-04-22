<?php 

class Database {

	protected $database_host = "localhost";
	protected $database_username = "root";
	protected $database_password = "root";
	protected $database_name = "bentad2";

	//Connect to database
	public function connect() {

		//$mysqli = new mysqli("localhost", "my_user", "my_password", "world");
		$connection = new mysqli($database_host, $database_username, $database_password, $database_name);

		//Check Connection
		if ($connection->connect_errno) {
			printf("Database Connection Failed %s\n", $connection->connect_error);
			exit(); //Cut the Process
		} else {
			echo "We are connected";
		}

	}
}

$database_con = new Database();


 ?>