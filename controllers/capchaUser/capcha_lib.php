<?php

include_once '../config/crypt.php';

   function generateCode($characters) {
      $possible = '23456789bcdfghjkmnpqrstvwxyz';
      $code = '';
      $i = 0;
      while ($i < $characters) { 
         $code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
         $i++;
      }
      return $code;
   }

   function generateImage($width='120',$height='40',$characters='4') {
	  global $cookie;
      $font = 'D:/GitHub/gg.com/controllers/capchaUser/glashou.ttf';
      $code = generateCode($characters);
      $mdcode = mc_encrypt($code, ENCRYPTION_KEY);
      $name = 'capchauser';
      $mdname = md5($name);
	   setcookie($mdname, $mdcode, time() + (60), '/' );
      $font_size = $height * 0.75;
      $image = imagecreate($width, $height) or die('Cannot initialize new GD image stream');
      $background_color = imagecolorallocate($image, 255, 255, 255);
      $text_color = imagecolorallocate($image, 20, 40, 100);
      $noise_color = imagecolorallocate($image, 100, 120, 180);
      for( $i=0; $i<($width*$height)/3; $i++ ) {
         imagefilledellipse($image, mt_rand(0,$width), mt_rand(0,$height), 1, 1, $noise_color);
      }
      for( $i=0; $i<($width*$height)/150; $i++ ) {
         imageline($image, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height), $noise_color);
      }
      $textbox = imagettfbbox($font_size, 0, $font, $code) or die('Error in imagettfbbox function');
      $x = ($width - $textbox[4])/2;
      $y = ($height - $textbox[5])/2;
      imagettftext($image, $font_size, 0, $x, $y, $text_color, $font , $code) or die('Error in imagettftext function');
	  return $image;
	}