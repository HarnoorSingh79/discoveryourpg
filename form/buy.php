<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buy Property in amritsar | Discoveryourpg </title>

  <link rel="stylesheet" href="../css/style2.css">

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
  <div class="dabba">
    <h1>Buy Property form</h1>
    <br> <br>
    <form method="POST" action="./buy2.php">
        <label for="in1">Your name<em>&#x2a;</em></label>
        <input id="in1" name="in1" type="text" required />
        
        <label for="in2">Your mobile number<em>&#x2a;</em></label>
        <input id="in2" name="in2" type="text" required />
        
        
        <label for="in3">Where are you from?<em>&#x2a;</em></label>
        <input id="in3" name="in3" type="text" required placeholder="Your address" />

        <label for="in4">Location you want to buy property in</label>
        <input id="in4" name="in4" type="text" placeholder="Please mention area, city and state" />

        <label for="in5">What type of property you want to buy <em>&#x2a;</em></label>
        <input id="in5" name="in5" type="text" required placeholder="Plot, House, Flat, Shop..."/>

        <label for="in6">Your budget<em>&#x2a;</em></label>
        <input id="in6" name="in6" type="text" required />

        <label for="in8">Any special requirement?</label>
        <textarea id="in8" name="in8" value="<?php echo $query;?>" rows="4"></textarea>
        <h3>Please provide all the information you can.</h3>

        <input type="submit" value="Submit" class="button">
    </form>
  </div>
</body>
</html>