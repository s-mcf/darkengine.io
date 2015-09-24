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
body{
	background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url(<?php echo '"'.$image.'"'; ?>) no-repeat center center fixed;
	background-size: cover;
	font-family: Terminus, Terminus-woff, monospace;
	height:100%;
	width: 100%;
	position: absolute;
	left: 0;
	top: 0;
	overflow:hidden;
	margin:0;
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

	width: 225px;
	height: 1em;
	position: absolute;
	top:0;
	bottom: 40%;
	left: 0;
	right: 0;
	margin: auto;
}
#the_end{
	text-align: justify;
	font-size: 12px;
	width: 400px;
	margin-top: 15px;
	margin-left: -87px;
	padding: 1px 15px;
	background-color: rgba(0,0,0,0.6);
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
<script type="text/javascript" src="/static/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/static/js/jquery.bgswitcher.js"></script>
<script type="text/javascript" src="/static/js/rotate.js"></script>
<script type="text/javascript" src="/static/js/music.js"></script>
</head>
<body>
<div id="h">darkengine
<div id="the_end">
<p>When our journey is complete, when every step has been walked, when everything has been seen, I'd like to hope that in our last moments, we will rise to the night sky triumphant, shouting our unheard victory to the world: "I am free!"</p>
<p>The intricately detailed, the unthinkably simple. The vivid luminosity, the subtle pulchritude. Rainy streets, busy highways, a cramped apartment in Hong Kong. When there is no more to be seen, the curtain will be lowered, but the audience will remain silent and sombre.</p>
<p>And it will be beautiful.</p>
</div>
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
</body>
</html>
