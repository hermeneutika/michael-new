<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AZ notes</title>
  <link rel="stylesheet" href="css/menu.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/site.css" />
</head>
<body>
<?php include ("menu1.php"); ?>


<?php 

$file="rotatea.pdf";
$filename="rotatea.pdf";
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename .'"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
@readfile($file);
?>

</body>
</html>

