<?php

class graphics {
	function graphics() {
		
	}

	function generateValidationImage($rand) {
		global $site_font_path;
		global $site_font_validation;
		$width = 120;
		$height = 39;
		$image = imagecreate($width, $height); //224
		$bgColor = imagecolorallocate ($image, 0xfff, 0xfff, 0xfff);
		$textColor = imagecolorallocate ($image, 0x000, 0x000, 0x000);

		// Add Random noise
		/*for ($i = 0; $i < 250; $i++) {
		        $rx1 = rand(0,$width);
		        $rx2 = rand(0,$width);
		        $ry1 = rand(0,$height);
		        $ry2 = rand(0,$height);
			$rcVal = rand(0,255);
		        $rc1 = imagecolorallocate($image, rand(0,255), rand(0,255), rand(0,255));
			
		        imageline ($image, $rx1, $ry1, $rx2, $ry2, $rc1);
		}*/

		// write the random number
		$font = imageloadfont($site_font_path."/".$site_font_validation);
		imagestring($image, $font, 3, 5, $rand, $textColor);

		/*if(imagettftext($image, 2.5, 12, 3, 10, $text_color, $font, $rand)){
			echo "success"; exit;
		} else {
			echo "Exception: "; exit;
		}*/
		// $image is the $imagecreate function
		// $font_size is the size of font you want.
		// $angle is the angle of the fonts tilted
		// $x and $y are coordinates.
		// $text_color is the imagecolorallocate function
		// $font-family is the family of font you want to use
		// $text is the text or random text to be displayed

		// send several headers to make sure the image is not cached
		// Date in the past
		
		header("Expires: Mon, 23 Jul 1993 05:00:00 GMT");
		
		// always modified
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		
		// HTTP/1.1
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		
		// HTTP/1.0
		header("Pragma: no-cache");
		
		// send the content type header so the image is displayed properly
		header('Content-type: image/jpeg');
		
		imagejpeg($image);
		imagedestroy($image);
	}
}
?>
