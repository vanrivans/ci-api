<?php

function webpConverter($url, $file , $quality = 100) {

    //The file path of your image.
    $imagePath = $url . $file;
    $ext = pathinfo($imagePath, PATHINFO_EXTENSION);

    if ($ext == 'png' || $ext == 'PNG') {
        //Create an image object.
        $im = imagecreatefrompng($imagePath);
    } else {
        //Create an image object.
        $im = imagecreatefromjpeg($imagePath);
    }

    //The path that we want to save our webp file to.
    $path = pathinfo($file, PATHINFO_EXTENSION);
    $newImagePath = str_replace('.' . $path, '.webp', $imagePath);

    //Quality of the new webp image. 1-100.
    //Reduce this to decrease the file size.
    // $quality = 50;

    //Create the webp image.
    imagewebp($im, $newImagePath, $quality);

    return $newImagePath;
}

function imageResize($path, $filename, $fileExt)
{
    $CI = get_instance();

    $sizes = array('medium', 'small');
    $width = array(600, 400);
    $height = array(400, 150);

    $CI->load->library('image_lib');

    for ($i = 0; $i < count($sizes); $i++) {

        $config['image_library']    = 'gd2';
        $config['source_image']     = $path . $filename . $fileExt;
        $config['create_thumb']     = false;
        $config['maintain_ratio']   = true;
        $config['width']            = $width[$i];
        $config['height']           = $height[$i];   
        $config['new_image']        = $path . $filename . '-' . $sizes[$i] . $fileExt;
 
        $CI->image_lib->clear();
        $CI->image_lib->initialize($config);
        $CI->image_lib->resize();
    }
}