<?php define('BASE_URL','http://localhost/proyectoFinal/'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="/assets/css/normalize.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/estilos.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/tarjeta.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/bio.css">
   
    
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">
      <div class="navbar-collapse collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>pages/contacto.php">Contactanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>pages/deportivo.php">Deportivo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>pages/urbano.php">Urbano</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>pages/descapotable.php">Descapotables</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>pages/furgoneta.php">Furgonetas</a>
          </li>
        </ul>
        <form >
             <h2 class="text-light">Automoviles REB</h2>
        </form>
      </div>
    </div>
    </nav>
    
          
    </header>


    <main>