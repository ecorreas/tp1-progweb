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
    <title>Categorias - Bolicho Alegrete</title>
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
        <li><a href="promotions.php" class="nav-link px-2 link-dark">Promoções</a></li>
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

        <a href="products-favorite.php" target="_blank">
          <span data_btn_favorite = "Meus favoritos">
            <button class="bi bi-heart-fill"></button>
          </span>
        </a>

        <a href="cart.html" target="_blank">
          <span data_btn_cart = "Carrinho">
            <button class="bi bi-cart-fill"></button> 
          </span>
        </a> 
      </div>
    </header>
    <!-- Fim do Navbar -->
    <!-- Container -->
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-2 offset-lg-1 mb-3">
          <h5>Mercado</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="/">Perfumaria</a></li>
            <li class="mb-2"><a href="/">Bebidas</a></li>
            <li class="mb-2"><a href="/">Massas</a></li>
            <li class="mb-2"><a href="/">Açougue</a></li>
            <li class="mb-2"><a href="/">Padaria</a></li>
            <li class="mb-2"><a href="/">Adega</a></li>
            <li class="mb-2"><a href="/">Enlatados</a></li>
            <li class="mb-2"><a href="/">Conservas</a></li>
            <li class="mb-2"><a href="/">Congelados</a></li>
            <li class="mb-2"><a href="/">Churrasco</a></li>
            <li class="mb-2"><a href="/">Laticínios</a></li>
            <li class="mb-2"><a href="/">Hortifrúti</a></li>
            <li class="mb-2"><a href="/">Doces</a></li>
            <li class="mb-2"><a href="/">Chocolates</a></li>
            <li class="mb-2"><a href="/">Grãos</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
          <h5>Eletronicos</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="/">Smartphones</a></li>
            <li class="mb-2"><a href="/">Computadores</a></li>
            <li class="mb-2"><a href="/">Notebooks</a></li>
            <li class="mb-2"><a href="/">Celulares</a></li>
            <li class="mb-2"><a href="/">Telefones</a></li>
            <li class="mb-2"><a href="/">Segurança</a></li>
            <li class="mb-2"><a href="/">Casa Inteligente</a></li>
            <li class="mb-2">
              <a href="/">Acessórios para Smartphones e Celulares</a>
            </li>
            <li class="mb-2"><a href="/">Acessórios para Computadores</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
          <h5>Eletrodomésticos</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="/">Geladeira</a></li>
            <li class="mb-2"><a href="/">Freezer</a></li>
            <li class="mb-2"><a href="/">Fogão</a></li>
            <li class="mb-2"><a href="/">Lava Roupas</a></li>
            <li class="mb-2"><a href="/">Lava Louças</a></li>
            <li class="mb-2"><a href="/">Ar Condicionados</a></li>
            <li class="mb-2"><a href="/">Micro-ondeas</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 mb-3">
          <h5>Móveis</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a href="/">Sala</a></li>
            <li class="mb-2"><a href="/">Cama</a></li>
            <li class="mb-2"><a href="/">Guarda-Roupas</a></li>
            <li class="mb-2"><a href="/">Cozinha</a></li>
            <li class="mb-2"><a href="/">Jantar</a></li>
            <li class="mb-2"><a href="/">Escritório</a></li>
          </ul>
        </div>
      </div>
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
