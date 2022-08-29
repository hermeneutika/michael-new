<!DOCTYPE html>
<html lang="en">
<head>
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
  
  <?php
  $comment=$_POST['comment'];
  $recordstart=0;
  $pagesize=4;
  echo "recordstart=".$recordstart;
  echo "pagesize=".$pagesize;
  $count=0;
  $query="select * from $comment where text !=''";
  $result=mysqli_query($conn,$query);
  $totalrows= mysqli_num_rows($result);
  echo "totalrows=".$totalrows;

  $query2="select * from $comment WHERE text !='' limit $recordstart,$pagesize";

  $result2 = mysqli_query($conn, $query2);
  $row_cnt = mysqli_num_rows($result2);
  echo "row_cnt=".$row_cnt;
 // while ($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) { 
 // while ($row = $result2->fetch_assoc()) {
   // $count++;
 // echo "count=".$count;
   // echo $row['full']. " ".'<br>'.'<br>'.$row['text']; 
     #echo $row['full'].'<br>';
     //     }
 // }
 if ($recordstart >0) {
  $prev=$recordstart-$pagesize;
  $url=$_SERVER['PHP_SELF'].$recordstart=$prev;
  printf("<a href='$s'>Previous Page</a>",$url);
 }
 if ($totalrows >($recordstart + $pagesize))
 {
  $next=$recordstart+$pagesize;
  $url=$_SERVER['PHP_SELF']."$recordstart=$next";
  printf("<a href='%s'>Next Page</a>",$url);
 }
 ?>

</body>
</html>