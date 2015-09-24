<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="/static/favicon.png" />
<link rel="stylesheet" type="text/css" href="/static/css/style.css" />
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
</style>
<script defer type="text/javascript" src="/static/js/jquery-1.11.3.min.js"></script>
<script defer type="text/javascript" src="/static/js/jquery.bgswitcher.js"></script>
<script defer type="text/javascript" src="/static/js/rotate.js"></script>
<script defer type="text/javascript" src="/static/js/music.js"></script>
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
