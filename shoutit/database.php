<?php
	//Connect to MYSQL
	$con = mysqli_connect("localhost","root","","shoutit");
	//Test Connection
	if(mysqli_connect_errno()){
		echo "Failed to connect to MYSQL :".mysqli_connect_error();
	}
?>