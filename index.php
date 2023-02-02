<?php

session_start();
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
    
    <title>Find pg in amritsar | discoveryourpg</title>
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="./css/style6.css">
    <link rel="stylesheet" href="./base/base.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GMN9X3FCRC"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-GMN9X3FCRC');
    </script>

    <meta name="description" content="Find pg in amritsar ( sharing rooms, single room, AC rooms) near
    gndu, khalsa college, ranjit avenue, partap nagar, batala road, putlighar, chhetta">

</head>
<body>

<?php include './base/nav.php'?>

<?php
if(isset($_SESSION["logged_in"])){
   echo "<div class='alert01'>You are Logged in!</div>";
}
?>
<div class="sec2">
<h1 class="sec2h" style="text-shadow: 1px 1px 2px black;">FILL FORM AND GET IT DONE</h1>
<strong style="text-shadow: 1px 1px 2px black; cursor:pointer;">A Service aiming to help you find Pg, Portion, house with ease like never before!</strong>
</div>


<div class="sec6">
  <h2 style="margin: 0 0 10px 0">What we do?</h2>
  <p>
    Discover Your PG is an online service which aims to make process of finding PG, Portions and Properties hassle-free. 
    <br><br>
    Unlike other buisnesses, We aims to focus on tier 2 and tier 3 cities in india such as 
    Amritsar, Chandigarh, Ajmer, Bhopal, Gurgaon, indore, jaipur, lucknow, Mysore and many other.  
    <br><br>
    Now, Question arises how will we do that? Actually it is simple, you fill the form, we get your requirement,
    We contact our affilated and certified property dealers and check if they have property which met your requirement, 
    if yes, we allocate them to you.
    <br><br>
    In short, we save your time and stress which these moving sitution will normally cause. 
  </p>
  <br> <br>
</div>

<div class="sec3">
    <h2>What are You looking for?</h2>   
    <span>Drag the cards to move them</span>
    <div class="container">
      <div class="card-carousel">
      <div class="card" id="1" onclick="window.location.href ='./form/owner.php'">
      <img src="./image/z05.jpg" alt="" class="pgimage">
          <p>Register your property</p>
        </div>  
        <div class="card" id="2" onclick="window.location.href ='./form/pg.php'">
        <img src="./image/z04.jpg" alt="" class="pgimage">
        <p>Single room </p>
        </div>
        <div class="card" id="3" onclick="window.location.href ='./form/pg.php'">
          <img src="./image/z01.webp" alt="" class="pgimage">
          <p>PG</p>
        </div>
        <div class="card" id="4" onclick="window.location.href ='./form/portion.php'">
        <img src="./image/z02.jpg" alt="" class="pgimage">
          <p>Protion</p>
        </div>
        <div class="card" id="5" onclick="window.location.href ='./form/buy.php'">
        <img src="./image/z03.jpg" alt="" class="pgimage">
          <p>Buy property</p>
        </div>
      </div>
      <a href="#" class="visuallyhidden card-controller">Carousel controller</a>
    </div>
    <br> <br> <br>
</div>

<div class="sec4">
  <h2 style="font-family: cursive;">Know your Requirement</h2>
  <!--
  <p>
    If you are first timer, Please understands that	Discover Your PG is an online service making process of finding PG, Portions and Properties hassle-free.
    <br><br>
    Now, if you are looking to live in new city and had limited budget then you can opt for pg(Paying Guest). 
    In this service you will be sharing your room with other people and the typical rent is 2000-10000 (depending on city).
    Intrested in opting for pg then fill this <a href="./form/pg.php">form</a>
    <br><br>
    If you are person looking to move in new city along with your family then you can opt for portion. 
    The typical rent is 8000-30000+ (depending on city).
    Intrested in opting for portion then fill this <a href="./form/portion.php">form</a>
    <br><br>
    And lastly if you are singe person looking for room in new city but you don't want to share your room with other then 
    you can fill this <a href="./form/singleroom.php">form</a>
  </p>
    <br> <br>
-->
</div>

<div class="row">
  <div class="column sec91">
    <h2>Looking for PG?</h2>
    <p>Moving to new city but have limited budget then we recommeded you opt for PG(Paying guest). It is service 
      where you are provided with a cupboard for storing your things and a bed to sleep on. It may also include other services
      such as wifi, commmon areas, AC, geyser extra depending on rent.
      <br> <br>
      <button class="btn2" onclick="window.location.href ='./form/pg.php'">Fill the form</button>
    </p>
  </div>

  <div class="column sec92">
    <h2>Looking for Portion?</h2>
    <p>Portion is service which include portion of house that you can lease. It is recommended if you are person looking to move in new city along with your family.
      <br> <br>  
    <button class="btn2" onclick="window.location.href ='./form/portion.php'">Fill the form</button>
    </p>
  </div>

  <div class="column sec93">
    <h2>Buy the property</h2>
    <p>Thinking of buying a property then worry not! we can help you with it. We deal with buying and selling of
      all type of properties such as plots, house, shops, and flats
      <br><br>
      <button class="btn2" onclick="window.location.href ='./form/buy.php'">Fill the form</button>
    </p>
  </div>

  <div class="column sec94">
    <h2>Register your property</h2>
    <p>Are you a property owner? then register with us because we deal with buying, selling and renting of property. 
      <br><br>
      <button class="btn2" onclick="window.location.href ='./form/owner.php'">Fill the form</button>
    </p>
  </div>
</div>

<div class="sec5">
    <h2>Having a Query?</h2> <br>
    <p>
    If you are having any kind of query regarding any of our services then you can call us at 6283900509 or 6284317085. You can also contact us via our social media handles.
    </p>

	<br>
	<a href="https://www.facebook.com/groups/1254838281681770/?ref=share" class="fa fa-facebook" style="font-size:25px; text-decoration:none; margin:20px 0 10px 0;"></a>
    <a href="https://www.instagram.com/discover_your_pg/" class="fa fa-instagram" style="background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);   -webkit-background-clip: text;
        background-clip: text; -webkit-text-fill-color: transparent; color:#bc2a8d; font-size:25px; text-decoration:none; margin:20px;"></a>
    <!--
    <a href="" class="fa fa-youtube" style="color:red; font-size:25px; text-decoration:none; margin:20px 0 0 0;"></a>
-->
  </div>
<script src="./js/main.js"></script>
</body>
</html>