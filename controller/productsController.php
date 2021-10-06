<?php
    require '../dao/productsDao.php';

    $result = getProducts();
    
    while($row = $result->fetch_assoc()){
        echo json_decode($row);
    }
?>
