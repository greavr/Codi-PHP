<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<Title>Codi</Title>
<?php require_once('config.php') ?>
<?php require_once('BookList.php') ?>
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui-1.8.12.custom.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery.js"></script>  
        <script type="text/javascript" src="js/javainclude.js"></script>
        <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.8.12.custom.min.js"></script>
</head>
<body>
	<div id="Content">
		<div id="SelecterHolder">
			<?php echo BookList(); ?>
		</div>
		<div id="TaskInfo">
			&nbsp;
		</div>
	</div>
</body>
</html>