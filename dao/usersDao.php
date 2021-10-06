<?php 

function addUser($user){
    $host= "us-cdbr-east-04.cleardb.com";
    $username = "b426bb20ab8a68";
    $password = "9c8ab2fd";
    $database = "heroku_dbaba206ac6b0df";
    $con = new mysqli($host,$username,$password,$database);
    if($con->connect_error){
        die("Falha na conexão" . $con->connect_error);
    }else{
        $fullName = $user->getFullName();
        $email = $user->getEmail();
        $password = $user->getPassword(); 
        
        $sql = "INSERT INTO user (fullname, email, password) VALUES ('$fullName','$email','$password')";
        if($con->query($sql) == TRUE){
            header('Location: https://bolicho-alegrete.herokuapp.com/cadastroSucesso.html');
            die();
        }else{
            echo ("Erro ao gravar dados.");
        }
    }
}

function authenticationUser($email, $pass){
    $host= "us-cdbr-east-04.cleardb.com";
    $username = "b426bb20ab8a68";
    $password = "9c8ab2fd";
    $database = "heroku_dbaba206ac6b0df";
    $con = new mysqli($host,$username,$password,$database);
    if($con->connect_error){
        die("Falha na conexão" . $con->connect_error);
    }else{
        $sql = "SELECT * from user where email='$email' and password='$pass'";
        $result = $con->query($sql);
        return $result;
    }
}

function findUserByEmail($email){
    $host= "us-cdbr-east-04.cleardb.com";
    $username = "b426bb20ab8a68";
    $password = "9c8ab2fd";
    $database = "heroku_dbaba206ac6b0df";
    $con = new mysqli($host,$username,$password,$database);
    if($con->connect_error){
        die("Falha na conexão" . $con->connect_error);
    }else{
        $sql = "SELECT fullname, email, password from user where email='$email'";
        $result = $con->query($sql);
        return $result;
    }
}