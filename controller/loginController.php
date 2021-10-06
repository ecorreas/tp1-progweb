<?php
    require '../dao/userDao.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = authenticationUser($email, $pass);
    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        session_start();
        $_SESSION['email'] = $user['email'];
        $_SESSION['fullName'] = $user['fullName'];
        header('Location: https://bolicho-alegrete.herokuapp.com/home.php');
    }else{
        header('Location: https://bolicho-alegrete.herokuapp.com/erroLogin.html');
    }