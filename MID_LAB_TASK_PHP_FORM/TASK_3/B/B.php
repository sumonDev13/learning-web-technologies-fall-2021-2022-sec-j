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
	<form method="POST" action="<?php 

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
</form>
</body>
</html>

	
		
