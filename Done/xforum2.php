<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

include 'connection.php';
  
$filename1 = $_FILES["uploadfile1"]["name"];
$tempname1 = $_FILES["uploadfile1"]["tmp_name"];    
$folder1 = "image/".$filename1;
    
if (move_uploaded_file($tempname1, $folder1))  {
    echo "<h1>Image 1 uploaded successfully</h1>";
}else{
    echo "<h1>Image 1 Failed to upload image</h1>";
}

$filename2 = $_FILES["uploadfile2"]["name"];
$tempname2 = $_FILES["uploadfile2"]["tmp_name"];    
$folder2 = "image/".$filename2;
    
if (move_uploaded_file($tempname2, $folder2))  {
    echo "<h1>Image 2 uploaded successfully</h1>";
}else{
    echo "<h1>Image 2 Failed to upload image</h1>";
}

$filename3 = $_FILES["uploadfile3"]["name"];
$tempname3 = $_FILES["uploadfile3"]["tmp_name"];    
$folder3 = "image/".$filename3;
    
if (move_uploaded_file($tempname3, $folder3))  {
    echo "<h1>Image 3 uploaded successfully</h1>";
}else{
    echo "<h1>Image 3 Failed to upload image</h1>";
}

$rs = mysqli_query($link,"INSERT INTO pginfo (dealer, names, comm, locc types, nofoodnoac, nofoodac, foodnoac, foodac, single, wifi, kitchen, gndu, khalsa, metro, img1, img2, img3) 
VALUES ('".$_REQUEST['dealer']."', '".$_REQUEST['pgname']."', '".$_REQUEST['comm']."', '".$_REQUEST['locc']."', '".$_REQUEST['types']."', '".$_REQUEST['rent1']."', '".$_REQUEST['rent2']."', '".$_REQUEST['rent3']."', '".$_REQUEST['rent4']."', '".$_REQUEST['rent5']."', '".$_REQUEST['wifi']."', '".$_REQUEST['kitchen']."', '".$_REQUEST['gndu']."', '".$_REQUEST['khalsa']."', '".$_REQUEST['metro']."', '$filename1', '$filename2', '$filename3')");

if ($rs){
    echo '<h1>Pg inserted in database</h1>';
} else{
    echo '<h1>Error</h1>';
}

$mobile = $_REQUEST['mobile'];
$namess = $_REQUEST['dealer'];
$mes = "The dealer name is $namess and dealer mobile number is $mobile";
$res = mysqli_query($link,"INSERT INTO locations (names, messagee) VALUE('".$_REQUEST['pgname']."','$mes')");

if ($res){
    echo '<h1>Pg inserted in location database</h1>';
} else{
    echo '<h1>Error</h1>';
}

mysqli_close($link);
?>
    
</body>
</html>