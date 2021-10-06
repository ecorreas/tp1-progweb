<?php
    require '../dao/productsDao.php';

    $search = $POST['search'];
    $result = getProductsBySearch($search);

    if($result->num_rows == 0){
        echo ('Nenhum resultado para a pesquisa.');
    }
    else{
        while($data = $result->fetch_assoc()){
            echo ($data);
        }
    }

