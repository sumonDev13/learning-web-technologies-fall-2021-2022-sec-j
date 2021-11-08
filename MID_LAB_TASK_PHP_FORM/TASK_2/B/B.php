<?php 

    //print_r($_GET);
    
    if(isset($_POST['submit']))
    {
        $email = $_POST['Email'];
        if($email == ""){
            echo "null value...";
        }else{
            echo $email;
        }   
    }
    
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Name Field </title>
</head>
<body>  
    <form method="POST" action="output.php">

        <fieldset>
            <legend>email</legend>
            <table>
              
                    
                </tr>
                </fieldset>

                
            </table>
        
    </form>
</body>
</html>

<html>
<head>
    <title>page2</title>
</head>
<body>
    <form>
        
    Email: <br> <input type="email" name="" value=""> <br>
        <button>Submit</button>
        
    </form>
</body>
</html>