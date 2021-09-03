<?php

	$conn=mysqli_connect('localhost','root', '', 'game');
	if(mysqli_connect_errno())
	{
		echo "1 :Connection failed"; //error code 1 connection failed
		exit();
	}
	$scoreretquery = "SELECT uname, hs FROM user ORDER BY hs DESC";

	$scoreret= mysqli_query($conn,$scoreretquery) or die("8: Name check query failed"); //error code 2 name check query failed
	
	$ct=1;
	while($existinfo= mysqli_fetch_assoc($scoreret))
	{
		echo $ct."\t";
		$ct++;
		echo implode("\t\t",$existinfo);
		echo "\n";
	}

?>