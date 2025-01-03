<?php

$image_data = str_replace('data:image/png;base64,','',$_POST['resp']);


// Define the Base64 value you need to save as an image
$b64 = $image_data;

// Obtain the original content (usually binary data)
$bin = base64_decode($b64);

// Load GD resource from binary data
$im = imageCreateFromString($bin);

// Make sure that the GD library was able to load the image
// This is important, because you should not miss corrupted or unsupported images
if (!$im) {
    die('Base64 value is not a valid image');
}

// Specify the location where you want to save the image
$img_file = rand().'filename.png';

// Save the GD resource as PNG in the best possible quality (no compression)
// This will strip any metadata or invalid contents (including, the PHP backdoor)
// To block any possible exploits, consider increasing the compression level
imagepng($im, $img_file, 0);
echo json_encode(['img'=>'<img src="http://localhost/2020/croppie/croppie/'.$img_file.'">']);

exit;
