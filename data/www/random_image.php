<?php
$imagesDir = 'static/images/';

$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
$randomImage = $images[array_rand($images)];

echo $randomImage;
/*
header('X-Accel-Redirect: /'. $randomImage);
header('Content-Type: '); // make nginx decide the Content-Type*/
?>
