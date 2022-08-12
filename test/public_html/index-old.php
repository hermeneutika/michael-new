<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!DOCTYPE html>


  <script src="https://cdn.tiny.cloud/1/cixlqfaz3suf5bahqsi7or6gac7s5llg93a801b739d5atb2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>

 



<body>
<textarea>
    Welcome to TinyMCE!
  </textarea>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>

<?php include ("conn.php"); ?> 

<?php 
$search="God is love";
echo $search;
#$query="select * from "bible.text" where "text" LIKE "%wisdom%"";
#$query="select * from bible";
$query = "SELECT * FROM bible where bible.text LIKE '%$search%'";
$result = mysqli_query($conn, $query);
var_dump($result);
while ($row = mysqli_fetch_assoc($result))
{
  extract($row);
  
  echo "<br>";
  echo "<br>";
  #echo "$text";
  echo "text="."$text"."book="."$n"."verse="."$verse";
}
?>
<script>
var temp = tinymce.get('textarea').save();
console.log(temp);
  </script>
</body>
</html>