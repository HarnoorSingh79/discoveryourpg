<?php

session_start();
include 'connection.php';
$id = $_GET['id'];

switch ($id) {
    case "BS":
        $sql = "SELECT * FROM `pginfo` WHERE types = 'B' AND single > 0";
        break;
    case "GS":
        $sql = "SELECT * FROM `pginfo` WHERE types = 'G' AND single > 0";
        break;
    case "BAF":
        $sql = "SELECT * FROM `pginfo` WHERE types = 'B' AND foodac > 0";
        break;
    case "BAN":
        $sql = "SELECT * FROM `pginfo` WHERE types = 'B' AND nofoodac > 0";
        break;
    case "BNF":
        $sql = "SELECT * FROM `pginfo` WHERE types = 'B' AND foodnoac > 0";
        break;
    case "BNN":
        $sql = "SELECT * FROM `pginfo` WHERE types = 'B' AND nofoodnoac > 0";
        break;
    case "GAF":
        $sql = "SELECT * FROM `pginfo` WHERE types = 'G' AND foodac > 0";
        break;
    case "GAN":
        $sql = "SELECT * FROM `pginfo` WHERE types = 'G' AND nofoodac > 0";
        break;
    case "GNF":
        $sql = "SELECT * FROM `pginfo` WHERE types = 'G' AND foodnoac > 0";
        break;
    case "GNN":
        $sql = "SELECT * FROM `pginfo` WHERE types = 'G' AND nofoodnoac > 0";
        break;
}

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
  <title>Pg for students in amritsar | Discoveryourpg</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico" /> 
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GMN9X3FCRC"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-GMN9X3FCRC');
    </script>
</head>

<body>
<div class="sec3">
    <div class="main">
    <div class="row">
    <h1 class="resh">Here Are Your Results</h1>
    <?php
    if ($res->num_rows > 0) {
        // output data of each row
        while($row = $res->fetch_assoc()) {
    ?>
    <div class="column <?php echo $row['types'] ?>">
        <div class="content" onclick="window.location.href = 'bg.php?id=<?php echo $row['names'] ?>'">
        <img src="./image/<?php echo $row['img1'] ?>" alt="error" class="pgimage1">
        <h4><?php echo $row['names'] ?> PG</h4>
        <!--<p>Location: Kabir park</p>-->
        <p>Dealer:- <?php echo $row['dealer']?> </p>
        <p>Commisson:- <b><em>&#8377</em><?php echo $row['comm'] ?></b></p>
        </div>
    </div>

    <?php    
        }
    }
    else{
        echo "No result found";
    }
    ?>

    </div> <!-- ROW MAIN -->
    </div> <!-- END MAIN -->
</div>

<script src="./my.js"></script>
</body>
</html>
