<?php     
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "BuyStyle";

	$mycon = new mysqli($servername, $username, $password, $dbname);

    if ($mycon->connect_error) {
  		die("Connection failed: " . $mycon->connect_error);
	} 
	else{
		echo "";
	}
?>