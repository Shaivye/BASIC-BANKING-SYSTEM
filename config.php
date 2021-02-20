<?php

	$conn = mysqli_connect("localhost","Project1","abc12345","course2");;

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>