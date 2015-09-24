<?php
$imagesDir = 'static/images/';

$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
/*foreach ($images as $image){
	echo '/'.$image.PHP_EOL;
}*/
echo json_encode($images);
?>
