<?php 

$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

// create connection
$connect =  mysqli_connect($localhost, $username, $password, $dbname);

// check connection
if(!$connect) {
	echo "connection failed";
} else {
	 echo "Successfully Connected";
}

?>