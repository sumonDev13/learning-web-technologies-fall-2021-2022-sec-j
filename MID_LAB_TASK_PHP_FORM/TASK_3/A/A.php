<?php 

	//print_r($_GET);
	
	if(isset($_POST['submit']))
	{
		$gender = $_POST['gender'];
		if($gender == ""){
			echo "null value...";
		}else{
			echo $gender;
		}	
	}
	
?>
<html>

<head>
	<title>page3</title>
</head>
<body>
	<form method="POST" action="output.php">
		<fieldset>
			<legend>Gender</legend>
		 
			<input type="radio" name="gender" value=""> Male
			<input type="radio" name="gender" value=""> Female
			<input type="radio" name="gender" value=""> Other
			<br>

		</fieldset>
		<button>Submit</button>
		
	</form>
</body>
</html>

		
	