<?php
include 'connection.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `index data` WHERE id = '$id'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pg near Gndu or khalsa college | Discoveryourpg</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico" /> 
</head>
<body style="background-color: black;">
    <div class="centerpage" style="padding: 240px 50px; background-color:black;">
        <h1><?php echo $row['h1'] ?></h1>
        <br>
        <button class="button" onclick="window.location.href = '<?php echo $row['link1'] ?>'"><?php echo $row['YES'] ?></button>
        <button class="button" onclick="window.location.href = '<?php echo $row['link2'] ?>'"><?php echo $row['NO'] ?></button>
    </div>
</body>
</html>
