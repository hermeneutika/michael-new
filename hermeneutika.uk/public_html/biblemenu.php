<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="menu.css" />
  <link rel="stylesheet" href="header.css" />
  <link rel="stylesheet" href="site.css" />
  <title>Document</title>
</head>
<body>
<?php include ("conn.php"); ?> 
<?php include ("menu1.php"); ?> 

        <li><a href="display1.php">Read a Bible verse</a></li>
        <li><a href="display1comment.php">Read a Bible verse and a commentary</a></li>
        <li><a href="deletemenu.php">Delete a commentary entry</a></li>
       <li><a href="addcomment.php">Add/append a commentary entry</a></li>
       <li><a href="amendcomment.php">Update or correct an entry</a></li>
       <li><a href="showall.php">Show all entries for a commentary</a></li>
       <li><a href="biblelink1.php">Add a Bible link</a></li>
       <li><a href="displaylinks.php">Display Bible links</a></li>
       <li><a href="paginate1.php">Scroll through a commentary!</a></li>
  
</body>
</html>