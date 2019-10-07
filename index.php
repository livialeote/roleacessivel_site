<?php
session_start();
require 'includes/conexao.php';
require 'includes/funcoes.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Rolê Acessível </title>
        <!-- Meta tags Obrigatórias -->
            <meta charset="utf-8">
             <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="estilo/padrao.css">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      
    <style>
      .navbar {
  margin-bottom: 0;
  background-color: black;
  z-index: 9999;
  border: 0;
  font-size: 12px !important;
  line-height: 1.42857143 !important;
  letter-spacing: 4px;
  border-radius: 0;
 
  
}

.navbar li a, .navbar .navbar-brand {
  color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
  color:blue !important;
  background-color: white !important;
}

.navbar-default .navbar-toggle {
  border-color: transparent;
  color: #fff !important;
}

.logo_site{
    height:40px;
    margin-top:-8px;
}

 body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #0da8db;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #0da8db;
    font-size: 50px;
  }
  .logo {
    color: #0da8db;
    font-size: 200px;
  }
  
   .logonovo {
    color: #0da8db;
    font-size: 80px;
  }
  
  
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }

  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #f4511e;
    color: #fff;
  }

  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #0da8db;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }


  
    </style>
  
  
    </head>
    
    <body>
        
<?php        
include 'includes/navegacao.php';
?>
        
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      
    <div class="item active">
        <img src="fundomoci.jpeg" title="foto da equipe" alt="Foto da equipe do Rolê Acessível">
      <div class="carousel-caption">
              <a href="sobrenos.html">CONHEÇA A EQUIPE
          </a>
        <p>que desenvolve o Rolê Acessível</p>
      </div> 
    </div>

    <div class="item">
        <img src="imagem6.jpg" title="" alt="">
      <div class="carousel-caption">
          <a href="filtro1.html"><h3>QUE TIPO DE ROLÊ </h3></a>
        <p> você busca.</p>
      </div> 
    </div>

    <div class="item">
        <img src="imagem3.jpg" title="" alt="">
      <div class="carousel-caption">
          <a href="busca.html"><h3> INFORME ALGUM ESTABELECIMENTO </h3></a>
        <p> diga o nome do lugar e descubra se ele é acessível</p>
      </div> 
    </div>
      
      <div class="item">
          <img src="img5.jpg" alt="" title="">
      <div class="carousel-caption">
          <a href="mapa.html"><h3> DESCUBRA NA SUA REGIÃO </h3></a>
        <p> quais locais são acessíveis</p>
      </div> 
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        
          
        
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
    <br><br>
    <h1>#RolêAcessível</h1>
  <br>
  <div style="height:50px;"></div>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logonovo"></span>
      <h4>ONU</h4>
      <p>Esse projeto contribui para os objetivos da ONU, redução de desigualdades.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logonovo"></span>
      <h4>PESQUISA</h4>
      <p>Atualmente as PcDs correspondem a 23,9% da população brasileira  segundo dados do censo do IBGE (2010). </p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logonovo"></span>
      <h4>LBI</h4>
      <p>Conhecida como Lei Brasileira de Inclusão (LBI),
regulamentada pelo Decreto no 5.296, especifica e dá prioridade de atendimento às pessoas com deficiências, estabelecendo normas gerais para a
promoção da acessibilidade.</p>
    </div>
  </div>


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>





        

        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
