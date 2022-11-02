<?php
    
    if(!empty($_GET)){
       
        list($text_r, $text_g, $text_b) = sscanf($_GET["color"], "#%02x%02x%02x");
        list($bg_r, $bg_g, $bg_b) = sscanf($_GET["bg_color"], "#%02x%02x%02x");

        header("Content-Type: image/png");
        $im = @imagecreate(110, 30)
            or die("Cannot Initialize new GD image stream");
            
        $background_color = imagecolorallocate($im, $bg_r, $bg_g, $bg_b);
        $text_color = imagecolorallocate($im, $text_r, $text_g, $text_b);
        imagestring($im, 5, 5, 5,  $_GET["q"], $text_color);
        imagepng($im);
        imagedestroy($im);

    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>

        <form action="#" method="get">
            <input type="text" name="q">
            Text color: <input type="color" name="color">
            BG color: <input type="color" name="bg_color">
        </form>
        
    </body>
</html>