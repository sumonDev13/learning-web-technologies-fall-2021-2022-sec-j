<?php
session_start();
if (isset($_COOKIE['isLoggedIn'])) {
    if ($_COOKIE['isLoggedIn'] == 'true') { ?>

        <html>

        <body>
            <h1>Welcome <?php echo $_COOKIE['loggedInName'] ?></h1>
            <a href="profile.php">Profile</a>
            <a href="changePassword.php">Change Password</a>
            <a href="viewUsers.php">View Users</a>

            <a href="handleLogout.php">Logout</a>
        </body>

        </html>

<?php } else {
        header('location: login.php');
    }
} else {
    header('location: login.php');
}
?>