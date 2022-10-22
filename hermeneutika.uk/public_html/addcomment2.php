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
  <!-- <script src="tinymce/js/tinymce/tinymce.min.js"></script> -->
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
// 23-8-22 adding the text retrieval query toready to input into tinymce
// ok works out of the box
$query2="select * from $comment where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result2 = mysqli_query($conn, $query2);
$row = mysqli_fetch_array($result2, MYSQLI_BOTH);
echo '<span style ="color: yellow;"> '.$row["text"].'</span>';
// 23-8-22 now i need to move the javascript of tiny to here after the query and hopefully insert the text straight into tiny?
//previously tinymce javascript i had at the top of this file

?>
<script type="text/javascript">
  tinymce.init({
selector: 'textarea'



  });
  </script>
<form action="page2.php" method="post">
    <textarea name="myTextarea" rows="100" cols="100"></textarea>
    <input type="submit" value="go" />
</form>
</body>
</html>