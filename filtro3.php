<?php
session_start();
if(!empty($_GET["Op2"])){
$_SESSION["Op2"] = $_GET["Op2"]; 
}
require 'includes/conexao.php';
require 'includes/funcoes.php';
?>﻿

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Em que Cidade? </title>
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
          <h2 class="section-heading text-uppercase">SELECIONE A CIDADE </h2>
          <h3 class="section-subheading text-muted"> &nbsp </h3>
        </div>
      </div>
        <div class="row text-center">
          <div class="col-md-4"></div>
        <div class="col-md-4">
          <form method="POST" name="form_filtro" action="ranking.php">
                <select class="sombraCaixa" style="width:250px;" name="Cidade"> 
                  <option value="1"> Charqueadas </option>
                  <option value="2"> São Jerônimo </option>
                </select><br>
              <input class="sombraCaixa" style="margin-top:40px; width:200px;" type="submit" name="botao_encontrar" value="Filtrar lugares">
        </form>
        </div>  
        </div>  
    </div>
  </section>
<?php
if(!empty($_POST["botao_encontrar"])){
    
echo $_SESSION["Op1"] . "<br>";
echo $_SESSION["Op2"] . "<br>";
echo $_POST["Cidade"];

header("location:ranking.php");
                    
}
?>
 </body>
</html>









