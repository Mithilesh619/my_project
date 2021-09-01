<a href="logout.php"><input type="button" value="Logout"></a>
<?php
session_start();
//print_r($_SESSION);die();
include 'checksession.php';
$con=new PDO("mysql:hostname=localhost;dbname=mithilesh","root","") or die("Error in connecting Database");
$sql=$con->prepare("select * from employee");
$sql->execute();
$result=$sql->fetchAll(PDO::FETCH_ASSOC);
//echo "<pre>",print_r($result);die();
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST" action="registerinfo.php">
		<table>
			<h1 align="center">REGISTER LIST</h1>
			<h1 align="center">Welcome <?php echo $_SESSION['email'] ?></h1>
			<tr>
				<td>
					Name
				</td>
				<td>
					Email
				</td>
				<td>
					Password
				</td>
				<td>
					Gender
				</td>
				<td>
					PAN_No
				</td>
				<td>
					Adhaar_No
				</td>
			</tr>

<?php
if(!empty($result))
{
	foreach($result as $data){



?>

			<tr>
				<td>
					<input type="text" name="f1" id="f_1" value="<?php echo $data['name']?>">
				</td>
				<td>
					<input type="Email" name="f2" onchange="checkemail(this.value)" id="f_2" value="<?php echo $data['email']?>">
				</td>
				<td>
					<input type="Password" name="f3" id="f_3" value="<?php echo $data['password']?>">
				</td>
				<td>
					
					<input type="text" name="Gender" value="<?php echo $data['gender']?>">
					
				</td>
				<td>
					<input type="text" name="f4" id="f_4" value="<?php echo $data['pan_no']?>">
				</td>
				<td>
					<input type="text" name="f5" id="f_5" value="<?php echo $data['aadhar_no']?>">
				</td>
				<td>
				<a href='edit_register.php?id=<?=$data['id']?>'>Edit</a>
					<button type="button"  onclick ="deleteid(this.value)" value="<?php echo $data['id']?>">DELETE</button>
				</td>	
				</tr>

				<?php
	}
}

				?>


		</table>
	</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
function deleteid(id)
{
	if(confirm('Are you sure delete.')){
		$.ajax({
			type:'POST',
			url:'deleteid.php',
			data:{Deleterow:id},
			success:function(response){
				if(response=='1')
				{
					alert('Delete Successfully.');
					location.reload();
				}
			}
		});
	}
}	


</script>