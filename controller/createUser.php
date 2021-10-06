<?php
    require "../Models/userModel.php";
    require "../Daos/userDao.php";

    if(assert($_POST['fullName'] && $_POST['email'] && $_POST['password'])){
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passConfirm = $_POST['passwordConfirm'];
        $user = new User($fullName, $email, $password);
        $sucess = addUser($user, $password);
        if($sucess){
            echo ("Usuario cadastrado com sucesso.");
        }
        else{
            echo json_encode("Erro ao gravar dados.");
        }
    }else{
        echo json_encode("Dados faltantes.");
    }