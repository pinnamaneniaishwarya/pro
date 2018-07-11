<?php
global $name;
//global $age;
global $email;
global $phone;
require_once('connect.php');
//print_r($_POST);
if (isset($_POST['name'])) {
	$name = $_POST['name'];
}
//if (isset($_POST['age'])) {
  // $age = $_POST['age'];
//}
if (isset($_POST['email'])) {
   $email = $_POST['email'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password']; 
}
$sql="SELECT * FROM `user` WHERE uid='1'";
//$Createsql = "INSERT INTO `user` (username, email,password) VALUES ('$name' ,  '$email', '$password')";
//$query = "UPDATE 	`user` SET username = 'nikki' WHERE username = 'aishu'";
$res = mysqli_query($connection, $sql);
if($res){
	echo "[.$_POST['$name'].'and' .$_POST['$password']";
}else {
	echo "data insertion failed";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>First try</title>
   <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
   <!-- Latest compiled and minified JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
	<div>
		<rowspan = "4">
	<form action="index.php" method="post">
		name: &nbsp <input type="text" name="name"> <br/> <br/>
		age: &nbsp &nbsp <input type="text" name ="age"> <br/> <br/>
		email: &nbsp <input type="text" name="email"> <br/> <br/>
		phone:  <input type="text" name="phone"> <br/> <br/>
		&nbsp &nbsp &nbsp &nbsp &nbsp <input type="submit" name="submit">
	</form>
</rowspan>
</div>

</body>
</html>