<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'Rohan', '123456', 'testing');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>