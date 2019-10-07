<?php
session_start();
require 'includes/conexao.php';
require 'includes/funcoes.php';

 if(!empty($_GET["idEstabelecimentos"])) {
        $_SESSION["idEstabelecimentos"] = $_GET["idEstabelecimentos"];
} 
     $estabelecimentos = getEstabelecimento ($link, $_SESSION["idEstabelecimentos"]);
     
?>﻿
<!DOCTYPE html>
<html>
    <head>
<title><?php echo $estabelecimentos["Nome"]?></title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo/padrao.css">
        <script src="funcoes.js"></script>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body class="w3-theme-l5">

<?php
    include ("includes/navegacao.php");  
?>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px; margin-top:85px;">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center"><?php echo $estabelecimentos["Nome"]?></h4>
         <p class="w3-center"><img src="<?php echo GetImagemEstabelecimento($link, $_SESSION["idEstabelecimentos"]); ?>" class="w3-circle" style="height:106px;width:106px"></p>
         <hr>
         
         <p><i class="fa fa-check fa-fw w3-margin-right w3-text-theme"></i> <?php echo GetItensAcessibilidade($link, $_SESSION["idEstabelecimentos"]); ?> </p>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> <?php echo $estabelecimentos["Endereco"]?> </p>
         <p><i class="fa fa-star fa-fw w3-margin-right w3-text-theme"></i> <?php getNota($link, 1, 1, 1, 4); ?> </p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <!--<button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
          <div id="Demo1" class="w3-hide w3-container">
            <p>Some text..</p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          <div id="Demo2" class="w3-hide w3-container">
            <p>Some other text..</p>
          </div>-->
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-picture-o fa-fw w3-margin-right"></i> Fotos de <?php echo $estabelecimentos["Nome"]?></button>
          <div id="Demo3" class="w3-hide w3-container">
         <div class="w3-row-padding">
         <br>
           <div class="w3-half">
             <img src="i2.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="i4.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
           <div class="w3-half">
             <img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
           </div>
         </div>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Interests 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">News</span>
            <span class="w3-tag w3-small w3-theme-d4">W3Schools</span>
            <span class="w3-tag w3-small w3-theme-d3">Labels</span>
            <span class="w3-tag w3-small w3-theme-d2">Games</span>
            <span class="w3-tag w3-small w3-theme-d1">Friends</span>
            <span class="w3-tag w3-small w3-theme">Games</span>
            <span class="w3-tag w3-small w3-theme-l1">Friends</span>
            <span class="w3-tag w3-small w3-theme-l2">Food</span>
            <span class="w3-tag w3-small w3-theme-l3">Design</span>
            <span class="w3-tag w3-small w3-theme-l4">Art</span>
            <span class="w3-tag w3-small w3-theme-l5">Photos</span>
          </p>
        </div>
      </div>
      <br>
      --> 
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>Alguma descrição do <?php echo $estabelecimentos["Nome"]?> está errada ou deve ser atualizada?</p>
        <p> Clique aqui e ajude-nos na missão de acessibilidade urbana :D </p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
                <form name="frm_avalie" method="POST" action="lugar.php">
              <h6 class="w3-opacity">Avalie a acessibilidade desse lugar!</h6>
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
            <textarea placeholder="Conte sua experiência aqui..." name="comentario" class="w3-border w3-padding w3-col m12"></textarea><br>
              <?php   
   if(!empty( $_SESSION["Nome"])){
    ?>
              <input type="submit" class="w3-button w3-theme" style="margin-top:10px;" name="botao_avaliar" value="Enviar avaliação">  
               <?php
    }else{
        ?>
              <h6 style="margin-top:50px;">Para isso, <a href="login.php"> logue na sua conta</a> ou <a href="cadastrar.php"> cadastre-se!</a></h6>
              
              <?php
    }
    ?>
                </form>
              </div>
          </div>
        </div>
      </div>
        
        
        
        <?php
   
    
      if (!empty($_POST["botao_avaliar"])) {

    $Pontos = $_POST["nota"];
    $idEstabelecimentos = $_SESSION["idEstabelecimentos"];
    $idUsuarios = $_SESSION["idUsuario"];
    $DataHora = '2019-08-09 14:00';
    
    $Comentario = $_POST["comentario"];
    IncluirComentario ($link, $Pontos, $idEstabelecimentos, $idUsuarios, $DataHora, $Comentario);
    }
        ListaAvaliacoes($link, $_SESSION["idEstabelecimentos"]);
        ?>

    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column 
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Upcoming Events:</p>
          <img src="/w3images/forest.jpg" alt="Forest" style="width:100%;">
          <p><strong>Holiday</strong></p>
          <p>Friday 15:00</p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Friend Request</p>
          <img src="/w3images/avatar6.png" alt="Avatar" style="width:50%"><br>
          <span>Jane Doe</span>
          <div class="w3-row w3-opacity">
            <div class="w3-half">
              <button class="w3-button w3-block w3-green w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-button w3-block w3-red w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          </div>
        </div>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-16 w3-center">
        <p>ADS</p>
      </div>
      <br>
      
      <div class="w3-card w3-round w3-white w3-padding-32 w3-center">
        <p><i class="fa fa-bug w3-xxlarge"></i></p>
      </div>
      
     End Right Column 
    </div>
    
  <!-- End Grid 
  </div>-->
  
<!-- End Page Container -->
</div>
<br>
 
<script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html> 


