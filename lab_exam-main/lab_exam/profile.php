<?php
    session_start();
    if(isset($_COOKIE['isLoggedIn'])){
        if($_COOKIE['isLoggedIn']=='true'){
           ?> 
           
           <table border="1">
               <tr>
                   <th colspan="2">Profile</th>
               </tr>
               <tr>
                   <td>ID</td>
                   <td><?php echo $_COOKIE['loggedInId'] ?></td>
               </tr>
               <tr>
                   <td>NAME</td>
                   <td><?php echo $_COOKIE['loggedInName'] ?></td>
               </tr>
               <tr>
                   <td>USER TYPE</td>
                   <td><?php echo $_COOKIE['loggedInUserType'] ?></td>
               </tr>
               <tr>
                   <td colspan="2"><a href="home.php">Go Home</a></td>
               </tr>
           </table>
           
           <?php
        }
        else{
            header('location: login.php');
        }
    }
    else{
        header('location: login.php');
    }
?>