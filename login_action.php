<?php
$email=$_POST['email'];
$password=$_POST['pass'];
$encrypt_pass=sha1($password);
$con=new PDO("mysql:hostname=localhost;dbname=mithilesh","root","") or die("Error in Connecting DB");
$sql=$con->prepare("select * from employee where email=? and password=?");
$sql->execute(array($email,$encrypt_pass));
$result=$sql->fetchAll(PDO::FETCH_ASSOC);
//print_r($result);
$count=count($result);
if($count=='1')
{
	session_start();
	$_SESSION['email']=$result[0]['name'];
	$_SESSION['id']=$result[0]['id'];
	header('location:register_list.php');
}
elseif ($count>=2) {
	header('location:login.php');
}
else
{
	header('location:login.php');
}
?>