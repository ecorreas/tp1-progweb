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
        <img src="assets/Logo.svg" alt="Bolicho Alegrete"/>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li>
          <a href="categories.php" class="nav-link px-2 link-dark">Departamentos</a>
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

        <a href="products-favorite.php" >
          <span data_btn_favorite = "Meus favoritos">
            <button class="bi bi-heart-fill"></button>
          </span>
        </a>

        <a href="cart.php" >
          <span data_btn_cart = "Carrinho">
            <button class="bi bi-cart-fill"></button> 
          </span>
        </a> 
      </div>
    </header>
    <!-- Fim do Navbar -->
    <!-- Form de contato -->
    <div class="container-sm">
      <form class="p-xl-5" action="./controller/contatoController.php" method="POST">
        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" class="form-control" id="name" maxlength="100"/>
        </div>
        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input
            type="email"
            class="form-control"
            id="inputEmail"
            aria-describedby="emailHelp"
            maxlength="50"
          />
          <small id="emailHelp" class="form-text text-muted"
            >Não iremos compartilhar o seu endereço de email.</small
          >
        </div>
        <div class="form-group">
          <label for="phone">Telefone</label>
          <input
            type="tel"
            class="form-control"
            id="phone"
            pattern="/^\([1-9]{2}\)[0-9]{4,5}-[0-9]{4}$/"
            aria-describedby="telHelp"
            maxlength="13"
          />
          <small id="telHelp" class="form-text text-muted"
            >O seu numero será usado apenas para este atendimento, caso o email
            não seja respondido.</small
          >
        </div>
        <div class="form-group">
          <label for="subject">Assunto</label>
          <input type="text" class="form-control" id="subject" maxlength="100"/>
        </div>
        <div class="form-group">
          <label for="message">Mensagem</label>
          <textarea class="form-control" id="message" rows="3" maxlength="300"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Enviar</button>
      </form>
    </div>
    <!-- Fim do Form de contato -->
    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"
    ></script>
    <!-- Fim do Bootstrap JS -->
  </body>
</html>
