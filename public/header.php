<?php require('includes/content.php');?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JVerde - Tapetes personalizados, capachos, Clean Kaps e mais!</title>

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- SEO -->
    <meta name="description" content="Descrição do site aqui!">
    <meta property="og:description" content="Descrição do site aqui!">
</head>

<body>
  <nav class="navbar fixed-top navbar-expand-lg" id="navbar">
    <div class="container">
      <a class="navbar-brand mr-auto" href="#" id="logoLink">
        <img src="assets/icons/hero-logo.svg" class="hero-logo">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <img src="assets/icons/menu.svg" class="menu-icon">
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#" id="productsLink">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="benefitsLink">Vantagens</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" id="distributorLink">Distribuidora</a>
          </li>
          <li class="nav-item">
            <a class="nav-link hero-button" href="#" id="contactLink">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div class="container hero-container">
      <div class="row justify-content-center hero">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 my-auto order-2 order-lg-1 text-center text-lg-left">
          <h1 class="mt-5 mt-lg-0"> 
            <?= $heroTitle; ?> 
          </h1>
          <p class="color-light"> <?= $heroDescription; ?> </p>
          <a href="#" class="hero-button" id="contactLink"> <?= $heroButton; ?> </a>
        </div>
        <div class="col-lg-6 m-auto hero-points order-1 order-lg-2">
          <div class="hero-images mx-auto my-lg-0">
            <img src="assets/img/principal1.jpg" class="hero-image-1">
            <img src="assets/img/principal2.jpg" class="hero-image-2">
            <img src="assets/img/principal3.jpg" class="hero-image-3">
          </img>
        </div>
      </div>
    </div>
  </header>

