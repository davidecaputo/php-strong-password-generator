<?php 
    function createPassword($lengthPassword){
        $elementPassword = 'ABCDEFGHIJKLMNOPQESTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!"#$%&()*+,-./:;<=>?@[\]^_`{|}~';
        $password = '';
        if($lengthPassword){
            do{
                $randomNumber = rand(0, (strlen($elementPassword) - 1));
                $password .= $elementPassword[$randomNumber];
            } while(strlen($password) < $lengthPassword);
            $result = $password;
            return $result;
        }
    }
?>