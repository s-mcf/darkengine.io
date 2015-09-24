<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="/static/favicon.png" />
<?php
ob_start();
require('random_image.php');
$image = ob_get_clean();
?>
<title>darkengine</title>
<style>
html{
	background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url(<?php echo '"'.$image.'"'; ?>) no-repeat center center fixed;
	background-size: cover;
	font-family: Terminus, Terminus-woff, monospace;
	height:100%;
	overflow:hidden;
}
@font-face{
	font-family: Terminus-woff;
	src: url('/static/fonts/terminus.woff');
	font-weight: bold;
}
#h{
	text-align:center;
	color: #ffffff;
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
#info, #contact{
	color: #eeeeee;
	position: absolute;
}
ul{
	list-style-type: none;
	padding: 0;
}
#info{
	bottom: 0;
	left:0;
	padding-left: 40px;
}
#contact{
	width:100%;
	background: rgba(0,0,0,0.5);
	bottom: 0;
	right:0;
	text-align: right;
	padding-right: 40px;
}
a{
	color: #7B7CC8;
	text-decoration: none;
}
button{
	background-color: rgba(0,0,0,0.5);
	border: 1px solid #ddd;
	color: #ddd;
	font-family: Terminus, Terminus-woff, monospace;
}
</style>
</head>
<body>
<div id="h">darkengine
<audio id="kyoku">
<source src="/static/music/aisatsana.mp3" />
</audio>
<button id="begin">Take me with you</button>
</div>
<div id="contact">
<ul>
<li><a href="mailto:simon@piston.pw">Email</a></li>
<li><a href="https://github.com/darkengine-io">Github</a></li>
<li><a href="https://linkedin.com/in/darkengine">LinkedIn</a></li>
</ul>
</div>
<div id="info">
<ul>
<li>infosec</li>
<li>embedded systems</li>
<li>asm</li>
</ul>
</div>
<script type="text/javascript">
var kyoku = document.getElementById('kyoku'),
    begin = document.getElementById('begin');

begin.onclick = function () {
	if(kyoku.paused){
		kyoku.play();
	}
};
</script>
</body>
</html>
