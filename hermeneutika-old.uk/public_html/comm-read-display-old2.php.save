<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Page title</title>
<link href="site.css" rel="stylesheet" type="text/css" />
<?php include ("menu.php"); ?>
<?php include ("link.php"); ?>
</head>
<body>
<div id=first>
<?php
// comment
$author=$_POST["author"];
$book=$_POST["book"];
$chapt= $_POST["chapt"];
$verse= $_POST["verse"];
$query="select * from bible where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($link, $query);
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
//printf ("%s (%s)\n", $row[0], $row["text"]);
echo "Book ".$row["n"]." Chapt ".$row["chapt"]." verse ".$row["verse"];
echo " ";
echo "<br>";
echo $row["text"];
echo "<br>";

?>
</div>
<div id="div1">
<?php $query="select * from michael where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
//printf ("%s (%s)\n", $row[0], $row["text"]);
echo " ";
echo "<br>";
echo "Commentary by Michael";
echo $row["text"];
 ?>
</div>
<div id="div2">
<?php $query="select * from govett where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);

//printf ("%s (%s)\n", $row[0], $row["text"]);
echo " ";
echo "<br>";
echo "Commentary by Govett";
echo $row["text"];
 ?>
</div>
<div id="div3">
<?php $query="select * from swaggert where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
//printf ("%s (%s)\n", $row[0], $row["text"]);
echo " ";
echo "<br>";
echo "Commentary by Swaggert";
echo $row["text"];
 ?>
</div>
<div id="div4">
<?php $query="select * from seiss where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
//printf ("%s (%s)\n", $row[0], $row["text"]);
echo " ";
echo "<br>";
echo "Commentary by Seiss";
echo $row["text"];
 ?>
</div>
<div id="div5">
<?php $query="select * from andrew where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
//printf ("%s (%s)\n", $row[0], $row["text"]);
echo " ";
echo "<br>";
echo "Commentary by Andrew of Ceasaria";
echo $row["text"];
 ?>
</div>







</body>
</html>
