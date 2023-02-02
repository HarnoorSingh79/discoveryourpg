<?php
session_start();
$id = $_GET['id'];
$_SESSION['pgasked'] = $id
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

<?php
/* define variables and set to empty values */
$nameErr = $emailError = $mobileError ="";
$name = $email = $mobile =  "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
  else {
    $name = test_input($_POST["name"]);
    /* check if name only contains letters and whitespace */
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["name"])) {
    $mobileError = "Name is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
    /* check if name only contains letters and whitespace */
    if (!preg_match('/^[0-9]{10}+$/', $mobile)) {
      $mobileError = "10 digit Number"; 
    }
  }
  if (empty($_POST["email"])) {
    $emailError = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    /* check if e-mail address is well-formed */
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format"; 
    }
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
  <div class="dabba">
    <h1>Kindly fill this form</h1>
    <br> <br>
    <form method="POST" action="forum2.php">
        <label for="cdate">Date you will visit <em>&#x2a;</em></label>
        <input id="cdate" name="cdate" required="" type="date" />
        
        <label for="ctime">Time by when you reach that pg <em>&#x2a;</em></label>
        <input id="ctime" placeholder="On what time?" name="ctime" required="" />
        
        <label for="customerNote">ANY QUERY</label>
        <textarea id="customerNote" placeholder="Any query regarding <?php echo $id?> PG? " name="customerNote" value="<?php echo $query;?>" rows="4"></textarea>
        
        <h3>
        Please provide all the information about your issue you can.
        </h3>

        <input type="submit" value="Submit" class="button">
    </form>
  </div>
</body>
</html>