<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Page title</title>
</head>
<body>
<?php include ("link.php") ?>
<?php 
echo "testing";
// retrieve link verse via post from comm-enter.php via INSERT.PHP
$book=$_POST['book'];
$chapt=$_POST['chapt'];
$verse=$_POST['verse'];
$up6=$_POST['q1'];

//echo "book-link=$book";
//echo "chapr-link=$";
//echo "verse-link=$verse";
//echo "q1=$up6";
// all the above is the link verse
// now looking to import the session variable made in comm-enter
//entered in bible-input-data1 and posted to comm-enter where the POST is fed into SESSION variables and read back here....
// this is the original verse

session_start();
$testing=$_SESSION["book_orig_sess"];
$testing2=$_SESSION["chapt_orig_sess"];
$testing3=$_SESSION["verse_orig_sess"];
//echo "book orig sess =$testing";
//echo "chapt orig sess =$testing2";
//echo "verse orig sess =$testing3";

// now i need to get the book numbers from the table key_engish
// first query tried multi querybut couldnt get to work quickly
// this search of key_english retrieves the actual link
$query="select * from key_english where n like '$book%'";

if ($result = mysqli_query($link,$query))
 {
    while ($row = mysqli_fetch_assoc($result))
 {
$var4=0;
echo "   ";
// make $var4 equal to the book number
$var4=$row["b"];
echo "var4search=$var4";
}
mysqli_free_result($result);
}
// second query this query gets the original verse for which the link is
$query="select * from key_english where n like '%$testing%'";
if ($result = mysqli_query($link,$query))
 {
    while ($row = mysqli_fetch_assoc($result))
 {
 $var5=0;
echo "   ";
$var5=$row["b"];
echo "var4=$var4";
echo "var5=$var5";
}
 mysqli_free_result($result);
}
// now i need to pad out the book ,chapt and verse numbers to be of the same format as the bible database
// this is for the link verse
$var4=str_pad($var4, 2, "0", STR_PAD_LEFT);// this pads out the book number
$chapt=str_pad($chapt, 3, "0", STR_PAD_LEFT);// these are from the above POST
$verse=str_pad($verse, 3, "0", STR_PAD_LEFT);// local variables read in from POST above
// this is for the original verse
$var5=str_pad($var5, 2, "0", STR_PAD_LEFT);// this pads out the book number
$testing2=str_pad($testing2, 3, "0", STR_PAD_LEFT);// i am using all local variables here no globals
$testing3=str_pad($testing3, 3, "0", STR_PAD_LEFT);// local variables read in from POST above

//read padded values into the new string
$bcv_link=$var4.$chapt.$verse." ";
$bcv_orig=$var5.$testing2.$testing3." ";

// check the output
echo "bcv link=$bcv_link";
echo "bcv orig=$bcv_orig";
// so far working good 31/08/2016 0944hrs
// now update the database Biblelink with the new data

if ($up6=="delete")
{
$sql="UPDATE biblelink SET text='$bcv_link' WHERE full=$bcv_orig";
//$sql="UPDATE biblelink SET text=CONCAT( text,'$up5')WHERE full=$actual_link";
//$sql2 = "UPDATE biblelink SET full2='$bcv' WHERE full=$bcv";
if (mysqli_query($link, $sql))
 {
    echo "for delete record updated successfully";
}

 else
 {
    echo "Error updating record: " . mysqli_error($link);
}
}
else

{
$sql="UPDATE biblelink SET text=CONCAT( text,'$bcv_link')WHERE full=$bcv_orig";
//$sql="UPDATE $up1 SET text='$up5' WHERE full=$bcv";
if (mysqli_query($link, $sql))
 {
    echo "for amend record deleted successfully";
}
 else
 {
    echo "Error updating record: " . mysqli_error($link);
}

echo "variable = amend";



}













 ?>

</body>
</html>
