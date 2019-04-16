<?php
 function doDecrypt($decrypt)
                {$crypt_key = "oru-9(£20faxw,;";


                        $decoded = base64_decode($decrypt);
                        $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND);
                        $decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $crypt_key, $decoded, MCRYPT_MODE_ECB, $iv);

                        return str_replace("\\0", '', $decrypted);
                }
function doEncrypt($encrypt)
	{$crypt_key = "oru-9(£20faxw,;";
		 
		
		$iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_ECB), MCRYPT_RAND);
		$passcrypt = mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $crypt_key, $encrypt, MCRYPT_MODE_ECB, $iv);
		$encode = base64_encode($passcrypt);
		
		return $encode;
	}

