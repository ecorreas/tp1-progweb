<html lang="pt-br">
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
    <title>Bem Vindo - Bolicho Alegrete</title>
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
          <a aria-selected="true" href="categories.php" class="nav-link active px-2 link-dark"
            >Departamentos</a
          >
        </li>
        <li><a aria-selected="false" href="promotions.php" class="nav-link px-2 link-dark">Promoções</a></li>
        <li>
          <a aria-selected="false" href="contact.php" class="nav-link px-2 link-dark">Contato</a>
        </li>
      </ul>
      <div class="col-md-3 text-end">
        <form class="col-6-auto col-lg mb-3 mb-lg-0 me-lg-3" action="searchController.php" method="POST">
          <input
            id="search"
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

        <a href="products-favorite.php">
          <span data_btn_favorite = "Meus favoritos">
            <button class="bi bi-heart-fill"></button>
          </span>
        </a>

        <a href="cart.php">
          <span data_btn_cart = "Carrinho">
            <button class="bi bi-cart-fill"></button> 
          </span>
        </a> 
      </div>
    </header>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button class="sl1" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button class="sl2" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="d-flex justify-content-center">
            <a href="/products/${product}">
              <img src="/assets/products/p1.png" class="d-block w-5" alt="...">
            </a>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-flex justify-content-center">
          <a href="/products/${product}">
            <img src="/assets/products/p1.png" class="d-block w-5" alt="...">
          </a>
          </div>
        </div>
        <div class="carousel-item">
          <div class="d-flex justify-content-center">
          <a href="/products/${product}">
            <img src="/assets/products/p1.png" class="d-block w-5" alt="...">
          </a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <hr>

    <?php require '/controller/productsController.php'; ?>

    <div class="container justify-content-center">
        <div class="row">
            <?php $result = getProductsController() ?>
            <?php while($row = $result->fetch_assoc()){   ?>
                <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo $row['image'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['name'] ?></h5>
                        <p class="card-text"><?php echo $row['description'] ?></p>
                        <a href="#" class="btn btn-primary">Comprar: <?php echo $row['price']?></a>
                    </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!-- Fim do Navbar -->

    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
    <!-- Fim do Bootstrap JS -->
  </body>
  <footer>
    &copy; 2021-<?php echo date("Y");?>
  </footer>
</html>
