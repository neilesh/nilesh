<?php

class crypto {
   public function decrypt($text, $key) 
   { 
        $src = $text;
        $tag = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, base64_decode($src), MCRYPT_MODE_ECB, mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND))); 
        $tag = substr($tag, 13);
		echo $tag;
        return $tag;
    } 
}

?>