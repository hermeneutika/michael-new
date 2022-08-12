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
  $book = $_POST['book'];
$chapt = $_POST['chapt'];
$verse = $_POST['verse'];
$comment=$_POST['comment'];

$linkbook=$_POST['linkbook'];
$linkchapt=$_POST['linkchapt'];
$linkverse=$_POST['linkverse'];
$linkcomment=$_POST['linkcomment'];
$linkfullold=$linkbook  . $linkchapt . $linkverse;
echo "linkfullold=".$linkfullold;

# first i need o get the location of the verse this is so far the best way
# so this is where all the bible links need to be placed

$query="select * from $comment where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
$amend=$row["text"];
$locate=$row["full"];
echo "amend= ".$amend;
echo "full=".$locate;

#so now i need to get the actual links
$query="select * from $comment where n like '$linkbook%' and chapt='$linkchapt' and verse='$linkverse'";
$result = mysqli_query($conn, $query);
$row= mysqli_fetch_array($result, MYSQLI_BOTH);
$linkamend=$row["text"];
$linklocate=$row["full"];
echo "linkamend= ".$linkamend;
echo "linkfull=".$linklocate;


$sql="update $comment set text=CONCAT('$amend',' ','$linklocate') where full=$locate";
$result=$conn->query($sql);



?>

</body>
</html>