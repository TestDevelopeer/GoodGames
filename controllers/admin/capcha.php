<?php 
if(!isset($_SESSION['admin'])){
    
require_once('../capcha/capcha_lib.php');
            $img = generateImage();
            //Start buffering the output stream
            ob_start();
            // output the image as a file to the output stream
            imagejpeg($img, NULL, 100);
            //Read the output buffer
            $buffer = ob_get_contents();
            //clear the buffer
            ob_end_clean();
            imagedestroy( $img );
            $capchaImg = '<div class="reply_capcha" style="margin: 1.8em 0 0 0;">
                <img src="data:image/jpeg;base64,'.base64_encode($buffer).'"/>  
                <br>
                <br>
                <input id="capcha" name="typed_security_code" class="form-control fc-outline-dark reply_typed_security_code" type="text" required=""/>
            </div>';
            $smarty->assign('capchaImg', $capchaImg);

}
 ?>