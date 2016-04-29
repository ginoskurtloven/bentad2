<?php

//Instantiate DB Connection
$connection = new Database();

class Listing {

//Get All Listing
public function add_listing($item_name,$item_category,$item_price,$item_condition,$item_location,$item_desc) {
	global $connection;

	$result = mysqli_query($connection->connect(), "INSERT listing(item_name,item_category,item_price,item_condition,item_location,item_desc) VALUES('$item_name','$item_category','$item_price','$item_condition','$item_location','$item_desc')");

	return $result;
}


public function get_all_listing() {
	global $connection;

	$result = mysqli_query($connection, "SELECT * from listing", MYSQLI_USE_RESULT);

	return $result;
}


}

