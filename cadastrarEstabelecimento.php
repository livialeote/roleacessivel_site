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
<link rel="shortcut icon" href="thumbnail.png" type="image/x-icon">
      
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
        <h2><i class="fa fa-join w3-margin-top"></i> Cadastrar Estabelecimento</h2>
        <h4> É grátis! </h4>
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
              <input class="w3-input w3-border sombraCaixa" type="text" name="Endereco" placeholder="Endereço" required>
          </div>
        </div>
          <div class="w3-row-padding w3-padding">
          <div class="w3-half w3-margin-bottom">
            <!--<input class="w3-input w3-border sombraCaixa" type="text" name="Email" placeholder="Email" required>-->
              <select class="w3-input w3-border sombraCaixa"  name="Cidade"> 
                  <option value="1"> Charqueadas </option>
                  <option value="2"> São Jerônimo </option>
                </select><br>
          </div>
          <div class="w3-half">
          <select class="w3-input w3-border sombraCaixa" name="Tipo"> 
                  <option value="1"> Bar </option>
                  <option value="2"> Café </option>
                  <option value="3"> Hotel </option>
                  <option value="4"> Diversão e ar livre </option>
                  <option value="5"> Lancheria/Padaria </option>
                  <option value="6"> Restaurante </option>
                  <option value="7"> Loja comercial </option>
                </select><br>
          </div>
        </div>
            
            <div class="w3-row-padding w3-padding">
          <div class="w3-half w3-margin-bottom">
          <input  style="margin-left:-140px;" type="checkbox" name="vehicle1" value="1"> Piso Tátil<br>
            <input style="margin-left:-153px;" type="checkbox" name="vehicle1" value="2"> Rampa<br>
            <input style="margin-left:-62px;" type="checkbox" name="vehicle1" value="3"> Banheiro acessível <br>
            <input style="margin-left:-8px;" type="checkbox" name="vehicle1" value="4"> Estacionamento prioritário <br>         
          </div>
                
          <div class="w3-half">
              <textarea style="width:250px; box-shadow:1px 1px 3px grey; border-radius:6px; height:85px;" name="Cidade"> Escreva aqui uma breve descrição.. </textarea> 
               <label for="real-input" class="muda"><img style="cursor:pointer;width: 30px;height:30px;"  src="imagens/e.png"></label>
            <input type="radio" id="real-input" name="nota" value="1" style="visibility: hidden; position: fixed; left: -9000px;">
            <label for="real-input1" class="muda" ><img style="cursor:pointer;width: 30px;height:30px;"  src="imagens/e.png"></label>
            <input type="radio" id="real-input1" name="nota" value="2" style="visibility: hidden; position: fixed; left: -9000px;">
            <label for="real-input2" class="muda"><img style="cursor:pointer;width: 30px;height:30px;"  src="imagens/e.png"></label>
            <input type="radio" id="real-input2" name="nota" value="3" style="visibility: hidden; position: fixed; left: -9000px;">
            <label for="real-input3" class="muda"><img style="cursor:pointer;width: 30px;height:30px;"  src="imagens/e.png"></label>
            <input type="radio" id="real-input3" name="nota" value="4" style="visibility: hidden; position: fixed; left: -9000px;">
            <label for="real-input4" class="muda"><img style="cursor:pointer;width: 30px;height:30px;"  src="imagens/e.png"></label>
            <input type="radio" id="real-input4" name="nota" value="5" style="visibility: hidden; position: fixed; left: -9000px;"><br>
          </div>
        </div>
            <p class="linkClicavel"> Para cadastrar usuário, <a href='cadastrar.php'> clique aqui</a></p><br>
        <input class="w3-button w3-blue w3-center sombraCaixa" type="submit" name="botao_criar" value="Cadastre-se"> 
      </form>
    </div>
  </div>
</header>
    </body>
</html>



