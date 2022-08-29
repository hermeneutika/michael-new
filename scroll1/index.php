<?php 
include('header.php');
?>
<title>webdamn.com : Demo Load Data On Page Scroll Using jQuery and PHP</title>
<script type="text/javascript" src="script/ajax.js"></script>
<?php include('container.php');?>

<div class="container">
	<h2>Example: Load Data On Page Scroll Using jQuery and PHP</h2>		
		<div id="messages">
		<?php include('load_data.php'); ?>
		</div>
		<div id="loader" style="text-align:center;"><img src="loader.gif" /></div>
		
		<div style="margin:50px 0px 0px 0px;">
			<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="" title="">Back to Tutorial</a>			
		</div>	
</div>	
<?php include('footer.php');?> 