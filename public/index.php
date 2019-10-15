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
      <div class="col-lg-6 text-l">
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

      <div class="col-lg-6 img-r"></div>
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
  </div>
</section>

<?php require('footer.php'); ?>