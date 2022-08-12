<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Page title</title>
<link href="site.css" rel="stylesheet" type="text/css" />
<?php include ("menu.php"); ?>
<?php include ("link.php"); ?>
</head>
<body>
<?php


$author=$_POST["author"];
$book=$_POST["book"];
$chapt= $_POST["chapt"];
$verse= $_POST["verse"];
echo "test";
$query="select * from bible where n like '$book%' and chapt='$chapt' and verse='$verse';select * from michael where n like '$book%' and chapt='$chapt' verse='$verse'";
echo "query accepted";
//if (mysqli_multi_query($link,$query))
//{
//do
//{
// store first result set
//if ($result =mysqli_store_result($link))
//{
//while ($row=mysqli_fetch_result($result))
//{
//printf("%s\n",$row[0]);
//}
//mysqi_free_result($result);
//}
//if (mysqli_more_results($link)
//{
//print("------------------\n");
//}
//}
//while  (mysqli_next_result($link));
//}
//mysqli_close($link);




?>






</body>
</html>
