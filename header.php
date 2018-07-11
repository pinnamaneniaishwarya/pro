


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>this is to LOGIN</p>
<form  method="POST">
	USERNAME<input type="text" name="uname" placeholder="username"><br>
	PASSWORD<input type="password" name="pwd" placeholder="password"><br>
    <button><input type="submit" value="login" ></button>
</form>
 <div>
 	<p>home</p>
 	
 </div>

</body>

</html>
<?php
include_once('index.php');
include_once('dbcon.php');

global $uname;
global $username;
global $password;
global $pwd;
if(isset($_POST['login'])){
$uname= $_POST['uname'];
}
if(isset($_POST['login'])){
$pwd=$_POST['pwd'];
}
//$sql="SELECT * FROM login WHERE uname='$uname' AND pwd='$pwd';";
$sql="INSERT INTO 'users' (username,password) VALUES ('$uname',$'pwd')";

mysqli_query($conn,$sql);
//$resultCheck=mysql_num_rows($res)
if(empty($uname)||empty($pwd))
{
	echo "enter u np ";//
	exit();
}else{
echo $_POST['uname'].",". $_POST['pwd'];
}
//else{
//	echo "you r notlogged in";
//}
	//fetch details of each row
	//while($row=mysqli_fetch_assoc($result))
//{
		//echo $row['uid'];
//}
//
?>






