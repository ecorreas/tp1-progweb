<?php
    require '/dao/contatoDao.php';

    if(assert($_POST['name'] && $_POST['inputEmail'] && $_POST['phone'] && $POST['subject'] && $POST['message'])){
        $name = $_POST['name'];
        $email = $_POST['inputEmail'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $texto = $_POST['message'];

        $message = new Message($name, $email, $phone, $subject, $texto);
        recoverContactMessage($message);

        }else{
            echo ("Dados faltantes.");
        }