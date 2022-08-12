

<?php
session_start();
echo "printr ".print_r($_SESSION);
$bb = $_SESSION['bible'];
$comment=$_SESSION['comment'];
echo "session var comment".$comment;
echo "variable bb=".$bb;
echo "mytextarea".$_POST['myTextarea'];
#echo  $_POST['$bb'];
 include ("conn.php"); 
 #include ("menu1.php"); 
 echo "print before the sql"; 
 $sql1="select text from michael where full='1001002'";
$result = $conn->query($sql1);
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
#if ($result->num_rows > 0) {
 # // output data of each row
  #while($row = $result->fetch_assoc()) {
    echo "id: " . $row["text"] ;
    $var1=$row["text"];
    echo "variable=".$var1;
  



$sql="update michael set text=CONCAT(?,?) WHERE FULL='1001005'";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss",$var1,$contents);
$stmt->execute();

?>