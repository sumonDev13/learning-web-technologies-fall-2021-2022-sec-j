<?php
$id = $_GET['id'];
if (copy('user.txt', 'userBac.txt') != 1) {
	echo 'Error backing up';
	return;
}
$myBacfile = fopen('userBac.txt', 'r');
$myfile = fopen('user.txt', 'w');
$counter = 0;

while (!feof($myBacfile)) {
	$data = fgets($myBacfile);
	if ($data != "") {
		if (++$counter != $id) {
			fwrite($myfile, $data);
		}
	}
}

header('location: userlist.php');

fclose($myfile);
fclose($myBacfile);
$myBacfile = fopen('userBac.txt', 'w');
fwrite($myBacfile, "");
fclose($myBacfile);
?>