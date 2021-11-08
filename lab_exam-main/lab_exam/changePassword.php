<?php
session_start();
if (isset($_COOKIE['isLoggedIn'])) {
    if ($_COOKIE['isLoggedIn'] == 'true') {
?>
        <form action="handleChangePassword.php" method="post">

            <label for="current">Current Password</label>
            <input type="text" name="current">
            <label for="new">New Password</label>
            <input type="text" name="new">
            <label for="confirm">Retype New Password</label>
            <input type="text" name="confirm">

            <input type="submit" name="submit" value="Change">

        </form>
        <a href="home.php">Go Home</a>
<?php
    } else {
        header('location: login.php');
    }
} else {
    header('location: login.php');
}
?>