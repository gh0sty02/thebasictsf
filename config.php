<?php

	$conn = mysqli_connect('localhost','pranay02','user@123','bank_db');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>