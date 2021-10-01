<?php

function getProductsBySearch($search){
    $host= "localhost";
    $username = "root";
    $password = "";
    $database = "bolicho_alegrete";
    $con = new mysqli($host,$username,$password,$database);
    $sql = "SELECT * from product where name='%$search%' or description='%$search%'";
    $result = $con->query($sql);
    return $result;
}

function getProducts(){
    $host= "localhost";
    $username = "root";
    $password = "";
    $database = "bolicho_alegrete";
    $con = new mysqli($host,$username,$password,$database);
    $sql = "SELECT name, description, price, img FROM product";
    $result = $con->query($sql);
    return $result;
}