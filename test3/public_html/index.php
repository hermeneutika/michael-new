<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<link rel="stylesheet" href="menu.css" />
  <link rel="stylesheet" href="header.css" />
  <link rel="stylesheet" href="site.css" />
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>Edit Contents</title>
  <link type="text/css" rel="stylesheet" media="all" href="/site/site.css" />
<script type="text/javascript" src="/site/editor/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
	// General options
	mode : "textareas",
	theme : "advanced",
	plugins : "safari,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,imagemanager,filemanager, ibrowser",

	// Theme options
	theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
	theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
	theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
	theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage, ibrowser",
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_statusbar_location : "bottom",
	theme_advanced_resizing : true,

	// Example content CSS (should be your site CSS)
	content_css : "css/example.css",

	// Drop lists for link/image/media/template dialogs
	template_external_list_url : "js/template_list.js",
	external_link_list_url : "js/link_list.js",
	external_image_list_url : "js/image_list.js",
	media_external_list_url : "js/media_list.js",

	// Replace values for the template plugin
	template_replace_values : {
		username : "Some User",
		staffid : "991234"
	}
});
</script>
</head>
<body>
<br />
<?php include ("menu1.php"); ?>  
<form method="post" action="insert.php">
<label for="title"><b> Article Title:</b></label><br />
<input name="heading" id="title" type="text" maxlength="150" /> 
<br />  <br />   
<div style="width:100%; height:100%; "> 
<label for="title"><b>Article Message:</b></label><br />
	<textarea name="contents" style="width:100%; height:400px; ">
	</textarea>
	<br /> 
	<INPUT type="submit" value="Save"/>

</form>
</div>
<?php
# Using SCRIPT_NAME

//$path = $_SERVER['SCRIPT_NAME'];

//echo "Path To Script Example: <a href='$path'>An Article Title</a>";

?>
</body>
</html>