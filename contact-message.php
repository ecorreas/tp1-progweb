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
    <!-- Fim do Bootstrap CSS -->
    <link rel="stylesheet" href="css/styles.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bolicho Alegrete</title>
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
          <a href="categories.html" class="nav-link px-2 link-dark"
            >Departamentos</a
          >
        </li>
        <li>
          <a href="contact.html" class="nav-link px-2 link-dark">Contato</a>
        </li>
        <li>
          <a href="products.html" class="nav-link px-2 link-dark">Produtos</a>
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
    </header>
    <!-- Fim do Navbar -->
    <!-- Form de contato -->
    <div class="container-sm">
      <form class="p-xl-5">
        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" class="form-control" id="name" />
        </div>
        <div class="form-group">
          <label for="inputEmail">Email</label>
          <input
            type="email"
            class="form-control"
            id="inputEmail"
            aria-describedby="emailHelp"
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
          />
          <small id="telHelp" class="form-text text-muted"
            >O seu numero será usado apenas para este atendimento, caso o email
            não seja respondido.</small
          >
        </div>
        <div class="form-group">
          <label for="subject">Assunto</label>
          <input type="text" class="form-control" id="subject" />
        </div>
        <div class="form-group">
          <label for="message">Mensagem</label>
          <textarea class="form-control" id="message" rows="3"></textarea>
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
