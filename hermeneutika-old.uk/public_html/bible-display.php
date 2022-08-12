<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Page title</title>
<link href="site.css" rel="stylesheet" type="text/css" />
<?php include ("menu.php"); ?>
<?php include ("link.php") ?>
</head>
<body>
<?php
$book=$_POST['book'];
$chapt=$_POST['chapt'];
$verse=$_POST['verse'];
$bcv=$book.$chapt.$verse;
//echo "bcv bible display=$bcv";
// first do a query to get the full book name
$query="select * from bible where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($link, $query);
/* associative and numeric array */
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
//printf ("%s (%s)\n", $row[0], $row["text"]);
//echo " ";
//echo "<br>";
//echo $row["text"];
$book=$row["n"];
echo "Book is " .$book. " Chapter is ".$chapt. " verse is ".$verse;
$query="select * from bible where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($link, $query);
/* associative and numeric array */
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
//printf ("%s (%s)\n", $row[0], $row["text"]);
echo " ";
echo "<br>";
echo $row["text"];
?>
</body>
</html>
