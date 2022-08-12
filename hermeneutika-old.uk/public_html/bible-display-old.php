<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Page title</title>
<link href="site.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php include ("menu.php"); ?>


<?php include ("link.php") ?>
<?php

// aim for consistancy in naming the same variables
$book=$_POST['book'];
$chapt=$_POST['chapt'];
$verse=$_POST['verse'];
$bcv=$book.$chapt.$verse;
//echo "bcv bible display=$bcv";
echo "Book is " .$book. " Chapter is ".$chapt. " verse is ".$verse;

// instead of calling the key_english.php page i am now keeping all the code in one page for the time being to avoid confusion
// sept 9 2016 Friday
// no wild card at the beginning of the like vartiable as this causes problems with the likes of 1 john 1 timothy etc
$query="select * from bible where n like '$book%'";


if ($result = mysqli_query($link,$query))


 {
  /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result))
 {
		//echo "row=".$row;
		$var4=0;
		// prints the book of the Bible....ie the name of the book
        //printf ($row["n"]);
				//echo "   ";
				
				$var4=$row["book"];
				//$var4=str_pad($var4, 2, "0", STR_PAD_LEFT);
				//echo "var4=".$var4;
				
				
}

    /* free result set */
    mysqli_free_result($result);
}

else
{
//echo "error";
exit;
}




//echo "bcv-ke in bible display=$bcv-ke";
//now we need to get the book chapter and verse in one variable correctly formatted

$var4=str_pad($var4, 2, "0", STR_PAD_LEFT);
$var2=str_pad($chapt, 3, "0", STR_PAD_LEFT);
$var3=str_pad($verse, 3, "0", STR_PAD_LEFT);

$bcv="$var4$var2$var3";
//echo "bcv this is from key english ke=".$bcv;
$query="select * from bible where full=$bcv"; 
if ($result = mysqli_query($link,$query))
 {
  /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result))
 {
		//echo "row=".$row;
		$var4=0;
		// put in a line break keep the comments coming....or i forget what the line does....
	
		// the following line displays the Bible verse...gotcha!
		//$test1=$_SESSION['book_session'];
		//echo "test1=$test1";
		//echo "$_SESSION['book-session'].$_SESSION['chapt-session'].$_SESSION['verse-session']";
		echo "<br>";
        echo  ($row["text"]);
			
				}

    /* free result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);

?>


</body>
</html>
