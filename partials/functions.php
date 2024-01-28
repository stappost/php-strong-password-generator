<?php 
    function generatePassword($length){
        if(isset($length)){
            // CARATTERI
            $allChar = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890?!.,/[]{}&@#';
            // PASSWORD DA RESTITURE 
            $password = [];
            // CICLO 
            while(count($password) < $length){
                $password[] = $allChar[rand(0, strlen($allChar))];
            }
            $password = implode($password);
            return $password;
        }
    }
?>