<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
</head>
<body>
	<h1>Admin Template</h1>
	<?php $this->load->view($module.'/'.$content); ?>
	
</body>
</html>