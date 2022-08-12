<!DOCTYPE html>
<html lang="en">
<head>
  <?php session_start(); ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  # retrieves the primary key for the verse in question
  $biblefull=$_SESSION['biblefull'];
  # retrieves the new comment for the verse
  $mytextarea=$_POST['myTextarea'];
  # NEED TO TEST IF THE TEXT FIELD is empty or retrieve contents for the bibleverse
  $sql="select text from michael where full=$biblefull";
  $result=$conn->query($sql1);
  $row = mysqli_fetch_array($result, MYSQLI_BOTH);
  echo "existing text= " . $row["text"] ;





  ?>

</body>
</html>