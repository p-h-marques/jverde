<?php require('header.php'); ?>

<section class="products">
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
  </div>
</section>

<?php require('footer.php'); ?>