<?php
    $base= base_url('base');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tarea 3y4</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= $base; ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= $base; ?>/css/heroic-features.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>
  <br>
  <h2 class='text-center'>Dealer ABC</h2>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Tarea 3y4</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('main/inicio') ?>">Inicio
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('main/new_vehiculo') ?>">Agregar Vehiculos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('main/new_cliente') ?>">Agregar Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('main/vender_vehiculo') ?>">Vender Vehiculos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('main/reportes') ?>">Reportes</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownEditar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Ver/Editar
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownEditar">
              <a class="dropdown-item" href="<?= base_url('main/edit_vehiculos') ?>">Vehiculos</a>
              <a class="dropdown-item" href="<?= base_url('main/edit_usuarios') ?>">Usuario</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">