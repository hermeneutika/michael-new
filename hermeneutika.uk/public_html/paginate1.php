<html>  
<head>  
<title> Pagination </title>  
  <link rel="stylesheet" href="menu.css" />
  <link rel="stylesheet" href="header.css" />
  <link rel="stylesheet" href="site.css" />
</head>  
<body>  
<?php include ("conn.php"); ?>
  <?php include ("menu1.php"); ?> 
<?php  
   $comment=$_POST['comment'];
   echo "comment=".$comment;
    //database connection  
    //$conn = mysqli_connect('localhost', 'root', '');  
    //if (! $conn) {  
//die("Connection failed" . mysqli_connect_error());  
  //  }  
    //else {  
//mysqli_select_db($conn, 'rev');  
  //  }  
  
    //define total number of results you want per page  
    //$comment=$_POST['comment'];
  //echo "comment=".$comment;
    $results_per_page = 1;  
  
    //find the total number of results stored in the database  
    $query = "select * from michael limit 0,150";  
    $result = mysqli_query($conn, $query);  
    $number_of_result = mysqli_num_rows($result);  
  echo "no of result=".$number_of_result;
  echo "<br>";
    //determine the total number of pages available  
    $number_of_page = ceil ($number_of_result / $results_per_page);  
  
    //determine which page number visitor is currently on  
    if (!isset ($_GET['page']) ) {  
        $page = 1;  
    } else {  
        $page = $_GET['page'];  
    }  
  
    //determine the sql LIMIT starting number for the results on the displaying page  
    $page_first_result = ($page-1) * $results_per_page;  
  $test1='';
    //retrieve the selected results from database   
    //$query = "SELECT * FROM michael where text !='' LIMIT  $page_first_result  , $results_per_page (select * from bible where bible.full=michael.full)"; 
    $query="select * from michael where text !='' LIMIT  $page_first_result  , $results_per_page";
    $result = mysqli_query($conn, $query);  
      echo "page_first_result=".$page_first_result;
      echo "<br>";
      echo "results per page=".$results_per_page;
      echo "<br>";
      // query to pull the Bible verse
    //  $query2="select * from bible";
      //$result2=mysqli_query($conn,$query2);
      
    //display the retrieved result on the webpage  
    while ($row = mysqli_fetch_array($result)) {  
     // $test1=$row['full'];
//echo "rowfull=".$row['full'];
echo "<br>";
$test1=$row['full'];
echo "test1=".$test1;
echo "<br>";
//$query="select from bible where full=$test1 ";
//$result=mysqli_query($conn,$query);
//echo "result=".$result;
//echo $row2['text'];
//while ($row2 = mysqli_fetch_row($result2)) {
 // printf ("%s (%s)\n", $row[0], $row[1]);
//}
      
        echo $row['full'] . ' ' . $row['text'] . '</br>';  
    }  
  
  
    //display the link of the pages in URL  
    for($page = 1; $page<= $number_of_page; $page++) {  
       #echo "comment=".$comment;
        echo '<a href = "paginate1.php?page=' . $page . '">' . $page . ' </a>';  
    }  
  
?>  
</body>  
</html>  