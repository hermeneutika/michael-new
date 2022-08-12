<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Page title</title>
</head>
<body>
<?php include ("link.php") ?>
<?php
$book="gen";
$chapt='1';
$verse='1';
//$query="select * from bible where n like '$book%' and ";
$query="UPDATE andrew SET andrew.n=(SELECT key_english.n FROM key_english WHERE key_english.b=andrew.book )";

$result = mysqli_query($link, $query);

echo 'Current PHP version: ' . phpversion();
?>



</body>
</html>
