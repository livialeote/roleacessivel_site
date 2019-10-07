<?php
session_start();
require 'includes/conexao.php';
   require 'includes/funcoes.php';

   if (!empty($_POST["botao_criar"])) {
    $Nome = $_POST["Nome"];
    $Email = $_POST["Email"];
    $Senha = $_POST["Senha"];
    $Nascimento = $_POST["Nascimento"];
    $Foto = $_FILES["Foto"];
    IncluirUsuario ($link, $Nome, $Email, $Senha, $Nascimento,$Foto);
   }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Rolê Acessível </title>
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
        
    <!-- Header -->
<header class="w3-display w3-content w3-center " style="margin-top:74px;">
    <div class="w3-display w3-padding w3-col l2 m1"></div>
    <div class="w3-display w3-padding w3-col l8 m10">
    <div class="w3-container w3-white w3-padding-16 sombraCaixona ">
        <h2><i class="fa fa-group w3-margin-top"></i> Junte-se ao Rolê!</h2><br>
        <form name="form_cadastro_usr" action="cadastrar.php" method="POST" enctype="multipart/form-data">
          <div class="w3-row-padding" style=" ">
          <div class=" w3-margin-bottom">
            <label for="real-input" ><img class="sombraCaixa" style="cursor:pointer;width: 140px;height:130px;border-radius:120px; padding: 3px;"  title="Adicione sua foto de perfil" src="team/user-icon.jpg"></label>
            <input type="file" id="real-input" name="Foto" style="visibility: hidden; position: fixed; left: -9000px;">
          </div>
        </div>
        <div class="w3-row-padding w3-padding">
          <div class="w3-half w3-margin-bottom">
            <input class="w3-input w3-border sombraCaixa" type="text" placeholder="Nome" name="Nome" required>
          </div>
          <div class="w3-half">
              <input class="w3-input w3-border sombraCaixa" type="date" name="Nascimento" title="Adicione sua data de nascimento" required>
          </div>
        </div>
          <div class="w3-row-padding w3-padding">
          <div class="w3-half w3-margin-bottom">
            <input class="w3-input w3-border sombraCaixa" type="text" name="Email" placeholder="Email" required>
          </div>
          <div class="w3-half">
          <input class="w3-input w3-border sombraCaixa" type="password" name="Senha" placeholder="Senha" required>
          </div>
        </div>
            <p class="linkClicavel"> Para cadastrar estabelecimento, <a href='cadastrar_lugar.php'> clique aqui</a></p><br>
        <input class="w3-button w3-blue w3-center sombraCaixa" type="submit" name="botao_criar" value="Cadastre-se"> 
      </form>
    </div>
  </div>
</header>
    </body>
</html>

