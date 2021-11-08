<?php
session_start();
if(isset($_POST['submit']))
{
	if($_POST['id'] !="")
	{
		if($_POST['password'] !="")
		{
			if($_POST['password']==$_POST['password2'])
			{
				$myfile =fopen('user.txt','a');
				$user =$_POST['id'] . "|" . $_POST['password']. "|" . $_POST['name'] . "|" . $_POST['userType'] . "\r\n";

				fwrite($myfile, $user);
				fclose($myfile);

				echo $user;

				header('location:login.php');
			}
			else {
                echo "Passwords do not match...";
            }
        } else {
            echo "Invalid password...";
        }
    } else {
        echo "Invalid username...";
    }
}
?>