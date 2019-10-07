<?php

require '../includes/conexao.php';
require '../includes/funcoes.php';

$resposta = $_GET['opcao'];
$query = "SELECT Nome, idEstabelecimentos FROM estabelecimentos WHERE Nome like '%$resposta%' ORDER BY Nome;";
    
    $resposta1 = mysqli_query($link, $query);
  
    $listar = mysqli_num_rows($resposta1) or die(mysqli_error($link));
    
    if ($listar!=0) {
        echo "<div class='w3-row-padding'>
          <div class='w3-margin-bottom'>
          <div class='w3-input w3-border' style='border-radius:5px; 
    box-shadow:1px 1px 3px grey;'>";
        while ($linha = mysqli_fetch_array($resposta1)) {   
           echo  "<a href='lugar.php?idEstabelecimentos=".$linha["idEstabelecimentos"]."'>".$linha["Nome"]."</a></br></br>";
        }
        echo "</div></div></div>";
    }
    
    
?>