<?php

session_start();
include 'connection.php';

$id = $_GET['id'];

$r = 1;

switch ($id){
    case "B":
        $r = "B";
        break;
    case "G":
        $r = "G";
        break;
    case "zero":
        $r = 0;
        break;
    case "gnduandkhalsa":
        $r = '';
        break;
}

if ($r == 0){
    $sql = "SELECT * FROM `pginfo` WHERE comm = '$r'";
    $res = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($res);
    mysqli_close($link);
} else {
    $sql = "SELECT * FROM `pginfo` WHERE types = '$r'";
    $res = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($res);
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html>
<head>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "Is discoveryourpg really free?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<p> Yes, discover your pg is really if you want to rent simple room near guru nanak dev university or khalsa college amritsar. if there is any other area you rent a room with our platform then you will be charged 25% of your rent</p>"
        }
      }, {
        "@type": "Question",
        "name": "How will you help me in finding a pg?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We have listed every single pg that have met our standard on our website you can checkout our website and see these pg for yourself. All information regarding these pg is listed on our website including rent, wheather it has ac or not? and many other things. You can then schedule your visit to these pg and after that our customer service will call you to clarify any query you might have."
        }
      }, {
        "@type": "Question",
        "name": "Locations you can offer pg in?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "<p>Right now we only offer services in amritsar including but not limites to kabir park, mohini park, putlighar, ranjit avenue, batala road, partap nagar, kot khalsa and area near guru nanak dev university and khalsa college, BBK Dav</p>"
        }
      }, {
        "@type": "Question",
        "name": "I want the portion (1BHK, 2BHK), how will you help me?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "If you are looking for portion in amritsar then please call 6283900509. we will do our best to find portion that fit your requirements. please note that this service is not free. you will be charged 30% of your rent (one time) which is half the market price"
        }
      }, {
        "@type": "Question",
        "name": "I want a room all to myself? how much it will cost?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text":"Normally, for single room you will have rent of 5000-8000 depending on facilites such as kicthen, AC, attched bathrooms and other things"}
        }]
    }
    </script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Find pg in amritsar | discoveryourpg</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./base/base.css">
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

    <meta name="description" content="Find pg in amritsar ( sharing rooms, single room, AC rooms) near
    gndu, khalsa college, ranjit avenue, partap nagar, batala road, putlighar, chhetta">

</head>
<body>
<?php include './base/nav.php' ?>

<div class="sec3">
    <h1>Here are your result!</h1>
    <div class="main">
    <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')"> Show All</button>
        <button class="btn" onclick="filterSelection('near gndu')"> Near Gndu</button>
        <button class="btn" onclick="filterSelection('near khalsa college')"> Near khalsa college</button>
    </div>

    <div class="row">
    
    <?php
    if ($res->num_rows > 0) {
        while($row = $res->fetch_assoc()) {

    switch ($row['types']){
        case "B":
            $ty = "Boys";
            break;
        case "G":
            $ty = "Girls";
            break;
    }

    
    switch ($row['locc']){
        case "Kabir park":
            $near = "Near Gndu";
            break;
        case "Kot khalsa":
            $near = "Near Gndu";
            break;
        case "Vikas colony":
            $near = "Near Khalsa college";
            break;
        case "mohini park":
            $near = "Near Khalsa college";
            break;
        case "chheharta":
            $near = "Near Gndu";
            break;
        case "daily need wali gali":
            $near = "Near Khalsa college";
            break;
        default:
            $near ="";
    }

    ?>

    <div style="cursor:pointer" class="column <?php echo strtolower($near); ?>">
        <div class="content" onclick="window.location.href = 'bg.php?id=<?php echo $row['names'] ?>'">
        <img src="./image/<?php echo $row['img1'] ?>" alt="error" class="pgimage1">
        <strong class="pgcontent">
            <p><?php echo $row['names'] ?> PG </p>
            <p>Type:- <?php echo $ty ?></p>
            <p>Location:- <?php echo $row['locc']?></p>
            <p>Commisson:- <?php echo $row['comm'] ?>%</p>
        </strong>
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
</div>

<div class="sec31">
    <strong>Looking for PG where You can live along with your friends? Then call us at 6283900509</strong>
</div>
<div class="sec32">
    <h2 style="margin: -10px 0 20px 0;">Our Happy Clients</h2>
    <div class="row1">
        <div class="column1"><div class="card2">
        <p>As i am from other district, discoveryourpg help me save ton of time. Moreover, the customer service is really good</p>
        <strong>~Deepika</strong>
        </div></div>
        <div class="column1"><div class="card2">
        <p>Super nice people, As fresher it was super nervous about this whole Pg thing but discoveryourpg staff help me through it.</p>
        <strong>~Sukhdeep</strong>
        </div></div>
        <div class="column1"><div class="card2">
        <p>I never know that finding a PG can be this easy...</p>
        <strong>~Ankit</strong>
        </div></div>
        <div class="column1"><div class="card2">
        <p>Discoveryourpg Help me save quite some money as i donot have to pay Commisson for dashmesh PG plus they help me find good pg for lower price.</p>
        <strong>~Jasman</strong>
        </div></div>
    </div>
</div>

<div class="sec4">
    <h2 class="sec4h">What we have achieve so far</h2>
    <div class="row1">
    <div class="column1">
        <div class="card1" style="background-color: black;">
        <p><i class="fa fa-user" style="font-size:100px;"></i></p>
        <strong>20+</strong>
        <p>Partners</p>
        </div>
    </div>

    <div class="column1">
        <div class="card1" style="background-color: black;">
        <p><i class="fa fa-bed" style="font-size:100px;"></i></p>
        <strong>40+</strong>
        <p>PGs</p>
        </div>
    </div>
    
    <div class="column1">
        <div class="card1" style="background-color: black;">
        <p><i class="fa fa-smile-o" style="font-size:100px;"></i></p>
        <strong>200+</strong>
        <p>Happy Clients</p>
        </div>
    </div>
    
    <div class="column1">
        <div class="card1" style="background-color: black;">
        <p><i class="fa fa-home" style="font-size:100px;"></i></p>
        <strong>10+</strong>
        <p>Areas</p>
        </div>
    </div>
    </div>
</div>

<?php include './base/foot.php' ?>

<script src="./js/my.js"></script>
</body>
</html>