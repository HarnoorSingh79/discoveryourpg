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
<div class="sec2"><h1 class="sec2h" style="text-shadow: 1px 1px 2px black;">FIND YOUR PG WITH EASE</h1>
<strong style="text-shadow: 1px 1px 2px black; cursor:pointer;" onclick="window.location.href = './forum/portion.php'">Looking For Portion? Click here</strong></div>

<div class="sec3">
    <h2>What are You looking for?</h2>   
    <span>Drag the cards to move them</span>
<div class="container">
  <div class="card-carousel">
  <div class="card" id="1" >
  <img src="./image/pardeep 1.jpg" alt="" class="pgimage">
      <p>PG Near GNDU</p>
    </div>  
    <div class="card" id="2">
    <img src="./image/minder 1.jpg" alt="" class="pgimage">
    <p>PG Near Khalsa College</p>
    </div>
    <div class="card" id="3">
      <img src="./image/vik 1.jpg" alt="" class="pgimage">
      <p>PG in Amritsar</p>
    </div>
    <div class="card" id="4">
    <img src="./image/jaap 2.jpg" alt="" class="pgimage">
      <p>Protion in Amritsar</p>
    </div>
    <div class="card" id="5">
    <img src="./image/jp 3.jpg" alt="" class="pgimage">
      <p>Properties to Buy</p>
    </div>
  </div>
  <a href="#" class="visuallyhidden card-controller">Carousel controller</a>
</div>

<br><br><br>

<div class="sec32">
<section id="featured-products">
		<div class="content-container">
			<div id="os2" class="product-row" onclick="window.location.href ='./show.php?id=zero'">
            <div class="product-image"><img src="./image/raunak1.jpg" class="myimg"></div>
				<div class="product-text">
					<h4 class="product-title">Get Pg without Paying Any commisson</h4>
					<p>Looking to save some money? then Choose pg from these selected options and get them with our assitance without paying any commisson</p>
				</div>
			</div>
            <div class="product-row" onclick="window.location.href ='./show2.php?id=gndu'">
            <div class="product-image"><img src="./image/gndu.jpg" class="myimg"></div>
				<div class="product-text">
					<h4 class="product-title">Pg near Guru nanak dev university</h4>
					<p>Are You a university student? then now find best boys and girls pg near guru nanak dev university</p>
				</div>
			</div>
			<div class="product-row" onclick="window.location.href ='./show2.php?id=khalsa'">
            <div class="product-image"><img src="./image/khalsa.jpg" class="myimg"></div>
				<div class="product-text">
					<h4 class="product-title">Pg near Khalsa college</h4>
					<p>Are You a Khalsa collge student? then now find best boys and girls pg near Khalsa college, Amritsar</p>
				</div>
			</div>
			<div class="product-row" onclick="window.location.href ='./show.php?id=G'">
				<div class="product-image"><img src="./image/man1.jpeg" class="myimg"></div>
				<div class="product-text">
					<h4 class="product-title">Girls Pg in Amritsar</h4>
					<p>Now choose from best, girl only PG the amritsar have to offer</p>
				</div>
			</div>
			<div class="product-row" onclick="window.location.href ='./show.php?id=B'">
            <div class="product-image"><img src="./image/gub1.jpg" class="myimg"></div>
            	<div class="product-text">
					<h4 class="product-title">Boys in Amritsar</h4>
                    <p>Now choose from best, Boys only PG the amritsar have to offer</p>
				</div>
			</div>
			<div class="product-row" onclick="window.location.href ='./form/portion.php'">
            <div class="product-image"><img src="./image/raunak3.jpg" class="myimg"></div>
				<div class="product-text">
					<h4 class="product-title">Portion In amritsar!</h4>
					<p>Fill the form by clicking the 'Form' button and let us know which type of portion you want. After that our customer service will contact you.</p>
				</div>
			</div>
			<div class="product-row" onclick="window.location.href ='./form/buy.php'">
            <div class="product-image"><img src="./image/house.jpg" class="myimg"></div>
				<div class="product-text">
					<h4 class="product-title">Buy property in Amritsar</h4>
					<p>Thinking of buying property(plot, house, shops, flats) in amritsar then contact us we will find you best properties amritsar has to offer.</p>
				</div>
			</div>
			<div class="product-row" onclick="window.location.href ='./form/owner.php'">
            <div class="product-image"><img src="./image/raunak2.jpg" class="myimg"></div>				
            <div class="product-text">
					<h4 class="product-title">Are you property owner?</h4>
					<p>If you want to sell and lease your property then kindly fill our our form and let us know!</p>
				</div>
			</div>
            <div class="product-row" onclick="window.location.href ='./form/singleroom.php'">
            <div class="product-image"><img src="./image/pas1.jpg" class="myimg"></div>				
            <div class="product-text">
					<h4 class="product-title">Looking for single room?</h4>
					<p>Looking for single room is now easy! just fill the form and our customer service will call you with extact requirement you have mentioned. </p>
				</div>
			</div>
			<div class="product-row" onclick="window.location.href ='base.php?id=BBB'">
            <div class="product-image"><img src="./image/time.jpg" class="myimg"></div>				
            <div class="product-text">
					<h4 class="product-title">Looking for Pg but have little time?</h4>
					<p>To find pg which exactly suit your demand, you can answer us few questions and base on your answers we will show you pg that fit your requirement.</p>
				</div>
			</div>
		</div>
		
	</section>

</div>
<?php include './base/foot.php'?>
<script src="./js/main.js"></script>
</body>
</html>