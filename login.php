<?
include_once('crud/dbcon.php');
//mysql_use_db('aishu');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h4>log page</h4>
</body>
</html>
<?
if (isset($_POST['uname']) {

	$name=$_POST['uname'];

}
if (isset($_POST['pwd'])) {
    $pass=$_POST['pwd']
}
//$sql="INSERT INTO login(username,password) VALUES ('$uname',$'pwd');
$sql="SELECT * from login";
$result=mysql_query($con,$sql);
if($result>0)
{
	lo
	echo $row['uid'];
	header("location:../signup.php?usertaken");
	echo "$name:".$_POST['uname']."$pass:".$_POST['pwd'];
	echo "sucess"
}else{

	echo"not succ";
}