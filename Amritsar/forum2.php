<?php
session_start();
$pgasked = $_SESSION['pgasked'];
$dealer = $_SESSION['dealer'];
$date = $_REQUEST['cdate'];
$time = $_REQUEST['ctime'];
$query = $_REQUEST['customerNote'];
$mobile = $_SESSION['email'];

include 'connection.php';

//Fetching data from database
$sql1 = "SELECT * FROM 1_user WHERE email = '$mobile'";
$res1 = mysqli_query($link, $sql1);
$row1 = mysqli_fetch_assoc($res1);

$name = $row1['username'];

//Inserting data.
mysqli_query($link,"INSERT INTO customer (dealer, cname, mobile, pgasked, cdate, ctime) 
VALUES ('$dealer','$name','$mobile','$pgasked','$date','$time')");

//sending a mail
$msg = "$name ($mobile) will visit $pgasked pg on $date by $time. The query is $query";
$from = "admin@discoveryourpg.com";
$to = "discoverpg18519@gmail.com";
$subject = "PG Visit scheduled";
$message = $msg;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);

//Fetching data from database for location
//$sql = "SELECT * FROM locations WHERE names = '$pgasked'";
//$res = mysqli_query($link, $sql);
//$row = mysqli_fetch_assoc($res);
//mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message sent | Discoveryourpg </title>
    <link rel="stylesheet" href="./css/style3.css">
</head>
<body style="background-color: black;">

<h2>Your visit has been scheduled!</h2>
<p>You will recieve a call soon by our customer service</p> <br> <br>

</body>
</html>
