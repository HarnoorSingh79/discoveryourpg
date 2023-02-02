<?php
session_start();
$in1 = $_REQUEST['in1'];
$in2 = $_REQUEST['in2'];
$in3 = $_REQUEST['in3'];
$in4 = $_REQUEST['in4'];
$in5 = $_REQUEST['in5'];
$in6 = $_REQUEST['in6'];
$in7 = $_REQUEST['in7'];
$in8 = $_REQUEST['in8'];
$in9 = $_REQUEST['in9'];

//sending a mail
$msg = "
name = $in1
mobile = $in2
From = $in3
Number of people = $in4
location they want protion in = $in5
budget = $in6
background = $in7
special req. = $in8
Time limit = $in9
";
$from = "admin@discoveryourpg.com";
$to = "discoverpg18519@gmail.com";
$subject = "Portion Visit scheduled";
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
    <title>Portion Form done | Discoveryourpg </title>
    <link rel="stylesheet" href="../css/style3.css">
</head>
<body style="background-color: black;">

<h1>Form submit successfully!</h1>
<p>You will soon recieve a call from our customer service</p>
<a href="../index.php">Back to homepage</a>
</body>
</html>
