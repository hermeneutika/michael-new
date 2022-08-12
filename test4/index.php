<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/menu.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/site.css" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="tinymce/js/tinymce/tinymce.min.js"></script>
  <script type="text/javascript">
  tinymce.init({
    selector: 'textarea',
    plugins: 'save',
  toolbar: 'save'
  });
  </script>
  <title>Document</title>
  
</head>
<body>
<?php include ("conn.php"); ?> 
<?php include ("menu1.php"); ?> 
<form action="page.php" method="post">
    <textarea name="myTextarea"></textarea>
    <input type="submit" value="go" />
</form>
</body>
</html>