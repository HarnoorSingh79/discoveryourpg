<?php

session_start();
$_SESSION['chance'] = 0;
include 'connection.php';

$sql = "SELECT * FROM `pginfo`";
$res = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($res);
mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage | discoveryourpg</title>

  <link rel="stylesheet" href="./newstyle.css">
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico" /> 
</head>
<body>

<div class="sidebar">
  <h1>Discoveryourpg</h1>
  <hr style="border-top: 5px solid #0375B4;  width:30%">
  <h2>What are u looking for?</h2>
  <h4>(Click below options to get pg which fit your requirement)</h4>
  <br>
  <button class="button" onclick="window.location.href = 'base.php?id=BSP'">BOYS PG</button>
  <button class="button" onclick="window.location.href = 'base.php?id=GSP'">GIRLS PG</button>
</div>

<div class="content">
<div class="row">
  <?php
  if ($res->num_rows > 0) {
      // output data of each row
      while($row = $res->fetch_assoc()) {
  ?>
  <div class="column">
  <div class="card" onclick="window.location.href = 'bg.php?id=<?php echo $row['names'] ?>'">
    <img src="./image/<?php echo $row['img1'] ?>" alt="" class="pimage" style="margin-top: -1%;">
    <h3><?php echo $row['names'] ?> PG</h3>
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
