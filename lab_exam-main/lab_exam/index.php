<?php
    session_start();
    if(isset($_COOKIE['isLoggedIn'])){
        if($_COOKIE['isLoggedIn']=='true'){
            header('location: home.php');
        }
        else{
            header('location: login.php');
        }
    }
    else{
        header('location: login.php');
    }
?>