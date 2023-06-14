<?php
    function encrypt($data, $key){
        // $encryptedData = base64_encode($data);
        $encryptedData = "";
        $keyLength = strlen($key);

        for($i=0; $i<strlen($data); $i++){
            $encryptedData .= chr(ord($data[$i]) ^ ord($key[$i % $keyLength]));
        }

        return $encryptedData;
    }

    function decrypt($data, $key){
       $decryptedData = "";
         $keyLength = strlen($key);

        for($i=0; $i<strlen($data); $i++){
            $decryptedData .= chr(ord($data[$i]) ^ ord($key[$i % $keyLength]));
        }

        return $decryptedData;  
    }
?>