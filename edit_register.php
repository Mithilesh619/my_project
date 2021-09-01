<?php
$con=new PDO("mysql:hostname=localhost;dbname=mithilesh","root","") or die("Error in connecting Database");
$id=$_GET['id'];
//print_r($id);die();
$sql=$con->prepare("select * from employee where id=?");
$sql->execute([$id]);
$result=$sql->fetchAll(PDO::FETCH_ASSOC);
//print_r($result);die();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST" action="registerinfo.php">
		<table>
			<tr>
				<td>
					Name
				</td>
				<td>
					<input type="text" name="f1" id="f_1" value="<?php echo $result[0]['name']?>">
					<input type="hidden" name="h1" id="h_1" value="<?php echo $result[0]['id']?>">
				</td>
			</tr>
			<tr>
				<td>
					Email
				</td>
				<td>
					<input type="Email" name="f2" onchange="checkemail(this.value)" id="f_2" value="<?php echo $result[0]['email']?>">
				</td>
			</tr>
			<tr>
				<td>
					Password
				</td>
				<td>
					<input type="Password" name="f3" id="f_3" value="<?php echo $result[0]['password']?>">
				</td>
			</tr>
			<tr>
				<td>
					Gender
				</td>
				<td>
					<input type="radio" name="Gender" value="M"<?php 
					if($result[0]['gender']=="M")
						echo "checked" ?>>Male
					<input type="radio" name="Gender" value="F"<?php 
					if($result[0]['gender']=="F")
						echo "checked"?>>Female
				</td>
			</tr>
			<tr>
				<td>
					PAN_No
				</td>
				<td>
					<input type="text" name="f4" id="f_4" value="<?php echo $result[0]['pan_no']?>">
				</td>
			</tr>
			<tr>
				<td>
					Adhaar_No
				</td>
				<td>
					<input type="text" name="f5" id="f_5" value="<?php echo $result[0]['aadhar_no']?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="UPDATE">
					<input type="reset" value="CANCEL">
				</td>
				</tr>


		</table>
	</form>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	function checkemail(email){
		if(email!='undefined')
		{
			var hide=$('#h_1').val();
			$.ajax({
				type :'POST',
				url :'checkemail.php',
				data :{duplicate_email:email,hidden_email:hide},
				success :function(response){
					if(response=='1')
					{
						alert('User Already Existed');
				        $('#f_2').val('');
				        $('#f_2').focus();	
					}
				}
			});
		}
	}

</script>