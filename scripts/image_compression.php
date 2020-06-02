<?php

$source = "input.jpg";
$info = getimagesize($source);
$image = "";

if ($info['mime'] == 'image/jpeg')
	$image = imagecreatefromjpeg($source);
elseif ($info['mime'] == 'image/gif')
	$image = imagecreatefromgif($source);
elseif ($info['mime'] == 'image/png')
	$image = imagecreatefrompng($source);

imagejpeg($image, "output/".$source, 70);

?>