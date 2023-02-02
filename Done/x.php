<?php 

include 'connection.php';
$username = $_SESSION['user'];

$sql = "SELECT * FROM `pginfo` WHERE dealer = '$username'";
$res = mysqli_query($link, $sql);

$sql2 = "SELECT * FROM `customer` WHERE dealer = '$username'";
$res2 = mysqli_query($link, $sql2);

mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href = "style5.css">   
</head>
<body>
<h1 style="margin-left: 20px;">Hello <?php echo $username ?></h1>

<button class="tablink" onclick="openPage('Home', this, 'red')"id="defaultOpen">Home</button>
<button class="tablink" onclick="openPage('News', this, 'green')">Record</button>
<button class="tablink" onclick="openPage('Contact', this, 'blue')">Add New</button>
<button class="tablink" onclick="openPage('About', this, 'orange')">Contact</button>

<div id="Home" class="tabcontent">
    <h3>Customer that Have contacted You</h3>
    <?php
    if ($res2->num_rows > 0) {
        while($row2 = $res2->fetch_assoc()) {
    ?>
    <div class="card">
        <h4>Customer Name:- <?php echo $row2['cname'] ?></h4>
        <h4>Pg Asked:- <?php echo $row2['pgasked'] ?></h4>
        <h4>Mobile:- <?php echo $row2['mobile'] ?> </h4>
    </div>
    <?php    
        }
    }
    else{
        echo "<h3 style='color:black;'>No result found</h3>";
    }
    ?>  

</div>

<div id="News" class="tabcontent">
    <h3>Your List of PG</h3>
    
    <?php
    if ($res->num_rows > 0) {
        while($row = $res->fetch_assoc()) {
    ?>
    <div class="card" onclick="window.location.href = 'bg.php?id=<?php echo $row['names'] ?>'">
        <h4>PG Name:- <?php echo $row['names'] ?></h4>
        <h4>Commisson:- <b><em>&#8377</em><?php echo $row['comm'] ?></b></h4>
    </div>
    <?php    
        }
    }
    else{
        echo "<h3 style='color:black;'>No result found</h3>";
    }
    ?>

</div>

<div id="Contact" class="tabcontent">
  <button class="btn" onclick="window.location.href = 'xforum.php'">Add New PG</button>
</div>

<div id="About" class="tabcontent">
  <h3>Contact us</h3>
  <p>In case of problem, Call 6283900509</p>
</div>

<script>
    function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
</body>
</html>