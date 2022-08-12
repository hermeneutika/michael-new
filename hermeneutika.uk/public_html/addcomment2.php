<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
<link rel="stylesheet" href="css/menu.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/site.css" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="tinymce/js/tinymce/tinymce.min.js"></script>
 <!-- <script type="text/javascript">
  tinymce.init({
    height: '300',
    width: '300',
    selector: 'textarea',
    plugins: 'paste',
    menubar: 'edit',
    toolbar: 'paste pastetext',
  paste_as_text: 'true'
  });
  </script>
-->
<script type="text/javascript">
  tinymce.init({
selector: 'textarea',
plugins: 'paste',
menubar: 'edit',
paste_as_text: 'true',
toolbar: 'paste pastetext'



  });
  </script>
  <title>Document</title>
  
</head>
<body>
<?php include ("conn.php"); ?> 
<?php include ("menu1.php"); ?> 
  <?php
$book = $_POST['book'];
$chapt = $_POST['chapt'];
$verse = $_POST['verse'];
$comment=$_POST['comment'];
$_SESSION["commentary"]=$_POST['comment'];
echo "book=".$book ."chapter=".$chapt. "verse=".$verse."comment=".$comment;
#$search="wisdom";
"<br/>";
#$sql = "select bible.text from bible where bible.text like '%$search%'";
#$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$query="select * from bible where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
//printf ("%s (%s)\n", $row[0], $row["text"]);
echo " display2 =";
echo "<br>";
echo '<span style ="color: red;"> ' .$row["text"].'</span>';
#echo ;
echo $row["full"];
$search=$row["full"];
echo "search=".$search;
$_SESSION["biblefull"]=$search;
?>

<form action="page2.php" method="post">
    <textarea name="myTextarea"></textarea>
    <input type="submit" value="go" />
</form>
</body>
</html>