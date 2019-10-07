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
    <div class="w3-container w3-white w3-padding-16 sombraCaixona">
        <h1 style="margin-left: -30px;"><i class="fa fa-key w3-margin-top"></i> Entrar </h1><br>
      <form name="form_login" action="login.php" method="POST">
        <div class="w3-row-padding">
          <div class=" w3-margin-bottom">
              <input class="w3-input w3-border sombraCaixa"  type="text" name="Email" placeholder="Email" required>
          </div>
        </div><br>
        <div class="w3-row-padding">
          <div class="w3-margin-bottom">
            <input class="w3-input w3-border sombraCaixa" type="password" name="Senha" placeholder="Senha" required>
          </div>
        </div>
        <?php
        if (!empty($_POST["botao_entrar"])) {
                    if (VerificaLogin($link,$_POST["Email"],$_POST["Senha"]) == TRUE) {
                        header("location:index.php");
                     }
                  else {?>
                <p style="color:red;"> Senha e/ou email estão incorretos </p>
                    <?php
                   }
                } 
                ?>
        <p class="linkClicavel"> Ainda não é cadastrado? <a href='cadastrar.php' > Clique aqui</a> </p><br>
        <input class="w3-button w3-blue sombraCaixa" type="submit" name="botao_entrar" value="Eu sou Rolezeira">  
      </form>
    </div>
  </div>
</header>
   </body>
</html>



