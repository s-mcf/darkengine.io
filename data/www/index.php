<!doctype html>
<html>
<head>
<?php
ob_start();
require('random_image.php');
$image = ob_get_clean();
?>
<title>darkengine</title>
<style>
body{
	background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url(<?php echo '"'.$image.'"'; ?>) no-repeat center center fixed;
	background-size: cover;
}
@font-face{
	font-family: Terminus;
	src: url('/static/fonts/terminus.woff');
	font-weight: bold;
}
#h{
	text-align:center;
	color: #ffffff;
	font-weight: bold;
	font-family: Terminus, monospace;
	font-size: 45px;
	text-shadow: 2px 2px #111111;

	width: 200px;
	height: 1em;
	position: absolute;
	top:0;
	bottom: 20%;
	left: 0;
	right: 0;
	margin: auto;
}
</style>
</head>
<body>
<div id="h">darkengine</div>
</body>
</html>
