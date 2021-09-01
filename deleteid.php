<?php
$con=new PDO("mysql:hostname=localhost;dbname=mithilesh","root","") or die("Error in connecting Database");
$id=$_POST['Deleterow'];
$sql=$con->prepare("delete from employee where id=?");
$sql->execute([$id]);
echo 1;

?>