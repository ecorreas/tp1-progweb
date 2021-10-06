<?php
   
    require "./dao/couponDao.php";

    function getCouponsController(){
        $result = getCoupons();
        return $result;
    }
?>