<?php
session_start();
$_SESSION["Cidade"] = $_POST["Cidade"];
$idNecessidade = $_SESSION["Op1"];
$idTipoEstabelecimento = $_SESSION["Op2"];
$idCidade = $_SESSION["Cidade"];

require 'includes/conexao.php';
require 'includes/funcoes.php';
?>﻿
<!DOCTYPE html>
<html>
    <head>
<title>Ranking Acessível</title>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo/padrao.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body class="w3-content w3-light-grey" >
<?php        
include 'includes/navegacao.php';
?>

<!-- Header -->
  <header id="portfolio">
    <div class="w3-container">
        <div style="height:80px;"></div>
    <h1><b>Ranking de Acessibilidade</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right w3-hide-small">Filtro:</span> 
      <!--<button class="w3-button w3-black">ALL</button>-->
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-universal-access w3-margin-right"></i> <?php getNecessidade($link, $idNecessidade);?></button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i><?php getTipoEstabelecimento($link, $idTipoEstabelecimento);?></button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-building w3-margin-right"></i><?php getCidade($idCidade);?></button>
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="i4.jpg" alt="Norway" style="width:100%; box-shadow:0.5px 0.5px 3px grey; border-radius:5px;" class="w3-hover-opacity">
      <div class="w3-container w3-white" style="box-shadow:0.5px 0.5px 3px grey; border-radius:5px;">
          <p><b>POSIÇÃO 1</b></p>
          <p><b>Loja da livinha</b></p>
        <p>Nota mil no brasil</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="i4.jpg" alt="Norway" style="width:100%; box-shadow:0.5px 0.5px 3px grey; border-radius:5px;" class="w3-hover-opacity">
      <div class="w3-container w3-white" style="box-shadow:0.5px 0.5px 3px grey; border-radius:5px;">
          
          <p><b>POSIÇÃO 1</b></p>
          <p><b>Loja da livinha</b></p>
        <p>Nota mil no brasil</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="i4.jpg" alt="Norway" style="width:100%; box-shadow:0.5px 0.5px 3px grey; border-radius:5px;" class="w3-hover-opacity">
      <div class="w3-container w3-white" style="box-shadow:0.5px 0.5px 3px grey; border-radius:5px;">
          
          <p><b>POSIÇÃO 1</b></p>
          <p><b>Loja da livinha</b></p>
        <p>Nota mil no brasil</p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid
  <div class="w3-row-padding">
      <div class="w3-third w3-container w3-margin-bottom">
      <img src="i4.jpg" alt="Norway" style="width:100%; box-shadow:0.5px 0.5px 3px grey; border-radius:5px;" class="w3-hover-opacity">
      <div class="w3-container w3-white" style="box-shadow:0.5px 0.5px 3px grey; border-radius:5px;">
          
          <p><b>POSIÇÃO 1</b></p>
          <p><b>Loja da livinha</b></p>
        <p>Nota mil no brasil</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="i2.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="i4.jpg" alt="Norway" style="width:100%; box-shadow:0.5px 0.5px 3px grey; border-radius:5px;" class="w3-hover-opacity">
      <div class="w3-container w3-white" style="box-shadow:0.5px 0.5px 3px grey; border-radius:5px;">
          
          <p><b>POSIÇÃO 1</b></p>
          <p><b>Loja da livinha</b></p>
        <p>Nota mil no brasil</p>
      </div>
    </div>
  </div>
-->
<?php   
ListaLugar($link, $_SESSION["Cidade"], $_SESSION["Op2"] , $_SESSION["Op1"] );
?>
  <!-- Pagination //pra quando a gente souber como distribuir as coisas entre paginas. por enqt td nessa única
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  -->


<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

  

</body>
</html>

