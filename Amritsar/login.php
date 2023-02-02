<!DOCTYPE html>

<html lang="en">
<?php

    $message="logged in succesfully...redirecting to home page";
    session_start();

    if(isset($_SESSION["logged_in"])){
        header("Location:index.php");
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include 'connection.php';
        $username=$_POST['username'];
        $password=$_POST['Password'];
        $sql = "SELECT id,email, password FROM 1_user";
        $result = $link->query($sql); 

        if ($result->num_rows > 0) {

            $fnd=0;

            while($row = $result->fetch_assoc()) {
                if($row["email"]==$username AND $row["password"]==$password) {    
                    $_SESSION["email"] = $username;
                    $_SESSION["registration-going-on"]="0";
                    $fnd=1;
                    $_SESSION["logged_in"]="1";
                    echo '<div class="alert alert-success" role="alert">'.$message.'</div>';
                    echo "<script>setTimeout(\"location.href = 'index.php';\",3000);</script>";
                }
            }
            if($fnd==0)
                echo("<script>alert('mobile number and password not matches')</script>");
        } else {
            echo("alert('mobile number and password not matches')");
        }

        $link->close();
    }
?>
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
 

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GMN9X3FCRC"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-GMN9X3FCRC');
    </script>

    <div class="nav-bar">
        <div class="title">
            <h3>Login</h3>
        </div>
    </div>
</head>
 
<body style="padding: 40px;">

    <form class="form-login" action="login.php" method="POST">

        <div class="form-group">
            <label>Mobile number</label>
            <input class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Mobile number" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="Password" id="Password" placeholder="Password" required>
        </div>

        <button type="submit" class="btn btn-primary btn-lg">Login</button>
        <button type="button" class="btn btn-warning btn-lg" id="register-button">Create Account</button>

    </form>

     

    <script>

            $("#register-button").click(function () {
                window.location.replace("register.php");
            });

    </script>
</body>
</html>