<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Property owner forum | Discoveryourpg </title>

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
    <h1>Register Your Property form</h1>
    <br> <br>
    <form method="POST" action="./portion2.php">
        <label for="in1">Your name<em>&#x2a;</em></label>
        <input id="in1" name="in1" type="text" required />
        
        <label for="in2">Your mobile number<em>&#x2a;</em></label>
        <input id="in2" name="in2" type="text" required />
        
        
        <label for="in3">Where are you from?<em>&#x2a;</em></label>
        <input id="in3" name="in3" type="text" required placeholder="Your address" />

        <label for="in4">Address of your property<em>&#x2a;</em></label>
        <input id="in4" name="in4" type="text" required />

        <label for="in5">Which type of property you have?<em>&#x2a;</em></label>
        <select id="in5" name="in5" class="myselect">
            <option value="plot">Plot</option>
            <option value="house">House</option>
            <option value="pg">PG</option>
            <option value="flat">Flat</option>
            <option value="shop">Shop</option>
        </select>

        <label for="in6">You want to lease or sell?<em>&#x2a;</em></label>
        <select id="in6" name="in6" class="myselect">
            <option value="sell">Sell</option>
            <option value="Lease">Lease</option>
        </select>    

        <label for="in7">Price you are expecting?<em>&#x2a;</em></label>
        <input id="in7" name="in7" type="text" required />

        <label for="in8">Describe About Property in detail</label>
        <textarea id="in8" name="in8" value="<?php echo $query;?>" rows="4" placeholder="Tell us everything you think buyer will want to know"></textarea>
        <h3>Please provide all the information you can.</h3>

        <input type="submit" value="Submit" class="button">
    </form>
  </div>
</body>
</html>