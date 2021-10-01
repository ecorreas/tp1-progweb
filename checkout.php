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
          <a href="categories.html" class="nav-link px-2 link-dark"
            >Departamentos</a
          >
        </li>
<<<<<<< HEAD
        <li><a href="#" class="nav-link px-2 link-dark">Promoções</a></li>
        <li>
          <a href="contact.html" class="nav-link px-2 link-dark">Contato</a>
        </li>
=======
        <li>
          <a href="contact.html" class="nav-link px-2 link-dark">Contato</a>
        </li>
        <li>
          <a href="products.html" class="nav-link px-2 link-dark">Produtos</a>
        </li>
>>>>>>> 0840639c8f725e91bab78a1d17119529aca05add
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
    <div class="container">
      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Produtos no Carrinho</span>
            <span class="badge badge-secondary badge-pill">1</span>
          </h4>
          <ul class="list-group mb-3">
            <li
              class="
                list-group-item
                d-flex
                justify-content-between
                lh-condensed
              "
            >
              <div>
                <h6 class="my-0">Samsung Galaxy A32</h6>
                <small class="text-muted"
                  >Quantidade:
                  <input type="text" class="form-control" placeholder="1" />
                </small>
              </div>
              <span class="text-muted">R$ 1.800,00</span>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Código Promocional</h6>
                <small>50PROMO</small>
              </div>
              <span class="text-success">-R$50</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total</span>
              <strong>R$1.750,00</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Código" />
              <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Entrar</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nome</label>
                <input
                  type="text"
                  class="form-control"
                  id="firstName"
                  placeholder=""
                  value=""
                  required=""
                />
                <div class="invalid-feedback">
                  Um nome válido é obrigatório.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Sobrenome</label>
                <input
                  type="text"
                  class="form-control"
                  id="lastName"
                  placeholder=""
                  value=""
                  required=""
                />
                <div class="invalid-feedback">
                  Um sobrenome válido é obrigatório.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Endereço</label>
              <input
                type="text"
                class="form-control"
                id="address"
                placeholder="Rua do Conde, 042"
                required=""
              />
              <div class="invalid-feedback">
                Preencha o seu endereço de entrega.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="state">Estado</label>
                <select
                  class="custom-select d-block w-100"
                  id="state"
                  required=""
                >
                  <option value="">Escolha...</option>
                  <option>Rio Grande do Sul</option>
                </select>
                <div class="invalid-feedback">Selecione um estado valido.</div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="city">Cidade</label>
                <select
                  class="custom-select d-block w-100"
                  id="city"
                  required=""
                >
                  <option value="">Escolha...</option>
                  <option>Alegrete</option>
                </select>
                <div class="invalid-feedback">Selecione uma cidade valida.</div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">CEP</label>
                <input
                  type="text"
                  class="form-control"
                  id="zip"
                  placeholder=""
                  required=""
                />
                <div class="invalid-feedback">CEP é obrigatório.</div>
              </div>
            </div>
            <hr class="mb-4" />
            <div class="custom-control custom-checkbox">
              <input
                type="checkbox"
                class="custom-control-input"
                id="same-address"
              />
              <label class="custom-control-label" for="same-address"
                >Endereço de entrega é o mesmo de cobrança.</label
              >
            </div>
            <div class="custom-control custom-checkbox">
              <input
                type="checkbox"
                class="custom-control-input"
                id="save-info"
              />
              <label class="custom-control-label" for="save-info"
                >Salvar para próximas compras.</label
              >
            </div>
            <hr class="mb-4" />

            <h4 class="mb-3">Pagamento</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input
                  id="credit"
                  name="paymentMethod"
                  type="radio"
                  class="custom-control-input"
                  checked=""
                  required=""
                />
                <label class="custom-control-label" for="credit"
                  >Cartão de Crédito</label
                >
              </div>
              <div class="custom-control custom-radio">
                <input
                  id="debit"
                  name="paymentMethod"
                  type="radio"
                  class="custom-control-input"
                  required=""
                />
                <label class="custom-control-label" for="debit"
                  >Cartão Débito</label
                >
              </div>
              <div class="custom-control custom-radio">
                <input
                  id="boleto"
                  name="paymentMethod"
                  type="radio"
                  class="custom-control-input"
                  required=""
                />
                <label class="custom-control-label" for="paypal">Boleto</label>
              </div>
              <div class="custom-control custom-radio">
                <input
                  id="PIX"
                  name="paymentMethod"
                  type="radio"
                  class="custom-control-input"
                  required=""
                />
                <label class="custom-control-label" for="paypal">PIX</label>
              </div>
              <div class="custom-control custom-radio">
                <input
                  id="paypal"
                  name="paymentMethod"
                  type="radio"
                  class="custom-control-input"
                  required=""
                />
                <label class="custom-control-label" for="paypal">PayPal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Nome no Cartão</label>
                <input
                  type="text"
                  class="form-control"
                  id="cc-name"
                  placeholder=""
                  required=""
                />
                <small class="text-muted"
                  >Nome completo exatamento com está no cartão.</small
                >
                <div class="invalid-feedback">Nome no Cartão é obrigatório</div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Numero do Cartão</label>
                <input
                  type="text"
                  class="form-control"
                  id="cc-number"
                  placeholder=""
                  required=""
                />
                <div class="invalid-feedback">
                  Numero do Cartão é obrigatório
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Válidade</label>
                <input
                  type="text"
                  class="form-control"
                  id="cc-expiration"
                  placeholder=""
                  required=""
                />
                <div class="invalid-feedback">Válidade é obrigatório</div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-cvv">CVV</label>
                <input
                  type="text"
                  class="form-control"
                  id="cc-cvv"
                  placeholder=""
                  required=""
                />
                <div class="invalid-feedback">
                  Numero de Segurança é obrigatório
                </div>
              </div>
            </div>
            <hr class="mb-4" />
            <button class="btn btn-primary btn-lg btn-block" type="submit">
              Continuar
            </button>
          </form>
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
