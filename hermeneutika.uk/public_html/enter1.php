<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="menu.css" />
  <link rel="stylesheet" href="header.css" />
  <link rel="stylesheet" href="site.css" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php include ("menu1.php"); ?> 
  <?php include ("conn.php"); ?> 
  <p>data entry</p>
  <?php

$sql = "INSERT INTO cv1 (one,two,three,four)
VALUES ('John', 'Doe', 'john@example.com', 'test')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "SELECT one, two, three,four FROM cv1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["one"]. " - Name: " . $row["two"]. " " . $row["three"]. $row["four"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>



  
</body>
</html>