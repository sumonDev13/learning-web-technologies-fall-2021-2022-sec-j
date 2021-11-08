<?php
if (isset($_POST['submit'])) {
    $id = $_GET['id'];
    if ($_POST['username'] != "") {
        if ($_POST['password'] != "") {
            if ($_POST['email'] != "") {

                if (copy('user.txt', 'userBac.txt') != 1) {
                    echo 'Error backing up';
                    return;
                }

                $myfile = fopen("user.txt", 'w');
                $mybacfile = fopen("userBac.txt", "r");
                $counter = 0;

                while (!feof($mybacfile)) {
                    $data = fgets($mybacfile);
                    if ($data != "") {
                        if (++$counter == $id) {
                            fwrite($myfile, $_POST['username'] . "|" . $_POST['password'] . "|" . $_POST['email']);
                        } else {
                            $user = explode('|', $data);
                            fwrite($myfile, trim($user[0]) . '|' . trim($user[1]) . '|' . trim($user[2]));
                        }
                        fwrite($myfile, "\n");
                    }
                }

                fclose($myfile);
                fclose($mybacfile);
                $mybacfile = fopen("userBac.txt", "w");
                fwrite($mybacfile, "");
                fclose($mybacfile);

                header('location: userlist.php');
            } else {
                echo "Invalid email...";
            }
        } else {
            echo "Invalid password...";
        }
    } else {
        echo "Invalid username...";
    }
}
