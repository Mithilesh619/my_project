<?php
$con=new PDO("mysql:hostname=localhost;dbname=mithilesh","root","") or die("Error in connecting Database");
$checkemail=$_POST['duplicate_email'];
$hidden_id=$_POST['hidden_email'];
$sql=$con->prepare("select email from employee where email=? and id!=?");
$sql->execute([$checkemail,$hidden_id]);
$result=$sql->fetchAll(PDO::FETCH_ASSOC);
if(!empty($result))
{
	$result='1';
}
else
{
	$result='0';
}
echo $result;
?>