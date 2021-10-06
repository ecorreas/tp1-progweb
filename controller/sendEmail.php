<?php
    require '/dao/usersDao.php';
    require '/dao/recoverPasswordDao.php';

    $email = $_POST['email'];
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL) || $email){
        echo ("Email inválido.");
        die();
    }
    else{
        $result = findUserByEmail($email);
        
        if($result->num_rows > 0){
            $res = $result->fetch_assoc();
            sendEmail($res['fullname'],$email);
        }       
        else{
            echo ('Email não encontrado.');
        }
}