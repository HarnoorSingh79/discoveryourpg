<?php      
    session_start();
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
    $_SESSION['user'] = $username;
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($link, $username);  
        $password = mysqli_real_escape_string($link, $password);  
      
        $sql = "select * from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($link, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){   
            include('x.php');
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  