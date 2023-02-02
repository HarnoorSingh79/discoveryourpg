<?php

session_start();
include 'connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM `pginfo` WHERE names = '$id'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
mysqli_close($link);

$_SESSION['dealer'] = $row['dealer'];

$rent1 = $row['nofoodnoac'];
$rent2 = $row['nofoodac'];
$rent3 = $row['foodnoac'];
$rent4 = $row['foodac'];

if ($rent1 == 0){
    $rent1 = 'Not Available';
}
if ($rent2 == 0){
    $rent2 = 'Not Available';
}
if ($rent3 == 0){
    $rent3 = 'Not Available';
}
if ($rent4 == 0){
    $rent4 = 'Not Available';
}

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
<body style="background-color: black">
    <div class="centerpage">
    <h1><?php echo $row['names'] ?> PG</h1>
        <button class="button" style=" margin: 5% 0; width:auto;" onclick="window.location.href = 'forum.php?id=<?php echo $row['names']?>'">
            <?php 
            if ($row['comm'] == "0") {
                echo 'Get the Pg number and location!';
            }
            else{
                echo 'Get Dealer Number';
            }
            
            ?>    
        </button>
        <br>
        <table>
            <tr>
                <th style="width:50%">Type</th>
                <th>Rent</th>
            </tr>
            <tr>
                <td>Simple room</td>
                <td><?php echo $rent1 ?></td>
            </tr>
            <tr>
            <td>AC room</td>
                <td><?php echo $rent2 ?></td>
            </tr>
            <tr>
            <td>Room + Food</td>
                <td><?php echo $rent3 ?></td>
            </tr>
            <tr>
            <td>AC Room + Food</td>
                <td><?php echo $rent4 ?></td>
            </tr>
        </table>

        <h1 style="margin: 30px 0;">Facilities</h1>
        <table>
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
