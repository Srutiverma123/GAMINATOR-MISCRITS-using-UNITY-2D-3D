<?php

	$conn=mysqli_connect('localhost','root', '', 'game');
	if(mysqli_connect_errno())
	{
		echo "1 :Connection failed"; //error code 1 connection failed
		exit();
	}

	$username = $_POST["name"];
	$newscore = $_POST["score"]; 

	$namecheckquery = "SELECT uname, hs FROM user WHERE uname='".$username."';";

	$namecheck= mysqli_query($conn,$namecheckquery) or die("2: Name check query failed"); //error code 2 name check query failed
	$existinfo= mysqli_fetch_assoc($namecheck);
	$existscore= $existinfo["hs"];

	if($newscore> $existscore)
	{
		$updatequery="UPDATE user SET hs = " .$newscore . " WHERE uname = '" .$username."';";
		mysqli_query($conn,$updatequery) or die("7: Save query failed"); //error code 7 Update query failed
		echo "0"; 
	}

?>