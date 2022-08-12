<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="menu.css" />
  <link rel="stylesheet" href="header.css" />
  <link rel="stylesheet" href="site.css" />
</head>
<body>
<?php include ("conn.php"); ?>
  <?php include ("menu1.php"); ?> 

  <?php

$comment=$_POST['comment'];
$query="select * from $comment WHERE text !=\" \"";
$result = mysqli_query($conn, $query);
#while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
#while ($row = $result->fetch_assoc()) {
  echo "link1= ".$link1;
foreach ($result as $row)
{
  $query="select text from bible where full= $link1";
  $result=mysqli_query($conn,$query);
  $link1=$row['text'];
  echo $row['text'].'<br>'; 
  echo "link1=".$link1;
  $testing=$row['full'];
  echo "full=". $row['full'].'<br>';
  
 
  
echo " verses=".$row['text'];

  
}

  ?>

  
</body>
</html>