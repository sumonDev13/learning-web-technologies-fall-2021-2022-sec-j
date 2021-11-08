<?php
session_start();
if (isset($_COOKIE['isLoggedIn'])) {
    if ($_COOKIE['isLoggedIn'] == 'true') {
        header('location: home.php');
    }
}

?>
<html>


<body>
    <h1>Registration</h1>
    <form action="handleRegistration.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="id">User Id</label>
        <input type="text" name="id">
        <br>
        <label for="password">Pasword</label>
        <input type="text" name="password">
        <br>
        <label for="password2">Confirm Password</label>
        <input type="text" name="password2">
       

        <br>

        <input type="radio" name="userType" value="User" checked>User
        <input type="radio" name="userType" value="Admin">Admin

        <br>

        <input type="submit" name="submit" value="Submit">
    </form>
    <a href="login.php">Sign In</a>
</body>

</html>