<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<title>Page title</title>
<link href="site.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include ("menu.php") ?>
<?php include ("link.php") ?>

<?php
$book=$_POST['book'];
$chapt=$_POST['chapt'];
$verse=$_POST['verse'];
// again query key_english table to the get the book number
// and the book chapter verse in the correct format
// display bibleverse first //
// run the query to get the full book name
$query="select * from bible where n like '$book%' and chapt='$chapt' and verse='$verse'";
$result = mysqli_query($link, $query);
/* associative and numeric array */
$row = mysqli_fetch_array($result, MYSQLI_BOTH);
//printf ("%s (%s)\n", $row[0], $row["text"]);
//echo " ";
//echo "<br>";
//echo $row["text"];
$book=$row["n"];
echo "Book is " .$book. " chapter is ".$chapt. " verse is ".$verse;
$query="select * from key_english where n like '$book%'";

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
// all the above gets the book number
/* close connection */
//mysqli_close($link);
//now we need to get the book chapter and verse in one variable correctly formatted

$var4=str_pad($var4, 2, "0", STR_PAD_LEFT);
$chapt=str_pad($chapt, 3, "0", STR_PAD_LEFT);
$verse=str_pad($verse, 3, "0", STR_PAD_LEFT);

//echo "book=".$var4;
//echo "<br />";
//echo "book var 4 after sp ke=".$var4;
//echo "chapt after string ke ".$var2; // prints the chapter
//echo "  "; //prints a space
//echo "verse after string ke ".$var3; // prints the verse
//concaternate the book chapter verse into one variable
$bcv="$var4$chapt$verse";
//echo "bcv from biblejoin=".$bcv;
//echo "bcv=$bcv";
// find and print the original verse
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
       // echo  ($row["text"]);
			 // the following syntax easily gives me a change of colour in the query. 
				echo "<font color=red>". $row['text'] ."</font>"; 
			
				}

    /* free result set */
    mysqli_free_result($result);
}
// SO NOW THE ORIGINAL VERSE IS PRINTED IN A DIFFERENT COLOUR
// the following code pulls the linked bible references and pulls them out of the biblelinks table for the one original Bible reference

$query="select * from biblelink where $bcv=full"; 
if ($result = mysqli_query($link,$query))
 {
  /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result))
 {
		//echo "row=".$row;
		$var4=0;
		// put in a line break keep the comments coming....or i forget what the line does....
		echo "<br>";
		// the following line displays the STRING from biblelink, note all the Biblelinks are in the correct format.
		//echo " this is the first query";
      //  echo  ($row["text"]);
	// this prints out the full STRING for all the Bible references		
				}

    /* free result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);

// then display links //
 include ("link.php");
//echo $bcv;
//echo $var2;
//echo $var3;
//echo $var4;

//echo "bcv again =$bcv";
// $bcv comes from the POST input at the beginning
$sql = "select * from biblelink where $bcv=full";

if ($result = mysqli_query($link,$sql))

		
 {
  /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result))
		//echo $row["text"];
 {
	// $rowcount=mysqli_num_rows($result);
  //printf("Result set has %d rows.\n",$rowcount);
//foreach (mysqli_fetch_lengths($result) as $i => $val) 
  //      printf("Field %2d has Length %2d\n", $i+1, $val);
		//echo "row=".$row;
		//$var4=0;
		// put in a line break keep the comments coming....or i forget what the line does....
		//echo "<br>";
		//echo "testing";
		// the following line displays the Bible verse...gotcha!
		//$display=explode(" ",$str);
		//$display4=
      //  echo  ($row["text"]);
			// as far as i can remember this query gets the full listing of the table for the Bible link entry
				$display2=($row["text"]);
				//echo strlen($display2); // returned the length of display string divide by 9 toget the number of entries
				$count=strlen($display2)/9;
				//echo "count=$count";// now have the number of elements in the string
				//echo "display2=$display2";
				//echo $display2[3];
				$display3=explode(" ",$display2);//
			
				//echo "display=$display";
				//for ($i=0; $i<5;$i++)
				
				//{
				//echo $display3[$i]." ";
				//echo strlen($display3[$i])." ";
				//echo "display3=$display3";
				//echo "count= count($display3[$i])";
			//	}
	
	
	
				
			//echo "display[]=$display3[0]";
				//}
//}
// now display all the Bible links	
// ok needs a loop in here to do this 
// need a count of the elements in the array to set the limits of loop
// it is very fussy about how the curly brackets are opened and closed. If the curlies 
// arenot right it can throw the entire program flow out.....
// i ended up with a spare curly....wasnt throwing out a error on the web page but the prog wasnt working correctly....one extra doesnt effect
// execution in display but will not work....one less and it will throw up errors......
// if i now have my curlies in line....then perhaps the $i loop will work ok?
// 
 
}
}
//ok here is the display Bible links.....starting again.....29/08/16 11:13
//echo "bcv=$bcv";
//echo "count=$count";
$i=0;
for ($i=0;$i<=$count;$i++)
{
$query="select * from bible where $display3[$i]=full"; 
//so the prpgram pulls out the Bible verse regardless of the absence of the leading zero, which has been truncated in EXPLODE
if ($result = mysqli_query($link,$query))
 {
  /* fetch associative array */
    while ($row = mysqli_fetch_array($result))
 {
		//echo "row=".$row;
		$var4=0;
		// put in a line break keep the comments coming....or i forget what the line does....
		echo "<br>";
		// the following line displays the Bible verse...gotcha!
		// 13 Sept 2016 1213hrs ok want to put the full book chapt verse reference...for each Bible link
		// this is doable....i dont even now really need to search key_english table....as of course the book number is in Bible anyway....dumbo....
		// but...BUT!!!!!!!!!!!! i need the book name!! so i will need key_english......unless it was a relational db....but i need the book name 
		// 14 Sept 2016 1722 so i need the Book name from key_english FIRST!!
		//echo "testing!";
		echo "Book ".($row["n"])." "."chapter ".($row["chapt"])." "."verse".($row["verse"]." ");
		//echo ($row["full"]);
        echo  ($row["text"]);
				
				$test1=$row["full"];
				$input1=strlen($test1); 
				//echo "string len=$input1";
				//echo "b4 strpad test1=$test1";
				if ($input1<8)
				{
				 $test1=str_pad($test1,8,"0",STR_PAD_LEFT);
				 }
				  
				//echo "test1 after strpad=$test1";
				//echo "book name from POST!= $book";
				//$rest = substr("$test1",-3, -1);    // returns 
				//echo "rest=$rest";
			
				}
				// ok padded out "full" to the correct length......
				// now i have the book number in the first two characters of the string i can do a book name look up.
				

    /* free result set */
    mysqli_free_result($result);
}

/* close connection */
//mysqli_close($link);
// echo " end of program";
}
?>
</body>
</html>
