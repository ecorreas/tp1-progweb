<html lang="pt-br">
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
    <title>Document</title>
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
        <a class="btn btn-primary" href="checkout.html" role="button">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-cart"
            viewBox="0 0 16 16"
          >
            <path
              d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"
            ></path>
          </svg>
        </a>
      </div>
    </header>
    <!-- Fim do Navbar -->
    <!-- Container -->
    <div class="container-sm mt-2">
      <div class="row">
        <div class="col-lg-3 order-1 order-lg-1 mb-5 mb-lg-0">
          <div class="border p-4 mb-4 rounded">
            <h3 class="mb-3 h6 text-black d-block">Categorias</h3>
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <a href="#" class="d-flex"
                  ><span>Smartphones</span>
                  <span class="text-black ml-auto">(400)</span></a
                >
              </li>
              <li class="mb-1">
                <a href="#" class="d-flex"
                  ><span>Celulares</span>
                  <span class="text-black ml-auto">(45)</span></a
                >
              </li>
            </ul>
          </div>
          <div class="border p-4 mb-4 rounded">
            <div class="mb-4">
              <label for="priceRange" class="form-label">
                <h3 class="mb-3 h6 text-uppercase text-black d-block">
                  Por Preço
                </h3></label
              >
              <input type="range" class="form-range" id="priceRange" />
            </div>
            <div class="mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">
                Caracteristicas
              </h3>
              <label for="s_sm" class="d-flex">
                <input type="checkbox" id="s_sm" class="mr-2 mt-1" />
                <span class="text-black">USB-C (4)</span>
              </label>
              <label for="s_md" class="d-flex">
                <input type="checkbox" id="s_md" class="mr-2 mt-1" />
                <span class="text-black">Carregamento Rápido (38)</span>
              </label>
              <label for="s_lg" class="d-flex">
                <input type="checkbox" id="s_lg" class="mr-2 mt-1" />
                <span class="text-black">6 polegadas (45)</span>
              </label>
            </div>
          </div>
        </div>
        <!-- Lista de Produtos -->
        <div class="d-flex order-2 justify-content-center col">
          <div class="col-md-10">
            <div class="row p-2 bg-white border rounded mb-3">
              <div class="col-md-3 mt-1">
                <img
                  class="img-thumbnail product-image"
                  src="assets/products/a32.png"
                />
              </div>
              <div class="col-md-6 mt-1">
                <h2>Samsung Galaxy A32</h2>
                <p class="mb-auto">
                  O Galaxy A32 5G é bonito e fica ainda melhor em suas mãos. O
                  design contínuo apresenta tons com brilho sutil e estrutura de
                  câmeras traseiras minimalista para proporcionar estilo
                  icônico.<br /><br />
                </p>
              </div>
              <div
                class="
                  align-items-center align-content-center
                  col-md-3
                  border-left
                  mt-1
                "
              >
                <div class="d-flex flex-row align-items-center">
                  <h4 class="mr-1">R$ 1.800,00</h4>
                </div>
                <h6 class="text-success">Frete Grátis</h6>
                <div class="d-flex flex-column mt-4">
                  <button class="btn btn-primary btn-sm" type="button">
                    Adicionar ao Carrinho
                  </button>
                  <button
                    class="btn btn-outline-primary btn-sm mt-2"
                    type="button"
                  >
                    Adicionar à lista de desejos
                  </button>
                </div>
              </div>
            </div>
            <div class="row p-2 bg-white border rounded mb-3">
              <div class="col-md-3 mt-1">
                <img
                  class="img-thumbnail product-image"
                  src="assets/products/a32.png"
                  src="https://assets-global.website-files.com/5cb49305f78568899df7dc13/5fa3dc75d464fe2caa320d5f_iphone-12-pro-max-gold-min.png"/>
                />
              </div>
              <div class="col-md-6 mt-1">
                <h2>Samsung iPhone 12 Pro Max 256GB</h2>
                <p class="mb-auto">
                  O Galaxy A32 5G é bonito e fica ainda melhor em suas mãos. O
                  design contínuo apresenta tons com brilho sutil e estrutura de
                  câmeras traseiras minimalista para proporcionar estilo
                  icônico.<br /><br />
                  src="https://assets-global.website-files.com/5cb49305f78568899df7dc13/5fa3dc75d464fe2caa320d5f_iphone-12-pro-max-gold-min.png"
                />
              </div>
              <div class="col-md-6 mt-1">
                <h2>Samsung iPhone 12 Pro Max 256GB</h2>
                <p class="mb-auto">
                  O iPhone 12 Pro Max 256GB é bonito e fica ainda melhor em suas
                  mãos. O design contínuo apresenta tons com brilho sutil e
                  estrutura de câmeras traseiras minimalista para proporcionar
                  estilo icônico.<br /><br />
                </p>
              </div>
              <div
                class="
                  align-items-center align-content-center
                  col-md-3
                  border-left
                  mt-1
                "
              >
                <div class="d-flex flex-row align-items-center">
                  <h4 class="mr-1">R$ 1.800,00</h4>
                  <h4 class="mr-1">R$ 4.200,00</h4>
                  <h4 class="mr-1">R$ 4.200,00</h4>
                </div>
                <h6 class="text-success">Frete Grátis</h6>
                <div class="d-flex flex-column mt-4">
                  <button class="btn btn-primary btn-sm" type="button">
                    Adicionar ao Carrinho
                  </button>
                  <button
                    class="btn btn-outline-primary btn-sm mt-2"
                    type="button"
                  >
                    Adicionar à lista de desejos
                  </button>
                </div>
              </div>
            </div>
            <div class="row p-2 bg-white border rounded mb-3">
              <div class="col-md-3 mt-1">
                <img
                  class="img-thumbnail product-image"
                  src="assets/products/a32.png"
                  src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.Ce8x9G6AZkURWdDhzKM-aQHaHa%26pid%3DApi&f=1">
              </div>
              <div class="col-md-6 mt-1">
                <h2>Xiaomi Redmi Note 9 Pro Max Dual 64 GB</h2>
                <p class="mb-auto">
                  O Galaxy A32 5G é bonito e fica ainda melhor em suas mãos. O
                  design contínuo apresenta tons com brilho sutil e estrutura de
                  câmeras traseiras minimalista para proporcionar estilo
                  src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse4.mm.bing.net%2Fth%3Fid%3DOIP.Ce8x9G6AZkURWdDhzKM-aQHaHa%26pid%3DApi&f=1"
                />
              </div>
              <div class="col-md-6 mt-1">
                <h2>Xiaomi Redmi Note 9 Pro Max Dual 64 GB</h2>
                <p class="mb-auto">
                  O Redmi Note 9 Pro é bonito e fica ainda melhor em suas mãos.
                  O design contínuo apresenta tons com brilho sutil e estrutura
                  de câmeras traseiras minimalista para proporcionar estilo
                  O Redmi Note 9 Pro é bonito e fica ainda melhor em suas mãos.
                  O design contínuo apresenta tons com brilho sutil e estrutura
                  de câmeras traseiras minimalista para proporcionar estilo
                  icônico.<br /><br />
                </p>
              </div>
              <div
                class="
                  align-items-center align-content-center
                  col-md-3
                  border-left
                  mt-1
                "
              >
                <div class="d-flex flex-row align-items-center">
                  <h4 class="mr-1">R$ 1.800,00</h4>
                  <h4 class="mr-1">R$ 1.795,00</h4>
                  <h4 class="mr-1">R$ 1.795,00</h4>
                </div>
                <h6 class="text-success">Frete Grátis</h6>
                <div class="d-flex flex-column mt-4">
                  <button class="btn btn-primary btn-sm" type="button">
                    Adicionar ao Carrinho
                  </button>
                  <button
                    class="btn btn-outline-primary btn-sm mt-2"
                    type="button"
                  >
                    Adicionar à lista de desejos
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Fim da Lista de Produtos -->
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
