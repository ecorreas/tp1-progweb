<html>
<head>
<title>Adicionar Produto</title>
</head>
<body>

<?php
if(isset($_POST['submit'])){
    $data_missing = array();

    if(empty($_POST['name'])){
        $data_missing[] = 'Name';

    } else {
        $name = trim($_POST['name']);
    }

    if(empty($_POST['description'])){
        $data_missing[] = 'Description';

    } else {
        $description = trim($_POST['description']);
    }

    if(empty($_POST['img'])){
        $data_missing[] = 'Image';

    } else {
        $img = trim($_POST['img']);
    }

    if(empty($_POST['qtd'])){
        $data_missing[] = 'Quantidade';

    } else {
        $qtd = trim($_POST['qtd']);
    }

    if(empty($_POST['price'])){
        $data_missing[] = 'Price';

    } else {
        $price = trim($_POST['price']);
    }

    if(empty($data_missing)){
        require_once('./dao/productsDao.php');

        $query = "INSERT INTO products (name, description, img, qtd, price) VALUES (?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($dbc, $query);

        mysqli_stmt_bind_param($stmt, "sssid", $name, $description, $img, $qtd, $price);

        mysqli_stmt_execute($stmt);

        $affected_rows = mysqli_stmt_affected_rows($stmt);

        if($affected_rows == 1){
            echo 'Produto Adicionado!';

            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
        } else {
            echo 'Ocorreu um erro!<br/>';
            echo mysqli_error();
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }
    } else {
        echo 'You need to enter the following data<br />';

        foreach($data_missing as $missing){
            echo "$missing<br />";
        }
    }
}

?>

<form action="./productAdded.php" method="post">
 
<b>Adicionar novo produto</b>
 
<p>Nome:
<input type="text" name="name" size="100" value="" />
</p>
 
<p>Descrição:
<input type="text" name="description" size="400" value="" />
</p>
 
<p>Imagem:
<input type="text" name="img" size="400" value="" />
</p>

<p>Quantidade:
<input type="number" name="qtd" size="30" value="" />
</p>
 
<p>Preço:
<input type="number" name="price" size="30" value="" />
</p>
 
<p>
<input type="submit" name="submit" value="Send" />
</p>
</form>
</body>
</html>