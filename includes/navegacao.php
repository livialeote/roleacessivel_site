<?php
    if (empty($_SESSION["Nome"])) {
?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
        <a class="navbar-brand" href="index.php"><img class="logo_site" src="logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">INÍCIO</a></li>
        <li><a href="encontrar.php">ENCONTRAR</a></li>
        <li><a href="login.php">LOGIN</a></li>
        <li><a href="sobrenos.php">SOBRE NÓS</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
}
 else {
?>
     <?php   
 if(!empty( $_SESSION["Nome"])){
 $Usuario = getUsuario ($link, $_SESSION["idUsuario"]);
 //echo "style='color:white' Olá, " . $_SESSION["Nome"] . "style='color:white;', seja bem vindo";
 }
 ?>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
        <a class="navbar-brand" href="index.php"><img class="logo_site" src="logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">INÍCIO</a></li>
        <li><a href="encontrar.php">ENCONTRAR</a></li>
        <li><a href="logout.php">SAIR</a></li>
        <li><a href="sobrenos.php">SOBRE NÓS</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
   }
?>


