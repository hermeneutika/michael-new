<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Page title</title>
<link href="site.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include ("menu.php"); ?>
<?php include ("link.php"); ?>

<?php
if (!isset($_SESSION)) {
  session_start();
}
// this page must have called key_english first to the get the book number hence the problems. 
//session_start();
//$up2=$_SESSION["book_session"];
///$up3=$_SESSION["chapt_session"];
//$up4=$_SESSION["verse_session"];
//ok the below POSTs get the book/chapt/verse data but i ought to be able topull that in thro SESSIONS?
// this is the update.php file and is therefore only updating the commentaries. 11/9/16
// the SESSION imported variables should save me from having to retype the full verse reference. 
// but for some reason i am operating with a POST from the previous page. 
// below is the SESSION DATA this should obviate the need for using the extra POST input
//session_start();
$testing=$_SESSION["book_orig_sess"];
$testing2=$_SESSION["chapt_orig_sess"];
$testing3=$_SESSION["verse_orig_sess"];
//echo "book-orig-sess=$testing";
// the SESSION seems to be working so no need to get the POST
$up1= $_POST["author"];// this is crucial
//$up2= $_POST["book"];
//$up3= $_POST["chapt"];
//$up4= $_POST["verse"];
// except for the POST of the actual comment and if it is amend or delete
$up5= $_POST["text"];
$up6=$_POST["q1"];
//$bcv=$_SESSION["bcv"];
//echo "ud book(up2)=$up2";
//echo "ud chapt(up3=$up3";
//echo "ud verse(up4=$up4";
//echo "ud author(up1=$up1";
//echo "update bcv=$bcv";
//echo "str length". strlen($bcv);
//echo "update text=$up5";

// but now i need to the correct book number and get bcv in the correct format
//to do this i need to search key_english table
$query="select * from key_english where n like '$testing%'";

if ($result = mysqli_query($link,$query))
 {
  /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result))
 {
		//echo "row=".$row;
		$var4=0;
		// prints the book of the Bible....ie the name of the book
        //printf ($row["n"]);
				echo "   ";
					$var4=$row["b"];
				//$var4=str_pad($var4, 2, "0", STR_PAD_LEFT);
				//echo "var4=".$var4;
}
    mysqli_free_result($result);
}
//mysqli_close($link);
// now the results need to be correctly formatted
$var4=str_pad($var4, 2, "0", STR_PAD_LEFT);
$var2=str_pad($testing2, 3, "0", STR_PAD_LEFT);
$var3=str_pad($testing3, 3, "0", STR_PAD_LEFT);
$bcv="$var4$var2$var3";
//echo "bcv from only update=".$bcv;

if ($up6=="delete")
{
$sql = "UPDATE $up1 SET text='$up5' WHERE full=$bcv";
if (mysqli_query($link, $sql))
 {
    echo "for delete Record updated successfully";
}
 else 
 {
    echo "Error updating record: " . mysqli_error($link);
}
//echo "variable =delete";
}
else 
{
$sql="UPDATE $up1 SET text=CONCAT( text,'$up5')WHERE full=$bcv";
//$sql="UPDATE $up1 SET text='$up5' WHERE full=$bcv";
if (mysqli_query($link, $sql))
 {
    echo "Record updated successfully";
}
 else
 {
    echo "Error updating record: " . mysqli_error($link);
}

echo "variable = amend";



}








//$sql = "UPDATE $up1 SET text='$up5' WHERE full=$bcv";
//if (mysqli_query($link, $sql))

  //  echo "Record updated successfully";

 //else
 
   // echo "Error updating record: " . mysqli_error($link);




?>



</body>
</html>
