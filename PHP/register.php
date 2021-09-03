<?php

	$conn=mysqli_connect('localhost','root', '', 'game');
	if(mysqli_connect_errno())
	{
		echo "1 :Connection failed"; //error code 1 connection failed
		exit();
	}

	$username = $_POST["name"];
	$password = $_POST["pwd"]; 

	$namecheckquery = "SELECT uname FROM user WHERE uname='".$username."';";

	$namecheck = mysqli_query($conn, $namecheckquery) or die("2 :Name check query fail"); //error code 2 name check query failed

	if(mysqli_num_rows($namecheck)>0)
	{
		echo "3 :Name already exists"; //error code 3 name exists
		exit();
	}

	$insertuserquery = "INSERT INTO user (uname,pwd) VALUES ('".$username."', '" .$password."');";
	mysqli_query($conn, $insertuserquery) or die("4 :Insert player query fail"); //error code 4 insert query failed 

	echo "0";

?>