<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Art</title>
    <!-- Load CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/css/style.css">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

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
    outline:0px solid limegreen;
  }
  </style>