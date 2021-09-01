<?php
error_reporting(0);
$con=new PDO("mysql:hostname=localhost;dbname=mithilesh","root","") or die("Error in connecting Database");
if($_POST['h1']!='')
{
	$name=$_POST['f1'];
	$hide=$_POST['h1'];
	$email=$_POST['f2'];
	$password=$_POST['f3'];
	$encry_pass=sha1($password);
	$gender=$_POST['Gender'];
	$pan_no=$_POST['f4'];
	$aadhar_no=$_POST['f5'];	
	$sql=$con->prepare("update employee set name=?,email=?,password=?,gender=?,pan_no=?,aadhar_no=? where id=?");
	$sql->execute([$name,$email,$encry_pass,$gender,$pan_no,$aadhar_no,$hide]);
	$result=$sql->fetchAll(PDO::FETCH_ASSOC);
	header('location:register_list.php');
}

else
{
if($_POST['f1']!='' && $_POST['f2']!='' &&  $_POST['f3']!='' &&  $_POST['Gender']!='' &&  $_POST['f4']!='' &&  $_POST['f5']!='')
{
	$name=$_POST['f1'];
	$email=$_POST['f2'];
	$password=$_POST['f3'];
	$encry_pass=sha1($password);
	$gender=$_POST['Gender'];
	$pan_no=$_POST['f4'];
	$aadhar_no=$_POST['f5'];
$sql=$con->prepare("insert into employee(name,email,password,gender,pan_no,aadhar_no)values(?,?,?,?,?,?)");
$sql->execute(array($name,$email,$encry_pass,$gender,$pan_no,$aadhar_no));
header('location:register_list.php');
}
else
{
	header('location:register.php');
}
}
?>