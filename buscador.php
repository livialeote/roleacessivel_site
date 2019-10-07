<?php
session_start();
require 'includes/conexao.php';
require 'includes/funcoes.php';         
?>
                
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Logar no Rolê Acessível</title>
        <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<link rel="stylesheet" type="text/css" href="estilo/padrao.css">
      
    </head>
    <body>
       
<?php        
include 'includes/navegacao.php';
?>

        <div style="margin-top:140px;">
        </div>
    <!-- Header -->
<header class="w3-display w3-content w3-center">
    <div class="w3-display w3-padding w3-col l3 m2"></div>
  <div class="w3-display w3-padding w3-col l6 m8">
    <div class="w3-white w3-padding-16">
        <h1 style="margin-left: -30px;"><i class="fa fa-search w3-margin-top"></i> Pesquise </h1><br>
      <form>
        <div class="w3-row-padding">
          <div class=" w3-margin-bottom">
              <input class="w3-input w3-border sombraCaixa" style="border-radius:40px; outline: none;" type="text" name="valor" placeholder="digite o nome do lugar..." onkeyup="getValor(this.value)">
          <div id="resp"></div>
          </div>
        </div><br>
      </form>
        <script src="js/envia_valor.js" type="text/javascript" ></script>
    </div>
  </div>
</header>
   </body>
</html>





