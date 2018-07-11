<?php

$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="";
$conn=mysqli_connect('$dbServername','$dbUsername','$dbPassword','$dbName');

if(!$conn){
	die("db conn failed".mysql_error($conn));
}

$selectdb=mysqli_select_db($conn,'loginsystem');

//if(!$selectdb){
	//die("db selectn failed".mysql_error($selectdb));
//}

?>
