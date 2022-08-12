<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="menu.css" />
  <link rel="stylesheet" href="header.css" />
  <link rel="stylesheet" href="site.css" />
  <title>Document</title>
</head>
<body>
<?php include ("conn.php"); ?> 
<?php include ("menu1.php"); ?> 
<?php

$book = $_POST['book'];
$chapt = $_POST['chapt'];
$verse = $_POST['verse'];
$comment=$_POST['comment'];
echo "book=".$book ." "."chapter=".$chapt." ". "verse="." ".$verse." "."comment=".$comment;
$search="wisdom";
"<br/>";
#$sql = "select bible.text from bible where bible.text like '%$search%'";
#$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$query="select * from bible where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
//printf ("%s (%s)\n", $row[0], $row["text"]);
#echo " display2 =";
#echo "<br>";
echo "<br>";
echo "<br>";
echo '<span style ="color: red;"> '.$row["text"].'</span>';
#echo ;
echo "</p>";
#echo $row["full"];
#$search=$row["full"];
#echo "search=".$search;
#echo var_dump($result);
 #while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
  #while ($row = $result->fetch_assoc()) {
   # echo $row['text'].'<br>'; 
  #}
 #}
 
?>
</body>
</html>