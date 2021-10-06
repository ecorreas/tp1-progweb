<?php
    require "/model/userModel.php";
    require "/dao/userDao.php";

    if(assert($_POST['fullName'] && $_POST['email'] && $_POST['password'])){
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $user = new User($fullName, $email, $password);
        addUser($user);

    }else{
        echo ("Dados faltantes.");
    }