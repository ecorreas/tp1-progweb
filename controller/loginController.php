<?php
    require '/dao/userDao.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = authenticationUser($email, $password);
    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        session_start();
        $_SESSION['email'] = $user['email'];
        $_SESSION['fullname'] = $user['fullname'];
        header('Location: https://bolicho-alegrete.herokuapp.com/home.php');
    }else{
        header('Location: https://bolicho-alegrete.herokuapp.com/erroLogin.html');
    }