
<html>

<head>
	<title>page3</title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Gender</legend>
		 
			<input type="radio" name="gender" value="<?php
													if (isset($_REQUEST['submit'])) {
														$name = $_REQUEST['myname'];
														if ($name == "") {
															echo "null value...";
														} else {
															echo $name;
														}
													}
													?>">"> Male
			<input type="radio" name="gender" value="<?php
													if (isset($_REQUEST['submit'])) {
														$name = $_REQUEST['myname'];
														if ($name == "") {
															echo "null value...";
														} else {
															echo $name;
														}
													}
													?>">"> Female
			<input type="radio" name="gender" value="<?php
													if (isset($_REQUEST['submit'])) {
														$name = $_REQUEST['myname'];
														if ($name == "") {
															echo "null value...";
														} else {
															echo $name;
														}
													}
													?>">"> Other
			<br>

		</fieldset>
		<button>Submit</button>
		
	</form>
</body>
</html>

		
		
