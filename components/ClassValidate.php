<?php
    function validateConfPassword($password, $passwordConfirm){
        if($password === $passwordConfirm){
            return true;
        }
        else{
            return false;
        }
    }
?>