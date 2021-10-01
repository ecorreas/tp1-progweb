<?php
    require '../Daos/userDao.php';

    $email = $_POST['email'];
    $password = $_POST['pass'];
    $result = findUser($email, $pass);
    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        if($user['password'] == $password){
            echo json_encode("true");

            $resarray = array();
            array_push($resarray,array("fullname"=>$user['fullname'],"email"=>$user['email'],"password"=>$user['password'],));
            echo json_encode(array($resarray));
        }
        else{
            echo json_encode('false');
        }
    }else{
        echo json_encode("Crie uma conta.");
    }
?>