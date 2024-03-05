<?PHP

session_start();

include('db_connect.php');
$msg = false;
if (isset($_POST['user_name'])) {
    $user_name =  $_POST['user_name'];
    $user_password =$_POST['user_password'];

    $query ="select * from user where user ='".$user_name."' AND password = '".$user_password."' limit 1";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result)==1) {
        header ('Location: Welcome.php');
    } else {
        $msg = "Incorrect Password";
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
    <title> Dive Into Music </title>
</head>

<body>
    <header>

        <div class="left_bx1">
            <div class="content">

                <form method="post">
                    <h3> Login </h3>
                    <div class="card">
                        <label for="Name">Name</label>
                        <input type="text" name="user_name" placeholder="Enter Your UserName">
                    </div>
                    <div class="card">
                        <label for="Password">Password</label>
                        <input type="password" name="user_password" placeholder="Enter Your Password">

                    </div>
                    <input type="submit" value="login" class="submit">
                    <div class="check">
                        <input type="checkbox" name="" id=""><span> Main hi hooon...</span>
                    </div>
                    <p>Don't have a account yet ? -> <a href="signup.php">Sign Up</a></p>
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