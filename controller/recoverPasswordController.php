<?php
    require '/dao/recoverPasswordDao.php';


    $email = $_GET['email'];
    $password = $_POST['password'];

    if(recoverPassword($email,$res['password'])){
        header('Location: https://bolicho-alegrete.herokuapp.com/senhaSucesso.html');
        die();
    }
    else{
        echo ("Não foi possivel redefinir a senha.");
    }