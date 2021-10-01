<?php
    require '../dao/usersDao.php';
    require '../dao/recoverPasswordDao.php';

    $email = $_POST['email'];
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo json_encode("Email inválido.");
        die();
    }
    else{
        $result = findUserByEmail($email);
        
        if($result->num_rows > 0){
            $res = $result->fetch_assoc();
            sendEmail($res['fullname'],$email);
            
            if(recoverPassword($email,$res['password'])){
                echo json_encode('Enviamos um email de redefinição para o email informado.');
            }
        }       
        else{
            echo json_encode('Email não encontrado.');
        }
}