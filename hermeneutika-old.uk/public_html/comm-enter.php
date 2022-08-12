<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
<!--<script src="jquery.js"></script>
        <script>$(function() { alert('hi') })</script> -->
<script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
  <script language="JavaScript" type="text/javascript">
  tinymce.init({
    selector: '#mytextarea'	
        
  });

  </script>
<title>Page title</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- the script below comes from http://w3code.in/2015/10/insert-data-in-database-without-refreshing-page-using-ajax-and-php-beginner-guide/ 
// 20 august 2016 -->
 
<script>
	function sendData()
	{
		var data = new FormData($('#myFOrm')[0]);//this will select all the form data in the data variable.
 
		$.ajax({
			type:"POST",
			url:"insert.php",
			data:data,
			contentType: false,
            cache: false,
            processData: false,
			success:function(dta)
			{
				alert(dta);
			}
 
		});
	}
 
	</script>
<link href="site.css" rel="stylesheet" type="text/css" />
</head>
<body>



<?php  
// this posting comes from bible-enter-data1.php and is the original verse
$book=$_POST["book"];
$chapt=$_POST["chapt"];
$verse=$_POST["verse"];

//echo "posted from bible-enter-data1 which is the original=$book";
// equate POST varibales from original into session variables
// ok making the session equal to the POST it now should be available in insert?
// ok the below code works and i have made the session variable equal to a normal variable. 
// now can i callthis session variable in insert.php? 
session_start();
$_SESSION["book_orig_sess"]=$_POST["book"];
$_SESSION["chapt_orig_sess"]=$_POST["chapt"];
$_SESSION["verse_orig_sess"]=$_POST["verse"];
//$testing=$_SESSION["book_orig_sess"];
//$testing2=$_SESSION["chapt_orig_sess"];
//$testing3=$_SESSION["verse_orig_sess"];

//echo "book orig sess =$testing";
//echo "chapt orig sess =$testing2";
//echo "verse orig sess =$testing3";
?>
<?php include ("link.php"); ?>
<?php 


	
 ?>
<div>
<form id=myFOrm>

<!-- Name:<br><input type="text" name = "bibref" ><br> -->
<input type="text" name="book" value='book'>
<input type="text" name="chapt" value='chapt'>
<input type="text" name="verse" value='verse'>

<!--<input type="button" onclick = "sendData()" name="submit" value="submit"> -->
<label>Append:</label><input type="radio" onclick="sendData()" name="q1" value="append"><br>
<label>Delete : </label><input type="radio" onclick="sendData()" name="q1" value="delete"><br>
</form>
<input type="submit">
</div>



<?php echo "<br>"; ?>
<?php include ("bible-display.php"); ?>

<form action="update.php" method="post">
<div class="textarea">
<label>Author:</label><input type="text" name="author"><br>
<!--<label>book:</label><input type="text" name="book"><br> 
<label>Chapt:</label><input type="text" name="chapt"><br>
<label>Verse:</label><input type="text" name="verse"><br>
-->
<TEXTAREA rows="5" cols="50" id="mytextarea" name="text" ></TEXTAREA>
<br>
<label>Append:</label><input type="radio" name="q1" value="append"><br>
<label>Delete : </label><input type="radio" name="q1" value="delete"><br>
</div>
<input type="submit">
</form>


</body>
</html>
