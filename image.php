<?php
// header('Content-Type: image/png');
include 'word2uni.php';
$image = imagecreatetruecolor(200, 75);
imagefill($image, 0, 0, 0xaaaaaa);
if(isset($_GET['word'])) {
	$text = text2uni($_GET['word']);
} else {
	$text = text2uni('مرحبا');
}
$font = __DIR__. '/careem.ttf';
imagettftext($image, 25, 0, 20, 50, 0x000000, $font, $text);
imagepng($image);
?>