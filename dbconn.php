<?php
$conn=mysqli_connect('localhost','root','','loginsystem');
if(!$conn){
	die("db conn failed".mysqli_error($conn));
   
}

$selectdb=mysqli_select_db($conn,'loginsystem');
if(!$selectdb){
	die("db selec failed".mysqli_error($conn));
}
?>
