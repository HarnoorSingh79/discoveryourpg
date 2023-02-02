<?php

session_start();
include 'connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM `pginfo` WHERE names = '$id'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
mysqli_close($link);

$_SESSION['dealer'] = $row['dealer'];
$_SESSION['pgasked'] = $row['names'];

$rent1 = $row['nofoodnoac'];
$rent2 = $row['nofoodac'];
$rent3 = $row['foodnoac'];
$rent4 = $row['foodac'];
$rent5 = $row['single'];

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
if ($rent5 == 0){
    $rent5 = 'Not Available';
}

$pgname = $row['names'];

if(isset($_SESSION["logged_in"])){
    $linkrs = "forum.php?id=$pgname";
} else{
    $linkrs = "login.php?";
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="centerpage" style="background-color: black">
    <h1><?php echo $row['names'] ?> PG</h1>
        <button class="button" style=" margin: 5% 0; width:auto;" onclick="window.location.href = '<?php echo $linkrs ?>'">
        Schedule your visit 
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
            <tr>
            <td>Single room</td>
                <td><?php echo $rent5 ?></td>
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
                <td>Nearest Metro bus station</td>
                <td><?php echo $row['metro']?></td>
            </tr>
            <tr>
                <td style="width:50%">GNDU</td>
                <td><?php echo $row['gndu']?></td>
            </tr>
            <tr>
                <td>Khalsa College</td>
                <td><?php echo $row['khalsa']?></td>
            </tr>
        </table>

        <h1 style="margin-top: 30px;">Images</h1>

        <img src="./image/<?php echo $row['img1'] ?>" alt="" class="pgimage" style="margin-top: 1%;">
        <img src="./image/<?php echo $row['img2'] ?>" alt="" class="pgimage">
        <img src="./image/<?php echo $row['img3'] ?>" alt="" class="pgimage">
    </div>
    <div class="sec5">
    <h2>About Us</h2> <br>
    <p>Discover Your PG is an online service making process of finding PG's hassle-free, time & money saving for students/working professionals. Discover Your PG has been started keeping in mind the requirements of students. Many options of PGs will be available on our website for you to discover your pg.
    We, along with the help of dealers, have listed PGs on our website. Since this website have been made keeping in mind the interest of students, NO commission will charged on PGs directly listed by Discover Your PG. Others dealers on our website will charge their respective commission from you.</p>
    <br>
    <a href="https://www.facebook.com/groups/1254838281681770/?ref=share" class="fa fa-facebook" style="color:white; background-color:black; font-size:25px; text-decoration:none; margin:20px 0 10px 0;"></a>
    <a href="https://www.instagram.com/discover_your_pg/" class="fa fa-instagram" style="color:white; background-color:black; font-size:25px; text-decoration:none; margin:20px;"></a>
    <a href="" class="fa fa-youtube" style="color:white; background-color:black; font-size:25px; text-decoration:none; margin:20px 0 0 0;"></a>
</div>
</body>
</html>
