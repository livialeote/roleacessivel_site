<?php
session_start();
$_SESSION["Op1"] = $_GET["Op1"];
require 'includes/conexao.php';
require 'includes/funcoes.php';         
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Aonde Quer ir? </title>
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
            <h1 class="section-subheading text-muted"> &nbsp </h1>
          <h2 class="section-heading text-uppercase">SELECIONE O LOCAL</h2>
          <h3 class="section-subheading text-muted"> &nbsp </h3>
        </div>
      </div>
      <div class="row text-center">
          <div class="col-md-2 "></div> 
        <div style="margin-left:10px;" class="col-md-1 ">
          <a href="filtro3.php?Op2=1"><span class="fa-stack fa-3x gira">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-beer fa-stack-1x fa-inverse"></i>
              </span></a>
            <a href="filtro3.php?Op2=1"><h4 class="service-heading">Bar</h4></a>
        </div>
        <div class="col-md-1">
          <a href="filtro3.php?Op2=2"><span class="fa-stack fa-3x gira ">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-coffee fa-stack-1x fa-inverse"></i>
              </span></a>
            <a href="filtro3.php?Op2=2"><h4 class="service-heading">Café</h4></a>
        </div>  
          <div class="col-md-1">
          <a href="filtro3.php?Op2=3"><span class="fa-stack fa-3x gira ">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-bed fa-stack-1x fa-inverse"></i>
              </span></a>
            <a href="filtro3.php?Op2=3"><h4 class="service-heading">Hotel</h4></a>
        </div>
          <div class="col-md-1">
          <a href="filtro3.php?Op2=4"><span class="fa-stack fa-3x gira ">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-puzzle-piece fa-stack-1x fa-inverse"></i>
              </span></a>
            <a href="filtro3.php?Op2=4"><h4 class="service-heading">Diversão</h4></a>
        </div>
          <div class="col-md-1 ">
          <a href="filtro3.php?Op2=5"><span class="fa-stack fa-3x gira ">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-hamburger fa-stack-1x fa-inverse"></i>
              </span></a>
            <a href="filtro3.php?Op2=5"><h4 class="service-heading">Lancheria</h4></a>
        </div>
          <div class="col-md-1 ">
          <a href="filtro3.php?Op2=6"><span class="fa-stack fa-3x gira ">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-utensils fa-stack-1x fa-inverse"></i>
              </span></a>
            <a href="filtro3.php?Op2=6"><h4 class="service-heading">Restaurante</h4></a>
        </div>
          <div class="col-md-1 ">
          <a href="filtro3.php?Op2=7"><span class="fa-stack fa-3x gira ">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
              </span></a>
            <a href="filtro3.php?Op2=7"><h4 class="service-heading"> Lojas comerciais</h4></a>
        </div>
        
      </div>
            
    </div>
  </section>
 </body>
</html>





