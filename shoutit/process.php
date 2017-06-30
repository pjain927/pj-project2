<?php include 'database.php' ;?>
<?php

//Check if form is submitted
if(isset($_POST['submit'])){
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$message = mysqli_real_escape_string($con, $_POST['message']);

	// Set timezone
	date_default_timezone_set('America/New_York');
	$time = date('h:i:s a',time());

	//Validate input
	if(!isset($user) || $user == '' || !isset($message) || $message == ''){
		echo 'Please fill in the details';
		header("Location : index.php?error=".urlencode($error));
		echo "1";
		//exit();
	} else {
		$query="INSERT INTO shouts (user , message, time) 
				VALUES ('$user','$message','$time')";
		if(!mysqli_query($con, $query)){
			die('Error :'.mysqli_error($con));
		} else {
			//header("Location : index.php");
			include "index.php";
			//exit();
		
	}

}
}

?>