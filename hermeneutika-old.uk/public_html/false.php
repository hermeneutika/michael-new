<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Page title</title>
<link href="site.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include ("menu.php"); ?>



<?php
$homepage = file_get_contents('txt/false1.htm');
echo $homepage;
?>


</body>
</html>
