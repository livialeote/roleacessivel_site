<?php
session_start();
require 'includes/conexao.php';
require 'includes/funcoes.php';         
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sobre nós</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="estilo/padrao.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       

        

    </head>
    <body>
        <?php        
            include 'includes/navegacao.php';
        ?>
        
    <!-- Team -->
    <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Conheça a equipe do Rolê</h2>
          <br>
        </div>
      </div>
        
        <div class="col-sm-3"></div>
        
      <div class="row">
        <div class="col-sm-3">
          <div class="team-member">
              <img  class="w3-circle" style="width:220px" src="team/olivia.jpg" alt="">
            <h4>Lívia Leote</h4>
            <p class="text-muted">Criadora e Desenvolvedora</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.instagram.com/livialeote/?hl=pt-br">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
          
        <div class="col-sm-3">
          <div class="team-member">
              <img class="w3-circle" style="width:220px" src="team/luisaa.jpeg" alt="">
            <h4>Luísa Barcellos</h4>
            <p class="text-muted">Criadora e Desenvolvedora</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.instagram.com/luisa.barcelloss/?hl=pt-br">
                    <i class="fab fa-instagram" ></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
          <br>
          <br>
          
          
        <div class="col-sm-4">
          <div class="team-member">
              <img class="w3-circle" style="width:220px" src="team/fabioo.jpg" alt="">
            <h4>Sor Fábio Santos</h4>
            <p class="text-muted">Orientador</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
          
          <div class="col-sm-4">
          <div class="team-member">
              <img class="w3-circle" style="width:220px" src="team/lourenco2.jpg" alt="">
              <h4>Lourenço Basso</h4>
            <p class="text-muted">Orientador</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
          
          <div class="col-sm-4">
          <div class="team-member">
              <img class="w3-circle" style="width:220px" src="team/guilhermee.jpg" alt="">
            <h4>Guilherme Borges</h4>
            <p class="text-muted">Orientador</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
          
      </div>
        <br>
      <div class="row">
        <div class="col-lg-12 mx-auto text-center">
            <br>
          <p class="large text-muted">Rolê Acessível 2019</p>
        </div>
      </div>
    </div>
  </section>
    </body>
</html>
