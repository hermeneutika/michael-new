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
  include ("conn.php"); 
  # retrieves the primary key for the verse in question
  $biblefull=$_SESSION['biblefull'];
  # retrieves the new comment for the verse
  $mytextarea=$_POST['myTextarea'];
  $commentary=$_SESSION['commentary'];
  $space="<br> <br>";
  echo "mytextarea".$mytextarea;
  echo "commentary=".$commentary;
  # NEED TO TEST IF THE TEXT FIELD is empty or retrieve contents for the bibleverse
  $sql="select text from $commentary where full=$biblefull";
  $result=$conn->query($sql);
  $row = mysqli_fetch_array($result, MYSQLI_BOTH);
  echo "existing text= " . $row["text"] ;
  #echo "biblefull= ".$biblefull;
  #echo "mytext area= ".$mytextarea;
  #then i need to concat the existing comment with the new comment

  # the concat command might do it all in one!
<<<<<<< HEAD
  echo "textarea=".$mytextarea;
//  $sql="update $commentary set text=CONCAT(text,'$mytextarea') where full=$biblefull";
$sql="update $commentary"
=======
  //$sql="update $commentary set text=CONCAT(text,'$mytextarea') where full=$biblefull";
  $sql="update $commentary set text=concat(text,'$space','$mytextarea') where full=$biblefull";
>>>>>>> 963504a8b91e4402e0e597dee888655ba9f851d4
  $result=$conn->query($sql);







  ?>

</body>
</html>