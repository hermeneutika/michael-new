<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Page title</title>
<link href="site.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php include ("menu.php"); ?>
<?php include ("link.php"); ?>
<?php include ("link.php"); ?>
<?php
$var=$_POST["author"];
$var1=$_POST["book"];
$var2= $_POST["chapt"];
$var3= $_POST["verse"];
//$query="select * from 
//echo "bcv from comm_display=".$bcv;
//echo "author=".$var;
//echo "book=".$var4;
//echo "chapt=".$var2;
//echo "verse=".$var3;
//again must get the bible book number from the key_english table
// then i can run the query and display
$query="select * from key_english where n like '$var1%'";
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

    /* free result set */
    mysqli_free_result($result);
}

/* close connection */
//mysqli_close($link);
//now we need to get the book chapter and verse in one variable correctly formatted

$var4=str_pad($var4, 2, "0", STR_PAD_LEFT);
$var2=str_pad($var2, 3, "0", STR_PAD_LEFT);
$var3=str_pad($var3, 3, "0", STR_PAD_LEFT);

//echo "book=".$var4;
//echo "<br />";
//echo "book var 4 after sp ke=".$var4;
//echo "chapt after string ke ".$var2; // prints the chapter
//echo "  "; //prints a space
//echo "verse after string ke ".$var3; // prints the verse
//concaternate the book chapter verse into one variable
$bcv="$var4$var2$var3";
echo "bcv comm-read-display=".$bcv;

$query1="select bible.text from bible where $bcv=full"; 
$query2="select $var.text from $var where $bcv=full"; 

if ($result2 = mysqli_query($link,$query2))
if ($result1 = mysqli_query($link,$query1))
 {
  /* fetch associative array */
    while ($row2 = mysqli_fetch_assoc($result2))
		while ($row1 = mysqli_fetch_assoc($result1))
		
 {
		//echo "row=".$row;
		$var4=0;
		echo " this is from the commentary by ".$var;
		echo "<br>";
		echo "<br>";
		printf ($row1["text"]);
		echo "<br>";
		echo "<br>";
		
        printf ($row2["text"]);
				//echo ($row['$var."text"']);
				}

    /* free result set */
    mysqli_free_result($result2);
		mysqli_free_result($result1);
		
}

/* close connection */
mysqli_close($link);


?>


</body>
</html>
