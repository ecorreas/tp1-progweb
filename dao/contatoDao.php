<?php 

function recoverContactMessage($message){
    $host= "us-cdbr-east-04.cleardb.com";
    $username = "b426bb20ab8a68";
    $password = "9c8ab2fd";
    $database = "heroku_dbaba206ac6b0df";
    $con = new mysqli($host,$username,$password,$database);
    if($con->connect_error){
        die("Falha na conexão" . $con->connect_error);
    }else{
        $name = $message->getName();
        $email = $message->getEmail();
        $phone = $message->getPhone();
        $subject = $message->getSubject();
        $texto = $message->getMessage();
        
        $sql = "INSERT INTO message (name, email, phone, subject, texto) VALUES ('$name','$email','$phone', '$subject', '$texto')";
        if($con->query($sql) == TRUE){
            header('Location: https://bolicho-alegrete.herokuapp.com/contatoSucesso.html');
            die();
        }else{
            echo ("Erro ao gravar dados.");
        }
    }
}