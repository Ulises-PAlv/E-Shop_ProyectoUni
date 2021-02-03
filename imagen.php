<?php
 header ("Content-type: image/png");
    session_start();
    $text=randomstr(6);
    $_SESSION['captcha_text']=md5(strtolower($text));
    $captcha=imagecreate(150,80);
    imagecolorallocate($captcha,0,0,0);
    $gray=imagecolorallocate($captcha,128,128,128);
    for($i=0;$i<10;$i++){
        imageline($captcha,rand(0,10)*20,0,rand(0,10)*20,100,$gray);
        imageline($captcha,0,rand(0,10)*10,200,rand(0,10)*10,$gray);
    }
    $i=0;
    $e=20;

     while($i<strlen($text)){
		  $randcolors = imagecolorallocate($captcha,rand(100,255),rand(200,255),rand(200,255));
		 imagechar($captcha,rand(80,100),$e,rand(30,50),$text[$i], $randcolors);
		 $i++;
		 $e+=20;
	 }
  
   
    imagepng($captcha);
    imagedestroy($captcha);
    function randomstr($len){
        $string = "";
        $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        for($i=0;$i<$len;$i++)
        $string.=substr($chars,rand()%strlen($chars),1);
        return $string;
    }
?>