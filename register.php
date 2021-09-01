<?php
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
					<input type="text" name="f1" id="f_1">
				</td>
			</tr>
			<tr>
				<td>
					Email
				</td>
				<td>
					<input type="Email" name="f2" onchange="checkemail(this.value)" id="f_2">
				</td>
			</tr>
			<tr>
				<td>
					Password
				</td>
				<td>
					<input type="Password" name="f3" id="f_3">
				</td>
			</tr>
			<tr>
				<td>
					Gender
				</td>
				<td>
					<input type="radio" name="Gender" value="M">Male
					<input type="radio" name="Gender" value="F">Female
				</td>
			</tr>
			<tr>
				<td>
					PAN_No
				</td>
				<td>
					<input type="text" name="f4" id="f_4">
				</td>
			</tr>
			<tr>
				<td>
					Adhaar_No
				</td>
				<td>
					<input type="text" name="f5" id="f_5">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="SUBMIT">
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
			$.ajax({
				type :'POST',
				url :'checkemail.php',
				data :{duplicate_email:email},
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