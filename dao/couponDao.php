<?php

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'products');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());

function getCoupons(){
    $host= "localhost";
    $username = "root";
    $password = "";
    $database = "coupons";
    $con = new mysqli($code,$expire_date);
    $query = "SELECT * FROM coupons";
    $result = $con->query($query);
    return $result;
}

function addCoupon($coupon){
    require_once('./dao/productsDao.php');

    $query = "INSERT INTO products (code, expiring_date) VALUES (?, ?)";

    $stmt = mysqli_prepare($dbc, $query);

    mysqli_stmt_bind_param($stmt, "ss", $name, $description, $img, $qtd, $price);

    mysqli_stmt_execute($stmt);

    $affected_rows = mysqli_stmt_affected_rows($stmt);

    if($affected_rows == 1){
        return TRUE;
        mysqli_stmt_close($stmt);
        
        mysqli_close($dbc);
    } else {
        echo 'Ocorreu um erro!<br/>';
        echo mysqli_error();
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);
    }
}