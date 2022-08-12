<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  session_start();
  ?>
<script src="tinymce.min.js">
 

 <script type="text/javascript">
 tinymce.init({
   selector: 'textarea',
   plugins: 'save',
 toolbar: 'save'
 });
</script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="menu.css" />
  <link rel="stylesheet" href="header.css" />
  <link rel="stylesheet" href="site.css" />

  
</head>
<body>

<?php include ("conn.php"); ?> 
<?php include ("menu1.php"); ?> 
<!--<?php print_r($_POST);?> -->
<?php

$book = $_POST['book'];
$chapt = $_POST['chapt'];
$verse = $_POST['verse'];
$comment=$_POST['comment'];
echo "book=".$book ."chapter=".$chapt. "verse=".$verse."comment=".$comment;
$search="wisdom";
"<br/>";
#$sql = "select bible.text from bible where bible.text like '%$search%'";
#$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$query="select * from bible where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
//printf ("%s (%s)\n", $row[0], $row["text"]);
echo " display2 =";
echo "<br>";
echo $row["text"];
echo $row["full"];
$search=$row["full"];
echo "search=".$search;
#echo var_dump($result);
 #while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
  #while ($row = $result->fetch_assoc()) {
   # echo $row['text'].'<br>'; 
  #}
 #}
 
?>
<?php

$biblebook=$book;
echo "this is the storage of $search". $search;
$_SESSION['bible']=$search;
$_SESSION['comment']=$comment;
echo "this is the session var bible".$_SESSION['bible'];
echo "this is the session var comment".$_SESSION['comment'];
?>
<form action="page.php" method="post">
    <textarea name="myTextarea" cols="40" rows="20"></textarea>
    <input type="text" id='$book' name='$book'><br>
    <input type="submit" value="go" />
</form>
<h1>this is a test</h1>
</body>
</html>