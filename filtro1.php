<?php
session_start();
require 'includes/conexao.php';
require 'includes/funcoes.php';         
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Qual Sua Necessidade? </title>
        <!-- Meta tags Obrigatórias -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
        
        <link rel="stylesheet" type="text/css" href="estilo/padrao.css">
    </head>
    <body>

        <?php        
include 'includes/navegacao.php';
?>

        <div style="height:150px;">
        </div>
        <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
            <h3 class="section-subheading text-muted"> &nbsp </h3>
          <h2 class="section-heading text-uppercase">SELECIONE A NECESSIDADE</h2>
          <h3 class="section-subheading text-muted"> &nbsp </h3>
        </div>
      </div>
        <form>
      <div class="row text-center">
          <div class="col-md-4"></div>
        <div class="col-md-2">
          <a href="filtro2.php?Op1=1"><span class="fa-stack fa-5x gira">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-blind fa-stack-1x fa-inverse"></i>
              </span></a>
            <a href="filtro2.php?Op1=1"><h4 class="service-heading">Deficiente visual</h4></a>
        </div>
        <div class="col-md-2">
          <a href="filtro2.php?Op1=2"><span class="fa-stack fa-5x gira ">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-wheelchair fa-stack-1x fa-inverse"></i>
              </span></a>
            <a href="filtro2.php?Op1=2"><h4 class="service-heading">Cadeirante</h4></a>
        </div>     
      </div>
        </form>
    </div>
  </section>
 </body>
</html>



