<?php

session_start();
include 'connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM `pginfo` WHERE names = '$id'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pg near Gndu or khalsa college | Discoveryourpg</title>
  <link rel="stylesheet" href="./newstyle.css">
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico" /> 
</head>
<body style="background-color: #262228">
    <div class="centerpage">
    <h1><?php echo $row['names'] ?> PG</h1>
        <button class="button" style=" margin: 5% 0; width:auto;" onclick="window.location.href = 'forum.php?id=<?php echo $row['names']?>'">Get the Pg number and location!</button>
        <br>
        <table>
            <tr>
                <th style="width:50%">Rent</th>
                <th><?php echo $row['nofoodnoac'] ?></th>
            </tr>
            <tr>
                <td>Geyser</td>
                <td>Included</td>
            </tr>
            <tr>
                <td>Wifi</td>
                <td><?php echo $row['wifi'] ?></td>
            </tr>
            <tr>
                <td>electricity bill</td>
                <td>Will be paid by tenants</td>
            </tr>
            <tr>
                <td>Kicthen</td>
                <td><?php echo $row['kitchen'] ?></td>
            </tr>
        </table>

        
        <h1 style="margin-top: 30px;">Walking time from</h1>
        <strong>* include taking metro bus</strong> <br><br>
        <table>
            <tr>
                <th style="width:50%">GNDU</th>
                <th><?php echo $row['gndu']?></th>
            </tr>
            <tr>
                <td>Khalsa College</td>
                <td><?php echo $row['khalsa']?></td>
            </tr>
            <tr>
                <td>Nearest Metro bus station</td>
                <td><?php echo $row['metro']?></td>
            </tr>
        </table>

        <h1 style="margin-top: 30px;">Images</h1>

        <img src="./image/<?php echo $row['img1'] ?>" alt="" class="pgimage" style="margin-top: 1%;">
        <img src="./image/<?php echo $row['img2'] ?>" alt="" class="pgimage">
        <img src="./image/<?php echo $row['img3'] ?>" alt="" class="pgimage">
    </div>
</body>
</html>
