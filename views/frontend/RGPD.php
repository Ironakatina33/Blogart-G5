<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Art</title>
    <!-- Load CSS -->
    <link rel="stylesheet" href="src/css/style.css">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<?php
//load config
require_once 'config.php';

//load php scripts
?>


<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #840331;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="./src/images/Logo protos.png" class="img-fluid" alt="L'Après Burdigala"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/views/backend/dashboard.php">Admin</a>
        </li>
      </ul>
    </div>
    <!--right align-->
    <div class="d-flex">
      <!--<a class="btn btn-primary m-1" href="/views/backend/login.php" role="button">Accueil</a>-->
      <a class="btn btn-dark m-1" href="/views/backend/register.php" role="button">Article</a>
      <a class="btn btn-primary m-1" href="/views/backend/login.php" role="button">Mon compte</a>
    </div>
  </div>
</nav>

<body style="background-color:#840331">

<style>
  *{
    box-sizing:border-box;
    outline:1px solid limegreen;
  }
  </style>

<?php require_once 'header.php';
sql_connect();

print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>

</body>



<footer class="text-center text-lg-start text-muted" style="background-color:#FFFFFF">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4" style="color:black">
            <i class="fas fa-gem me-3" ></i>L'après Burdigala
          </h6>
          <img src="src/images/Logo proto.png" alt="BlogArt" width=65%>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4" style="color:black">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Plan du Site :
          </h6>
          <p>
            <a href="#!" class="text-reset">Accueil</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Articles</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Contacts</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Admin</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" style="color:black">
          <!-- Links -->
          <p>
            <a href="#!" class="text-reset">Mention Légal</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Politique de Confidentialité</a>
          </p>
          <p>
            <a href="#!" class="text-reset">CGVU</a>
          </p>
          <p>
            <a href="#!" class="text-reset">CGS Éditeurs</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Gestion des cookies</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4" style="color:black">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contacts</h6>
          <p><i class="fas fa-home me-3"></i> Bordeaux, 33000, Fr</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            driss.chiari-noblet@mmibordeaux.com
          </p>
          <p><i class="fas fa-phone me-3"></i> 07.69.34.34.03</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(255, 255, 255, 1); color:black" >
    © 2023 L’APRES BURDIGALA:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">LAPRESBURDIGALA.com</a>
  </div>
  <!-- Copyright -->
</footer>

<!-- Load JS scripts -->