<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Name Field </title>
</head>

<body>
    <form method="get" action="#">
        <fieldset>
            <legend>email</legend>
            <input type="email" name="email" value="<?php
                                                    if (isset($_REQUEST['submit'])) {
                                                        $email = $_REQUEST['email'];
                                                        if ($email == "") {
                                                            echo "null value...";
                                                        } else {
                                                            echo $name;
                                                        }
                                                    }
                                                    ?>">
            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>