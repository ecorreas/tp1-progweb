<?php
   
    require "/dao/productsDao.php";

    function getProductsController(){
        $result = getProducts();
        return $result;
    }
?>