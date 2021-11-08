<?php
session_start();

if (isset($_POST['submit'])) {
    $id = $_COOKIE['loggedInId'];
    $current = $_POST['current'];
    $new = $_POST['new'];
    $confirm = $_POST['confirm'];

    if ($current != "") {
        if ($new != "") {
            if ($new == $confirm) {
                $validInfo = false;

                $myfile = fopen('user.txt', 'r');

                $allUser = array();

                while (!feof($myfile)) {
                    $data = fgets($myfile);
                    if($data!=""){
                        $user = explode('|', $data);
    
                        // echo $user[0].$user[1].$user[2].$user[3];
                        if (trim($user[0]) == $id && trim($user[1]) == $current) {
                            $validInfo = true;
                            array_push($allUser, trim($user[0]) . "|" . $new . "|" . trim($user[2]) . "|" . trim($user[3]) . "\r\n");
                        } else {
                            array_push($allUser, trim($user[0]) . "|" . trim($user[1]) . "|" . trim($user[2]) . "|" . trim($user[3]) . "\r\n");
                        }
                    }
                }
                fclose($myfile);
                if ($validInfo) {
                    $myfile = fopen('user.txt', 'w');
                    foreach ($allUser as $user) {
                        fwrite($myfile, $user);
                    }
                    fclose($myfile);
                    header('location: profile.php');
                } else {
                    echo "Submited Information not valid";
                }
            } else {
                echo 'Passwords do not match';
            }
        } else {
            echo "Invalid password...";
        }
    } else {
        echo "Invalid ID...";
    }
}