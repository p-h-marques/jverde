<?php require('header.php'); ?>

<!-- <?= $benefitsTitle; ?> -->

<section class="products" id="products">
  <div class="container">
    <div class="row justify-content-around products-intro">
      <div class="col-md-6 col-lg-4 col-xl-4 text-center">
        <h2 class="">Conheça nossos</h2> 
        <h2 class="highlight mt-2">produtos!</h2>
      </div>
      
      <div class="col-md-6 col-lg-7 col-xl-6 mt-4 mt-md-0">
        <p class="products-description text-center text-md-left">
          <?= $productsDescription; ?> 
        </p>
      </div>
    </div>

    <div class="row no-gutters products-principal">
      <div class="col-lg-6 text-l order-2 order-lg-1">
        <div class="d-flex flex-column h-100 justify-content-end">
          <div>
            <h3>
              <?= $productsCapachosTitle; ?>
            </h3>
            <p>
              <?= $productsCapachosDescription; ?>
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-6 img-r order-1 order-lg-2"></div>
    </div>

    <div class="row no-gutters products-principal">
      <div class="col-lg-6 img-l"></div>

      <div class="col-lg-6 text-r">
        <div class="d-flex flex-column h-100 justify-content-end">
          <div>
            <h3>
              <?= $productsCleanKapTitle; ?>
            </h3>
            <p>
              <?= $productsCleanKapDescription; ?>
            </p>
          </div>
        </div>
      </div>      
    </div>

    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <h3 >Outros Produtos:</h3>
      </div>
    </div>

    <div class="row products-others justify-content-center">
      <div class="col-sm-6 col-md-4 col-lg text-center product">
        <div class="img-product img1"></div>
        <div class="text-product"><span><?= $productsOthers1; ?></span></div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg mt-4 mt-sm-0 text-center product">
        <div class="img-product img2"></div>
        <div class="text-product"><span><?= $productsOthers2; ?></span></div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg mt-4 mt-md-0 text-center product">
        <div class="img-product img3"></div>
        <div class="text-product"><span><?= $productsOthers3; ?></span></div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg mt-4 mt-lg-0 text-center product">
        <div class="img-product img4"></div>
        <div class="text-product"><span><?= $productsOthers4; ?></span></div>
      </div>

      <div class="col-sm-6 col-md-4 col-lg mt-4 mt-lg-0 text-center product">
        <div class="img-product img5"></div>
        <div class="text-product"><span><?= $productsOthers5; ?></span></div>
      </div>
    </div>
  </div>
</section>

<section class="benefits" id="benefits">
  <div class="container">
    <div class="row justify-content-center mx-0">
      <div class="col-lg-10 col-12 benefits-title">
        
        <div class="row no-gutters justify-content-center">
          <div class="col-md-auto col-12 text-center text-md-left">
            <img src="assets/icons/benefits-title.svg" alt="Nossas vantagens">
          </div>
          <div class="col-md col-12 align-self-center text-center text-md-left">
            <h2> <?= $benefitsTitle; ?> </h2>
          </div>
        </div>

      </div>
    </div>

     <div class="benefits-items">

      <div class="row">
        <div class="col-lg-6">
          <div class="row no-gutters h-100">
            <div class="col-sm-auto col-12 text-center text-sm-left align-self-center">
              <img src="assets/icons/benefits-limpeza.svg" alt="Limpeza">
            </div>
            <div class="col-sm col-12 align-self-center text-center text-sm-left">
              <h3> <?= $benefitsLimpezaTitle; ?> </h3>
              <p> <?= $benefitsLimpezaDescription; ?> </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-lg-0 mt-5">
          <div class="row no-gutters h-100">
            <div class="col-sm-auto col-12 text-center text-sm-left align-self-center">
              <img src="assets/icons/benefits-estetica.svg" alt="Estética">
            </div>
            <div class="col-sm col-12 align-self-center text-center text-sm-left">
              <h3> <?= $benefitsEsteticaTitle; ?> </h3>
              <p> <?= $benefitsEsteticaDescription; ?> </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-5">
          <div class="row no-gutters h-100">
            <div class="col-sm-auto col-12 text-center text-sm-left align-self-center">
              <img src="assets/icons/benefits-seguranca.svg" alt="Segurança">
            </div>
            <div class="col-sm col-12 align-self-center text-center text-sm-left">
              <h3> <?= $benefitsSegurancaTitle; ?> </h3>
              <p> <?= $benefitsSegurancaDescription; ?> </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6  mt-5">
          <div class="row no-gutters h-100">
            <div class="col-sm-auto col-12 text-center text-sm-left align-self-center">
              <img src="assets/icons/benefits-marketing.svg" alt="Marketing">
            </div>
            <div class="col-sm col-12 align-self-center text-center text-sm-left">
              <h3> <?= $benefitsMarketingTitle; ?> </h3>
              <p> <?= $benefitsMarketingDescription; ?> </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="distributor" id="distributor">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-5 col-md-10 col-sm-10 col-12 mb-4 mb-lg-0 text-center text-lg-left">
        <h2> <?= $distributorTitle; ?> </h2>
        <p> <?= $distributorDescription; ?> </p>
      </div>
      <div class="distributor-img col-lg-7 col-md-10 col-11">
        <img src="assets/img/kapazi.jpg" alt="Distribuidora Kapazi, líder de mercado em tapetes e capachos do Brasil!">
      </div>
    </div>
  </div>
</section>

<section class="contact" id="contact">
  <div class="container">
    <div class="row contact-description justify-content-center justify-content-lg-start">
      <div class="col-12 col-sm-8 col-lg-5">
        <h2> <?= $contactTitle; ?> </h2>
        <p> <?= $contactDescription; ?> </p>
      </div>
    </div>

    <div class="row contact-form justify-content-center justify-content-lg-start">
      <div class="offset-lg-5 col-lg-6 col-sm-10 contact-form-box">

        <form>
          <div class="form-group">
            <label for="contactName">Nome: *</label>
            <input type="text" class="form-control" id="contactName"
            placeholder="Digite aqui seu nome">
          </div>

          <div class="form-group">
            <label for="contactPhone">Telefone: *</label>
            <input type="text" class="form-control" id="contactPhone"
            placeholder="Use o formato (12) 99999-9999">
          </div>

          <div class="form-group">
            <label for="contactEmail">Email:</label>
            <input type="email" class="form-control" id="contactEmail"
            placeholder="Digite aqui seu melhor email">
          </div>

          <div class="form-group">
            <label for="contactCity">Cidade: *</label>
            <input type="text" class="form-control" id="contactCity"
            placeholder="Digite aqui sua cidade e seu estado">
          </div>

          <div class="form-group">
            <label for="contactProduct">Produtos de interesse e suas medidas:</label>
            <textarea class="form-control" id="contactProduct" rows="5"
            placeholder="Caso já tenha alguma demanda em mente, digite aqui o produto sobre o qual quer saber mais, e suas medidas, para que possamos já direcionar para você o melhor atendimento!"></textarea>
          </div>

          <div class="form-group">
            <label for="contactMessage">Mais informações:</label>
            <textarea class="form-control" id="contactMessage" rows="3"
            placeholder="Caso julgue necessário nos passar mais alguma informação relevante, aqui é o momento!"></textarea>
          </div>

          <div class="form-group">
            <label class="required-text">*Campos obrigatórios.</label>
          </div>

          <div class="row justify-content-between align-items-center">
            <div class="col-auto">
              <a href="#" id="contactClearFields">Apagar campos</a>
            </div>
            <div class="col-auto">              
              <button type="submit" class="btn">Enviar!</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</section>

<?php require('footer.php'); ?>