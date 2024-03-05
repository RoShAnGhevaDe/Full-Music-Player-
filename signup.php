<?php

session_start();

include('db_connect.php');
$msg = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {

        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_Email'];
        $user_password = $_POST['user_password'];
        $user_Confirm_password = $_POST['Confirm_password'];

        if (!empty($user_name) && !empty($user_email) && !empty($user_password) && !is_numeric($user_name)) {
               # code...
             if ($user_password  === $user_Confirm_password )
             {
                $query = "INSERT INTO User (User, Email, Password) VALUES ('$user_name', '$user_email', '$user_password')";
                mysqli_query($con, $query);
                header ("Location: login.php");
             } 
             else {
                # code...
                $msg = "password Not Match";
             }
             
        }

    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Sign Up To Dive Into Music </title>
</head>

<body>
    <header>

        <div class="left_bx1">
            <div class="content">

                <form method="post">
                    <h3> Sign Up </h3>
                    <div class="card">
                        <label for="Name">Name</label>
                        <input type="text" name="user_name" placeholder="Enter Your UserName">
                    </div>
                    <div class="card">
                        <label for="Email">Email</label>
                        <input type="text" name="user_Email" placeholder="Enter Your Email">
                    </div>
                    <div class="card">
                        <label for="Password">Password</label>
                        <input type="password" name="user_password" placeholder="Enter Your Pasword">
                    </div>
                    <div class="card">
                        <label for="Confirm Password">Confirm Password</label>
                        <input type="Confirm password" name="Confirm_password" placeholder="Confirm Your Pasword">
                    </div>
                    <input type="submit" value="Login" class="submit">
                    <div class="check">
                        <input type="checkbox" name="" id=""><span> Main hi hooon...</span>
                    </div>
                    <p>Already Have an account ? -> <a href="login.html"> Login </a></p>
                </form>
            </div>
        </div>


        <div class="right_bx1">

         <img src="Images/laptop.jpg" alt="">
         <!-- <h3> Bhai Password Galat Hey</h3>  -->

         <?php
         
         echo ('<h3>' .$msg.'</h3>');

         ?>
        </div>


    </header>

</body>

</html>