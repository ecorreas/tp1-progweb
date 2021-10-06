<?php

function getProductsBySearch($search){
    $host= "us-cdbr-east-04.cleardb.com";
    $username = "b426bb20ab8a68";
    $password = "9c8ab2fd";
    $database = "heroku_dbaba206ac6b0df";
    $con = new mysqli($host,$username,$password,$database);
    $sql = "SELECT * from product where name='%$search%' or description='%$search%'";
    $result = $con->query($sql);
    return $result;
}

function getProducts(){
    $host= "us-cdbr-east-04.cleardb.com";
    $username = "b426bb20ab8a68";
    $password = "9c8ab2fd";
    $database = "heroku_dbaba206ac6b0df";
    $con = new mysqli($host,$username,$password,$database);
    $sql = "SELECT name, description, price, image FROM product";
    $result = $con->query($sql);
    return $result;
}