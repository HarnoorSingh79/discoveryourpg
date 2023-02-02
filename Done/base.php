<?php

session_start();
include 'connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM `index data` WHERE id = '$id'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);

switch ($id) {
  case "BSP":
    $sql2 = "SELECT * FROM `pginfo` WHERE types = 'B'";
    break;
  case "GSP":
    $sql2 = "SELECT * FROM `pginfo` WHERE types = 'G'";
    break;
  case "BGK":
    $sql2 = "SELECT * FROM `pginfo` WHERE types = 'B'";
    break;
  case "GGK":
    $sql2 = "SELECT * FROM `pginfo` WHERE types = 'G'";
    break;
  case "BS":
    $sql2 = "SELECT * FROM `pginfo` WHERE types = 'B'";
    break;
  case "GS":
    $sql2 = "SELECT * FROM `pginfo` WHERE types = 'G'";
    break;
  case "BAC":
    $sql2 = "SELECT * FROM `pginfo` WHERE types = 'B'";
    break;
  case "GAC":
    $sql2 = "SELECT * FROM `pginfo` WHERE types = 'G'";
    break;
  case "BA":
    $sql2 = "SELECT * FROM `pginfo` WHERE types = 'B' AND nofoodac >0";
    break;
  case "GA":
    $sql2 = "SELECT * FROM `pginfo` WHERE types = 'G' AND nofoodac >0";
    break;
  case "BN":
    $sql2 = "SELECT * FROM `pginfo` WHERE types = 'B' AND nofoodnoac >0";
    break;
  case "GN":
    $sql2 = "SELECT * FROM `pginfo` WHERE types = 'G' AND nofoodnoac >0";
    break;
}


$res2 = mysqli_query($link, $sql2);
$row2 = mysqli_fetch_assoc($res2);
mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pg near Gndu or khalsa college | discoveryourpg</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico" /> 
</head>
<body>

<div class="sidebar">
  <h1>Discoveryourpg</h1>
  <hr style="border-top: 5px solid #0375B4;  width:30%">
  <h2><?php echo $row['h1'] ?></h2>
  <h4>(Click below options to get pg which fit your requirement)</h4>
  <br>
  <button class="button" onclick="window.location.href = '<?php echo $row['link1'] ?>'"><?php echo $row['YES'] ?></button>
  <button class="button" onclick="window.location.href = '<?php echo $row['link2'] ?>'"><?php echo $row['NO'] ?></button>
</div>

<div class="content">
<div class="row">
  <?php
  if ($res2->num_rows > 0) {
      while($row2 = $res2->fetch_assoc()) {
  ?>
  <div class="column">
  <div class="card" onclick="window.location.href = 'bg.php?id=<?php echo $row['names'] ?>'">
    <img src="./image/<?php echo $row2['img1'] ?>" alt="" class="pimage" style="margin-top: -1%;">
    <h3><?php echo $row2['names'] ?> PG</h3>
  </div>
  </div>

  <?php    
      }
  }
  else{
    echo "No result found";
  }
  ?>
</div>
</div>

</body>
</html>
