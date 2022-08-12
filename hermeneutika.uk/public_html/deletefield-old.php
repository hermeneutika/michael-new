<!DOCTYPE html>

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
echo "book=".$book ."chapter=".$chapt. "verse=".$verse."comment=".$comment;
$search="wisdom";
"<br/>";
#$sql = "select bible.text from bible where bible.text like '%$search%'";
#$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$query="select * from michael where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
echo " display2 =";
echo "<br>";
echo $row["text"];
echo $row["full"];
$search=$row["full"];
echo "search=".$search;

$query2="UPDATE `michael` SET `text` = null WHERE `full` = '1001001'";
$result2=mysqli_query($conn,$query2);

  ?>
</body>
</html>