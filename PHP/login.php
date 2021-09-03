<?php

	$conn=mysqli_connect('localhost','root', '', 'game');
	if(mysqli_connect_errno())
	{
		echo "1 :Connection failed"; //error code 1 connection failed
		exit();
	}

	$username = $_POST["name"];
	$password = $_POST["pwd"]; 

	$namecheckquery = "SELECT uname, pwd FROM user WHERE uname='".$username."';";

	$namecheck = mysqli_query($conn, $namecheckquery) or die("2 :Name check query fail"); //error code 2 name check query failed

	if(mysqli_num_rows($namecheck) != 1)
	{
		echo "5 :No user exists or more than one user exists"; //error code 5 number of matching names is not 1
		exit();
	}

	$existinfo= mysqli_fetch_assoc($namecheck);
	$pwdcheck= $existinfo["pwd"];

	if($password != $pwdcheck)
	{
		echo "6: Incorrect password"; // Error code 6 password does not hash to match table
		exit();
	}

	echo "0";

?>
