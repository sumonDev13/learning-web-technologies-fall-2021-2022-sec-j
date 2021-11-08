<?php

				if (isset($_REQUEST['submit'])) {
					$name = $_REQUEST['myname'];
					if ($name == "") {
						echo "Name can not be empty";
						return;
					}
				}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>name</title>
</head>
<body>
	<form method="get" action="#">
		<fieldset>
			<legend>NAME</legend>
			<input type="text" name="myname" value="">
			<hr>
			<input type="submit" name="submit" value="Submit">
			<p>
				
			</p>
		</fieldset>
	</form>

</body>
</html>