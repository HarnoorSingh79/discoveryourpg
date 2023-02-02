<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum | Discoveryourpg </title>

    <link rel="stylesheet" href="./css/style2.css">
    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="favicon.ico" /> 
</head>
<body>
  <div class="dabba" style="color: black;">
    <h1>Kindly fill this form</h1>
    <br> <br>
    <form method="POST" action="xforum2.php" enctype="multipart/form-data">
      <label for="dealer">DEALER</label>
      <select id="dealer" name="dealer" class='myselect'>
        <option value="<?php echo $_SESSION['user'] ?>"><?php echo $_SESSION['user'] ?></option>
      </select>

      <label for="mobile">MOBILE NUMBER (WILL BE SHARED WITH CUSTOMER)<em>&#x2a;</em></label>
      <input id="mobile" name="mobile" />

      <label for="pgname">PG NAME <em>&#x2a;</em></label>
      <input id="pgname" name="pgname" type="text" />
      
      <label for="comm">COMMISSON<em>&#x2a;</em></label>
      <input id="comm" name="comm" />
      
      <label for="locc">Location<em>&#x2a;</em></label>
      <input id="locc" name="locc" />

      <label for="types">BOY or GIRL PG</label>
      <select id="types" name="types" class='myselect'>
        <option value="B">B</option>
        <option value="G">G</option>
      </select>

      <label for="rent1">NO FOOD + NO AC<em>&#x2a;</em></label>
      <input id="rent1" name="rent1" />

      <label for="rent2">NO FOOD + AC<em>&#x2a;</em></label>
      <input id="rent2" name="rent2" />

      <label for="rent3">FOOD + NO AC<em>&#x2a;</em></label>
      <input id="rent3" name="rent3" />

      <label for="rent4">FOOD + AC<em>&#x2a;</em></label>
      <input id="rent4" name="rent4" />

      <label for="rent5">SINGLE ROOM<em>&#x2a;</em></label>
      <input id="rent5" name="rent5" />

      <label for="wifi">WIFI</label>
      <select id="wifi" name="wifi" class='myselect'>
        <option value="Not Included">Not Included</option>
        <option value="Included">Included</option>
      </select>

      <label for="kitchen">KITCHEN</label>
      <select id="kitchen" name="kitchen" class='myselect'>
        <option value="Not Included">Not Included</option>
        <option value="Included">Included</option>
      </select>

      <label for="gndu">GNDU DISTANCE<em>&#x2a;</em></label>
      <input id="gndu" name="gndu" type="text" />

      <label for="khalsa">KHALSA COLLEGE DISTANCE<em>&#x2a;</em></label>
      <input id="khalsa" name="khalsa" type="text" />

      <label for="metro">METRO DISTANCE<em>&#x2a;</em></label>
      <input id="metro" name="metro" type="text" />

      <label for="uploadfile">Image 1 (Max 2MB)</label>
      <input type="file" name="uploadfile1" value=""/>

      <label for="uploadfile">Image 2 (Max 2MB)</label>
      <input type="file" name="uploadfile2" value=""/>

      <label for="uploadfile">Image 3 (Max 2MB)</label>
      <input type="file" name="uploadfile3" value=""/>

      <input type="submit" value="Submit" class="button">
    </form>
  </div>
</body>
</html>