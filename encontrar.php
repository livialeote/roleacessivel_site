<?php
session_start();
require 'includes/conexao.php';
require 'includes/funcoes.php';         
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Como buscar meu rolê </title>
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
          <h2 class="section-heading text-uppercase">VÁRIAS MANEIRAS DE ENCONTRAR</h2>
          <h3 class="section-subheading text-muted"> o lugar acessível para você!</h3>
          <h3 class="section-subheading text-muted"> &nbsp </h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <a href="mapa.php"><span class="fa-stack fa-4x gira">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-map fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Localize</h4>
          <p class="text-muted">Abra o mapa e veja quais são os estabelecimentos acessíveis no lugar aonde você quer ir. Ou então, quais são os estabelecimentos acessíveis perto de você</p>
        </div>
          
        <div class="col-md-4">
          <a href="buscador.php"><span class="fa-stack fa-4x gira ">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-search fa-stack-1x fa-inverse"></i>
          </span></a>
            <h4 class="service-heading">Pesquise</h4>
          <p class="text-muted">Digite o nome do estabelecimento aonde você gostaria de ir e, com poucos clicks, descubra se ele é acessível para você!.</p>
        </div>
          
          
        <div class="col-md-4">
          <a href="filtro1.php"><span class="fa-stack fa-4x gira">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-filter fa-stack-1x fa-inverse"></i>
              </span></a>
            <a href="filtro1.php"><h4 class="service-heading">Filtre</h4></a>
          <p class="text-muted">Filtre o tipo de local a que deseja ir (bar, restaurante, hotel...), a cidade/estado dele e a qual público ele consegue atender</p>
        </div>
      </div>
    </div>
  </section>
 </body>
</html>

