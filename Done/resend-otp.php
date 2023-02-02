<!DOCTYPE html>

<html lang="en">
 
<?php
    session_start();

    $otp=rand(100000,999999);
    $message=strval($otp);

    $fields = array(
        "variables_values" => "$message",
        "route" => "otp",
        "numbers" => "$email",
    );
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_SSL_VERIFYHOST => 0,
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode($fields),
      CURLOPT_HTTPHEADER => array(
        "authorization: PO3q7MxhiArel5m8V4D9TFotJpRyBX0dWgcCzG2wvnYjkfKLbUHelMBNhixLJInO4vr5Xgj92CTG1c6z",
        "accept: */*",
        "cache-control: no-cache",
        "content-type: application/json"
      ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if($err){
        $_SESSION["username"]=$username;
        $_SESSION["OTP"]=$otp;
        $_SESSION["Email"]=$email;
        $_SESSION["Password"]=$password;
        $_SESSION["registration-going-on"]="1";
        header("Location:verify-otp.php");
    } else{
        echo("OTP Not send, try again!");
    }
?>
 
<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content=

        "width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link rel="stylesheet" type="text/css"

        href="css/style.css" media="screen" />
 

    <!--  Adding bootstrap  -->

    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"

        integrity=
"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"

        crossorigin="anonymous">
 

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"

        integrity=
"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"

        crossorigin="anonymous">

    </script>

     

    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"

        integrity=
"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"

        crossorigin="anonymous">

    </script>

     

    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"

        integrity=
"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"

        crossorigin="anonymous">

    </script>

     

    <div class="nav-bar">

        <div class="title">

            <h3>welcome to coer library</h3>

        </div>

    </div>
</head>
 
<body style="padding: 40px;">

    <div class="form">

        <form action="register.php" method="POST">

            <label><b>Register </b></label>

            <hr class="first">

            <label><b>Coer-ID</b></label>

            <input type="text" name="Coer-ID"

                placeholder="Coer-ID" required id="Coer-ID"

                class="float-left1">

            <br><br>
 

            <label><b>Email</b></label>

            <input type="email" name="Email"

                placeholder="Email" required id="Eamil"

                class="float-left1">

            <br><br>
 

            <label><b>Password </b> </label>

            <input type="Password" name="Password"

                placeholder="Password" required id="Password"

                class="float-left1">

            <br><br>
 

            <label><b>RePassword </b> </label>

            <input type="Password" name="RePassword"

                placeholder=" Re Type Password"

                required id="Repassword"

                class="float-left1">

            <br><br>
 

            <button type="submit" name="login"

                value="login" id="register-button">

                create account

            </button>

            <br><br>

        </form>

    </div>
</body>
 
</html>