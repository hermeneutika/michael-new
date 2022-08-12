<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php include ("conn.php"); ?>
  <?php include ("menu1.php"); ?> 
  

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
print_r($_POST); 

echo $_POST["contents"];
$heading=$_POST["heading"];
$contents=$_POST["contents"];

echo "contents=".$contents." heading=".$heading;


#$sql="insert into michael(text) values (?) where full='1001004'";
#this works notice the ? text=? ...this works 13/6/22
$sql1="select text from michael where full='1001005'";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["text"] ;
    $var1=$row["text"];
    echo "variable=".$var1;
  }
}

$sql="update michael set text=CONCAT(?,?) WHERE FULL='1001004'";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss",$var1,$contents);
$stmt->execute();

?>

</body>
</html>