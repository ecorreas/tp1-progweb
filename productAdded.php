<html>
  <head>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"/>
    <!-- Fim do Bootstrap CSS -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produtos - Bolicho Alegrete</title>
  </head>
<body>
    <!-- Navbar -->
    <header
      class="
        d-flex
        flex-wrap
        align-items-center
        justify-content-center justify-content-md-between
        py-3
        px-4
        mb-4
        border-bottom
      "
    >
      <a
        href="/"
        class="
          d-flex
          align-items-center
          col-md-3
          mb-2 mb-md-0
          text-dark text-decoration-none
        "
      >
        <img src="assets/Logo.svg" alt="Bolicho Alegrete" />
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li>
          <a href="categories.php" class="nav-link px-2 link-dark"
            >Departamentos</a
          >
        </li>
      <li><a href="#" class="nav-link px-2 link-dark">Promoções</a></li>
        <li>
          <a href="contact.php" class="nav-link px-2 link-dark">Contato</a>
        </li>
      </ul>

      <div class="col-md-3 text-end">
        <form class="col-6-auto col-lg mb-3 mb-lg-0 me-lg-3">
          <input
            type="search"
            class="form-control"
            placeholder="Pesquisar..."
            aria-label="Pesquisar"
          />
        </form>
      </div>

      <div class="social-media">
        <a href="login.php">
          <span data_btn_login = "Login">
            <button class="bi bi-person-circle"></button>
          </span>
        </a>

        <a href="https://web.whatsapp.com/" target="_blank">
        <span data_btn_wpp = "Whatsapp">
          <button class="bi bi-whatsapp"></button>
        </span>
        </a>

        <a href="products-favorite.php" >
          <span data_btn_favorite = "Meus favoritos">
            <button class="bi bi-heart-fill"></button>
          </span>
        </a>

        <a href="cart.html" >
          <span data_btn_cart = "Carrinho">
            <button class="bi bi-cart-fill"></button> 
          </span>
        </a> 
      </div>
    </header>
    <!-- Fim do Navbar -->

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
            echo '<div class="px-4 pt-5 my-5 text-center border-bottom"><h4 class="fw-bold"> Produto adicionado! </h4></div>';

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

<div class="container">
<form action="./productAdded.php" method="post">
 
<b>Adicionar novo produto</b>
 
<div class="mb-3">
<label for="name" class="form-label">Nome</label>
<input type="text" class="form-control" name="name" id="name"/>
</div>
 
<div class="mb-3">
<label for="description" class="form-label">Descrição</label>
<input type="text" class="form-control" name="description" id="description"/>
</div>
 
<div class="mb-3">
<label for="img" class="form-label">Imagem</label>
<input type="text" class="form-control" name="img" id="img"/>
</div>

<div class="mb-3">
<label for="qtd" class="form-label">Quantidade</label>
<input type="number" class="form-control" name="qtd" id="qtd"/>
</div>
 
<div class="mb-3">
<label for="price" class="form-label">Preço</label>
<div class="input-group">
<span class="input-group-text" id="moeda">R$</span>
<input type="number"class="form-control"  name="price" id="price" aria-label="Preço" aria-describedby="moeda"/>
</div>
</div>
 
<p>
<button class="btn btn-primary" type="submit" name="submit" value="Send">Adicionar</button>
</p>
</form>
</div>

    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
    <!-- Fim do Bootstrap JS -->
</body>
</html>