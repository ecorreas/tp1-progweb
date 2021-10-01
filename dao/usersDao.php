<?php 

function addUser($user){
    $host= "localhost";
    $username = "root";
    $password = "";
    $database = "bolicho_alegrete";
    $con = new mysqli($host,$username,$password,$database);
    if($con->connect_error){
        die("Falha na conexão" . $con->connect_error);
    }else{
        $fullName = $user->getFullName();
        $email = $user->getEmail();
        $cpf = $user->getCpf();
        $address = $user->getAddress();
        $password = $user->getPassword(); 
        
        $sql = "INSERT INTO user (fullname, email, cpf, password) VALUES ('$fullName','$email','$cpf','$password')";
        if($con->query($sql) == TRUE){
            return true;
            die();
        }else{
            return false;
        }
    }
}

function findUser($email, $pass){
    $host= "localhost";
    $username = "root";
    $password = "";
    $database = "bolicho_alegrete";
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
    $host= "localhost";
    $username = "root";
    $password = "";
    $database = "bolicho_alegrete";
    $con = new mysqli($host,$username,$password,$database);
    if($con->connect_error){
        die("Falha na conexão" . $con->connect_error);
    }else{
        $sql = "SELECT fullname, email, password from user where email='$email'";
        $result = $con->query($sql);
        return $result;
    }
}