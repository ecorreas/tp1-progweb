<?php 

function recoverContactMessage($message){
    $host= "ro2padgkirvcf55m.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $username = "zlm0cho5kdrmqs1f";
    $password = "vku49jrvw0ud1ttb";
    $database = "ipdgrcc12rinzwgt";
    $con = new mysqli($host,$username,$password,$database);
    if($con->connect_error){
        die("Falha na conexão" . $con->connect_error);
    }else{
        $name = $message->getName();
        $email = $message->getEmail();
        $phone = $message->getPhone();
        $subject = $message->getSubject();
        $text = $message->getMessage();
        
        $sql = "INSERT INTO message (name, email, phone, subject, text) VALUES ('$name','$email','$phone', '$subject', '$text')";
        if($con->query($sql) == TRUE){
            header('Location: https://bolicho-alegrete.herokuapp.com/contatoSucesso.html');
            die();
        }else{
            echo ("Erro ao gravar dados.");
        }
    }
}