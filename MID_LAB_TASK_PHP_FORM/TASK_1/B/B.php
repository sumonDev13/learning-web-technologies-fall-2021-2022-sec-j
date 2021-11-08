<?php 

	//print_r($_GET);
	
	if(isset($_POST['submit']))
	{
		$name = $_POST['myname'];
		if($name == ""){
			echo "null value...";
		}else{
			echo $name;
		}	
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Name Field </title>
</head>
<body>	
	<form method="POST" action="output.php">

		<fieldset>
			<legend>NAME</legend>
			<table>
				<tr>
					
					<td>
						<input type="text" name="myname" value="">
					</td>
					

					
				</tr>
				</fieldset>

				<td>
						<input type="submit" name="submit" value="Submit">
					</td>
			</table>
		
	</form>
</body>
</html>

<html>
<head>
	<title>page2</title>
</head>
<body>
	<form>
		
	Email: <br> <input type="email" name="" value=""> <br>
		<button>Submit</button>
		
	</form>
</body>
</html>