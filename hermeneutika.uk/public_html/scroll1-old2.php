
<?php include ("conn.php"); ?>
 
<form action="<?=$PHP_SELF?>" method="post" enctype="multipart/form-data">

<?php
// Starting session
session_start();
include ("conn.php");
$_SESSION["start_row"] = 0;

// make the sql connection then select database using constants from the 
// included configuration php file.
//$conn = mysqli_connect(DB_HOSTX, DB_USERX, DB_PASSWORDX) or die('Could not connect: ' . mysqli_error());
//$db_selected = mysqli_select_db(DB_NAMEX, $conn) or die('Could not select database');   
$comment='michael';
echo "comment=".$comment;
// query the customer feedback records.
$query="select * from $comment";
$result=mysqli_query($conn,$query); 
// the number of records in your result set; assign to the php session
// variable, $_SESSION[totalrecords].
$total_records = mysqli_num_rows($result); 
echo "totalrecords=".$total_records;
$_SESSION["totalrecords"] = $total_records;

// assign the current starting row to a row variable, '$num'.
$num = $_SESSION["start_row"];

// encapsulate html with php code to display buttons for redirection
// operations as well as forward and backward scrolling.
echo "<p>";

echo "<input type=submit name=submit_return_to value='Home'>";
echo "<input type=submit name=submit_add_feedback value='Add Customer Feedback'>";

if ( $_SESSION["start_row"] + 11 >= $_SESSION["totalrecords"] || $_SESSION["totalrecords"] < 11 ) {
echo "<input type=submit name=submit_page_forward value=Next disabled>";
} else {
echo "<input type=submit name=submit_page_forward value=Next>";
}
if ( $_SESSION["start_row"] == 0 ) {
echo "<input type=submit name=submit_page_backward value=Previous disabled>";
} else {
echo "<input type=submit name=submit_page_backward value=Previous>";
}

echo "</p>";

// place displayed results in a html table.
echo "<table border='3' cellpadding='10' cellspacing='10'>";

// next, run the "for loop" to display the current 12 rows.
for ($rows = 0; $rows < 12; $rows++) {

if ($num < $total_records) {

// assign the customer feedback to a row variable from the current table record.
//$remark = mysqli_result($result, $num);

//echo "<tr>";    
//echo "<td>";    
// display the customer service feedback remark.
//echo nl2br($remark);
//echo "</td>";    
//echo "</tr>";    

}

// increment the row variable by one for the next table record.
$num++; 

}

echo "</table>";

// free the resource, '$result'.
mysqli_free_result($result);
// close the server connection, '$conn'.
mysqli_close($conn);

?> 

</form>
