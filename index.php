<!DOCTYPE html>  
<html lang="en">  
<head>  
  <meta charset="UTF - 8">  
  <meta http - equiv="X - UA ? Compatible" content="IE=edge">  
  <meta name="viewport" content="width=device-width, initial - scale=1.0">  
  <title>PHP</title>  
</head>  
<body>  
<?Php  
// to define the size of the image  
   $image= imagecreate( 400,200);  
// to define the background color of the image  
   $background-color = imagecolorallocate($image,0, 155, 2);  
// to define the text color of the image  
   $text-color = imagecolorallocate($image,255, 255, 255);  
// These function will define the character to be displayed on the screen  
   Imagestring($image,13,151,121,"this is text 1", $text-color);  
   Imagestring($image,4,151,101,"this is text 2", $text-color);  
   Imagestring($image,10,151,81," this is text 3", $text-color);  
   Imagestring($image,13,151,61," this is text  4", $text-color);  
   Header("Content - Type: image/png");  
   Imagepng($image);  
   Imagedestroy($image);  
?>  
</body>  
</html>  
