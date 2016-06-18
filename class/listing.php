<?php
$connection = new Database(); //Instantiate DB Connection

class Listing {

	/**
	 * @param   $parameter string, integer
	 */
	public function EscapeString($parameter) {
		global $connection; //database connection
		$db_connect = $connection->connect();

		//$result = $db_connect->real_escape_string($parameter);
		$result = mysqli_real_escape_string($db_connect,$parameter);
		return $result;

	}


	// Insert listing
	public function add_listing($item_title,$item_category,$item_price,$item_condition,$item_location,$item_desc,$item_ownercontact,$status,$user_id) {

	global $connection; //database connection

	$item_title = $this->EscapeString($item_title);
	$item_category = $this->EscapeString($item_category);
	$item_price = $this->EscapeString($item_price);
	$item_condition = $this->EscapeString($item_condition);
	$item_location = $this->EscapeString($item_location);
	$item_desc = $this->EscapeString($item_desc);
	$item_ownercontact = $this->EscapeString($item_ownercontact);

	$query =  "INSERT listing(item_name,item_category,item_price,item_condition,item_location,item_desc,status,user_id,contact_info) VALUES('$item_title','$item_category','$item_price','$item_condition','$item_location','{$item_desc}','$status','$user_id','$item_ownercontact')";

	// $result = mysqli_query($connection->connect(),$query);

	if ($result = mysqli_query($connection->connect(),$query)) {
			$result = "Add Successfully Added";
	} else {
			$result = "Product Add Failed";
	}
		return $result;
}


//Get Number of Draft Listing
public function get_draft_lisiting() {
	global $connection; //database Conneciton
		$query = mysqli_query($connection->connect(), "SELECT * FROM listing WHERE status='draft'");
		$result = mysqli_num_rows($query);

		//return Number of Rows
		return $result;
}


//Get Number of Current Listing
public function get_num_listing() {
	global $connection; //database Connection
	$query = mysqli_query($connection->connect(), "SELECT * FROM listing");
	$result = mysqli_num_rows($query);

	//return number of rows
	return $result;
}

//get all listing cat1(electronics)
public function get_all_cat1() {
	global $connection;
	
	$query = mysqli_query($connection->connect(), "SELECT * FROM listing WHERE item_category='1'");
	$result = array();
	while ($record = mysqli_fetch_array($query)) {
		$result[] = $record;
	}

	return $result;
}

/* GET ALL LISTING COMPUTER AND GADGETS(ID2) */
public function get_all_cat2() {
	global $connection;

	$query = mysqli_query($connection->connect(), "SELECT * FROM listing WHERE item_category = '2'");
	$result = array(); //Set A Blank array and assign
	while ($record = mysqli_fetch_array($query)) {
		$result[] = $record;
	}
	return $result;
}



//Get All the Data in Product by passing id in this function
public function get_by_id($item_id) {
	global $connection;
	$query = "SELECT * FROM listing WHERE item_id='$item_id'";

	if ($result = mysqli_query($connection->connect(),$query)) {
		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
			foreach ($row as $key => $value) {
				$row['item_id'];
				$row['item_name'];
				$row['item_category'];
				$row['item_price'];
				$row['item_condition'];
				$row['item_location'];
				$row['item_desc'];
				$row['status'];
				$row['user_id'];
				$row['contact_info'];
			}
		} else {
			echo "No Data Found";
		}

	}
		return $row;
}

	// Get count of Rows by category
	public function get_num_rows($category_id) {
		global $connection;
		$query = "SELECT * FROM listing WHERE item_category = $category_id";
		if ($result = mysqli_query($connection->connect(),$query)) {
			#if TRUE
			$result_count = mysqli_num_rows($result);
		}
			return $result_count;
	}

}

?>