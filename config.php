<?php 
	$conn = new mysqli("localhost", "root", "", "online_book_store");
	if ($conn->connect_error) {
		die("Connection Failed!".$conn->connect_error);
	}
 ?>