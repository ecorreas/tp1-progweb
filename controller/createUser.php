<?php
    require "../Models/userModel.php";
    require "../Daos/userDao.php";

    if(assert($_POST['fullName'] && $_POST['email'] && $_POST['cpf'] && $_POST['password'])){
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $password = $_POST['password'];
        $user = new User($fullName, $email, $cpf, $password);
        $sucess = addUser($user, $password);
        if($sucess){
            echo json_encode("Usuario cadastrado com sucesso.");
        }
        else{
            echo json_encode("Erro ao gravar dados.");
        }
    }else{
        echo json_encode("Dados faltantes.");
    }