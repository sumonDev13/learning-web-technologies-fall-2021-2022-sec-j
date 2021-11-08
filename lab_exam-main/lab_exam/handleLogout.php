 (5 sloc)  121 Bytes
<?php

    session_start();
    setcookie('isLoggedIn', 'false', time()+3600, '/');
    header('location: login.php')

?>