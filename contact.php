<!DOCTYPE html>
<html lang="en">
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
    <title>Contato - Bolicho Alegrete</title>
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

        <a href="products-favorite.php">
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
    <!-- Container -->
    <!-- Opcoes tipo de contato -->
    <?php require 'chat.php'; ?>
    <div class="container px-4 py-5">
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col mb-4">
          <div class="card mb-4 rounded-4 shadow-sm h-100">
            <img
              class="contact-icon p-4 mb-2 align-self-center"
              src="assets/icons/Whatsapp.svg"
              alt="Whatsapp"
            />
            <h2 class="">Whatsapp</h2>
            <a href="https://web.whatsapp.com/" class="stretched-link" target="_blank"></a>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card mb-4 rounded-4 shadow-sm h-100">
            <img
              class="contact-icon p-4 mb-2 align-self-center"
              src="assets/icons/Email.svg"
              alt="Mensagem"
            />
            <h2 class="">Mensagem</h2>
            <a href="contact-message.php" class="stretched-link"></a>
          </div>
        </div>
        
        <button id="btn_chat" onclick="openForm()">
          <div class="col mb-4">
            <div class="card mb-4 rounded-4 shadow-sm p-4 h-100">
              <img
                class="contact-icon p-4 mb-2 align-self-center"
                src="assets/icons/Chat.svg"
                alt="Chat"
              />
              <h2 class="">Chat</h2>
            </div>
          </div>
        </button> 
      </div>
    </div>
    <!-- Fim do Container -->
    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
    <!-- Fim do Bootstrap JS -->
  </body>
</html>
