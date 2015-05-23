<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Greek Chamber Music Project</title>
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="css/960/960_12_col.css" />
	<meta name="google-translate-customization" content="9e3cce44e194e5d4-16cbeb6e0da8d768-g67abf6e2f2f21a20-19"></meta>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
});
</script>

</head>

<body>
	<?php include_once("analyticstracking.php") ?>
	<?php include("header.php"); ?>
<div class="container_12" style="background-color:#FFF;border:3px #CCC ridge;">		

	
		<?php $page = $_GET["page"] ?>
		
		<?php
		
				
				if ($page <> null) {
					include ('pages/' . $page . '.php');
								}
				else {
					include 'pages/home.php';
				}
		?>	
		
</div>
</body>
</html>