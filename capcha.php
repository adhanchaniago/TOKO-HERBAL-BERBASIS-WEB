<?php
session_start();
header("Content-type: image/png");

$captcha_image = imagecreatefrompng("images/captcha.png");
$captcha_font = imageloadfont("images/font.gdf");
$captcha_text = substr(md5(uniqid('')),-6,6);

$_SESSION['captcha_session'] = $captcha_text;

$captcha_color = imagecolorallocate($captcha_image,110,20,50);
imagestring($captcha_image,$captcha_font,0,5,$captcha_text,$captcha_color);
imagepng($captcha_image);
imagedestroy($captcha_image);
?>
