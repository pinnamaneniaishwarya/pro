<?php
global $name;
global $age;
global $email;
global $phone;
require_once('connect.php');
//print_r($_POST);
if (isset($_POST['name'])) {
	$name = $_POST['name'];
}
if (isset($_POST['age'])) {
   $age = $_POST['age'];
}
if (isset($_POST['email'])) {
   $email = $_POST['email'];
}
if (isset($_POST['phone'])) {
    $phone = $_POST['phone']; 
}
//$Createsql = "INSERT INTO `user` (name, age, email, phone) VALUES ('$name' ,  '$email')";
$query = "UPDATE `nikki` SET name = 'nikki' WHERE name = 'aishu'";
$res = mysqli_query($connection, $query);
if($res){
	echo "name".$_POST['name']."age".$_POST['age'];
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