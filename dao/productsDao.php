<?php

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'products');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());

function getProductsBySearch($search){
    $host= "localhost";
    $username = "root";
    $password = "";
    $database = "products";
    $con = new mysqli($host,$username,$password,$database);
    $query = "SELECT * from products where name='%$search%' or description='%$search%'";
    $result = $con->query($query);
    return $result;
}

function getProducts(){
    $host= "localhost";
    $username = "root";
    $password = "";
    $database = "products";
    $con = new mysqli($host,$username,$password,$database);
    $query = "SELECT * FROM products";
    $result = $con->query($query);
    return $result;
}