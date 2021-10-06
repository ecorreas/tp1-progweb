<?php 

function addUser($user){
    $host= "localhost";
    $username = "root";
    $password = " ";
    $database = "users";
    $con = new mysqli($host,$username,$password,$database);
    if($con->connect_error){
        die("Falha na conexão" . $con->connect_error);
    }else{
        $fullName = $user->getFullName();
        $email = $user->getEmail();
        $password = $user->getPassword(); 
        
        $query = "INSERT INTO user (fullname, email, password) VALUES ('$fullName','$email','$password')";
        if($con->query($query) == TRUE){
            header('Location: ../cadastroSucesso.html');
            die();
        }else{
            echo ("Erro ao gravar dados.");
        }
    }
}

function authenticationUser($email, $pass){
    $host= "localhost";
    $username = "root";
    $password = "";
    $database = "users";
    $con = new mysqli($host,$username,$password,$database);
    if($con->connect_error){
        die("Falha na conexão" . $con->connect_error);
    }else{
        $query = "SELECT * from user where email='$email' and password='$pass'";
        $result = $con->query($query);
        return $result;
    }
}

function findUserByEmail($email){
    $host= "localhost";
    $username = "root";
    $password = "";
    $database = "users";
    $con = new mysqli($host,$username,$password,$database);
    if($con->connect_error){
        die("Falha na conexão" . $con->connect_error);
    }else{
        $query = "SELECT * from user where email='$email'";
        $result = $con->query($query);
        return $result;
    }
}