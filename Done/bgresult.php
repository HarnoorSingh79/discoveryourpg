<?php
session_start();
$dealer = $_SESSION['dealer'];

$id = $_GET['id'];
$_SESSION['pgasked'] = $id;
$pgasked = $_SESSION['pgasked'];

$name = $_SESSION['username'];
$mobile = $_SESSION['Email'];

include 'connection.php';

//Fetching data from database
$sql = "SELECT * FROM locations WHERE names = '$pgasked'";
$res = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($res);
mysqli_close($link);

//sending a mail
$msg = "$name ($mobile) has checked out for $pgasked pg.";
$from = "admin@discoveryourpg.com";
$to = "discoverpg18519@gmail.com";
$subject = "Checked out";
$message = $msg;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);

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
<body>

<h1>Here is info you requested</h1> <br>
<p> <?php echo $row['names']?> PG </p>
<p> Mobile Number: <?php echo $row['mobile']?> </p>
<p> Location: <?php echo $row['loc']?> </p>
<p> Google Cordinates: <?php echo $row['google']?> </p>
<p> (Fill these coordinates in google map) </p>
<button class="button" style=" margin: 5% 0; width:auto;" onclick="window.location.href = 'forum.php?id=<?php echo $row['names']?>'"> schedule your visit </button>
</body>
</html>