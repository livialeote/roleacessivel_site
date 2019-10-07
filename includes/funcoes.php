<?php
//Login e cadastro

function VerificaLogin($link,$Email,$Senha){
    $Senha = addslashes(md5($Senha));
    $Email = addslashes($Email);
    $query = "SELECT * FROM usuarios WHERE Email LIKE '$Email' AND Senha LIKE '$Senha'";
$resultado = mysqli_query($link, $query) or die(mysqli_error($link));
 if (mysqli_num_rows($resultado) == 1){
     $linha = mysqli_fetch_array($resultado);
     $_SESSION["Nome"] = $linha["Nome"];
     $_SESSION["idUsuario"] = $linha["idUsuarios"];
     setcookie ("Logado", 80, time()+60);

     return TRUE;
 }
 else{
     
  return FALSE;
  
 }
}

 function ExcliurUsuario ($link, $idUsuario){
 $query = " DELETE FROM usuarios WHERE idUsuario = $idUsuario";
  mysqli_query ($query);  
    
}

function ListaAluno ($link){
    $query = " SELECT * FROM nome";
    $resultado = mysqli_query($link, $query);
    echo "<table border=1>";
    while ($linha = mysqli_fetch_array($resultado)) {
        echo "<tr><td>" . $linha["Nome"]."</td><td>" . $linha["Email"];
    }
    echo "</table>";
}


function IncluirUsuario($link, $Nome, $Email, $Senha,$Nascimento,$Foto) {
    $Senha = md5($Senha);
    $query = "INSERT INTO usuarios (Nome, Email, Senha, DtNasc, idNecessidade, LocalImagem) 
        VALUES ('$Nome', '$Email', '$Senha', '$Nascimento', '1','" . UpImagem($Foto) . "')";
    //echo $query;
    mysqli_query ($link, $query) or die(mysqli_error($link));
    }
    
     
 function getUsuario ($link, $idUsuario) {
    $query="SELECT * FROM usuarios WHERE idUsuarios = $idUsuario";
   // echo $query;
    $resultado = mysqli_query ($link, $query) or die(mysqli_error($link));
    $linha = mysqli_fetch_array ($resultado);
    return $linha;  
 }
  
 function IncluirEstabelecimento($link, $Nome, $Endereco, $idCidade, $idTipoEstabelecimento, $Detalhes) {//onde vai o possui e foto
    $query = "INSERT INTO estabelecimentos (Nome, Endereco, Detalhes, idTipoEstabelecimento, idCidade) 
        VALUES ('$Nome', '$Endereco', '$Detalhes', '$idTipoEstabelecimento', '$idCidade')";
    mysqli_query ($link, $query) or die(mysqli_error($link));
    }
   
    // funcao de last id ppegar o ultimo criado
    // checkbox serão um vetor. foreach p ver qual selecionados e p inserir cada um na tabela
    
    
  function getEstabelecimento ($link, $idEstabelecimentos) {
    $query="SELECT * FROM estabelecimentos WHERE idEstabelecimentos = $idEstabelecimentos";
    
    $resultado = mysqli_query ($link, $query) or die(mysqli_error($link));
    $linha = mysqli_fetch_array ($resultado);
    return $linha;  
 }
 
  function GetItensAcessibilidade ($link,$idEstabelecimentos){
      
      $query ="SELECT I.Descricao
        FROM estabelecimentos E
        join possui P on E.idEstabelecimentos = P.idEstabelecimentos
        join itensacessibilidade I on P.idItensAcessibilidade = I.idItensAcessibilidade
        WHERE E.idEstabelecimentos = $idEstabelecimentos;";
      
        $resultado = mysqli_query($link, $query);
        
        while($linha = mysqli_fetch_array($resultado)){
            
            echo $linha["Descricao"]."; ";
            
        }
      
  }
  
  

function edita ($link, $idUsuario,$Nome,$Email, $DtNasc, $Foto) {
    $query="UPDATE  usuarios SET Nome = '$Nome', Email = '$Email', DtNasc = '$DtNasc', Senha = '$Senha', Foto = '$Foto' WHERE idUsuarios = $idUsuario";
     mysqli_query ($link, $query) or die(mysqli_error($link)); //msqli_query manda p banco, $link linka, $query tabela
      
   
 }
 
 function UpImagem($Foto) {
    // Se a foto estiver sido selecionada
    if (!empty($Foto["name"])) {
        // Definição das dimenções da imagem ou tamanho do arquivo
        $largura = 200000000; // Largura máxima em pixels
        $altura = 100000000; // Altura máxima em pixels
        $tamanho = 150000000; // Tamanho máximo do arquivo em bytes

        $dimensoes = getimagesize($Foto["tmp_name"]); // Pega as dimensões da imagem
        // Verifica se a largura da imagem é maior que a largura permitida
        if ($dimensoes[0] > $largura) {
            $error[] = "A largura da imagem não deve ultrapassar " . $largura . " pixels";
        }
        // Verifica se a altura da imagem é maior que a altura permitida
        if ($dimensoes[1] > $altura) {
            $error[] = "Altura da imagem não deve ultrapassar " . $altura . " pixels";
        }
        // Verifica se o tamanho da imagem é maior que o tamanho permitido
        if ($Foto["size"] > $tamanho) {
            $error[] = "A imagem deve ter no máximo " . $tamanho . " bytes";
        }

        // Verifica se o arquivo é uma imagem
        if (!preg_match("/(bmp|png|jpg|jpeg)/", $Foto["type"])) {
            $error[] = "Isso não é uma imagem.";
        }
        // Se não houver nenhum erro
        if (empty($error)) {
            // Pega extensão da imagem
            preg_match("/\.(bmp|png|jpg|jpeg){1}$/i", $Foto["name"], $extencaoAtual);
            // Gera um nome único para a imagem
            $nome_imagemAtual = md5(uniqid(time())) . "." . $extencaoAtual[1];
            // Caminho de onde ficará a imagem
            $caminho_imagemAtual = "fotos_usuarios/" . $nome_imagemAtual;
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($Foto["tmp_name"], $caminho_imagemAtual);
            return $caminho_imagemAtual;
        } else {
            // reportar erro ou retornar erro 
            foreach ($error as $value) {
                echo "$value . <br>";
            }
        }
    }
}

function ListaLugar ($link, $idCidade, $idTipoEstabelecimento, $idNecessidade) {
    $query = "SELECT avg(A.pontos) as media, E.idEstabelecimentos, E.Nome, E.Detalhes, E.Endereco, P.idItensAcessibilidade, I.Descricao
FROM 
(estabelecimentos E JOIN possui P ON P.idEstabelecimentos = E.idEstabelecimentos)
 JOIN itensacessibilidade I ON P.idItensAcessibilidade = I.idItensAcessibilidade
LEFT JOIN avaliacoes A ON E.idEstabelecimentos=A.idEstabelecimentos 
WHERE  
      P.idItensAcessibilidade = $idNecessidade AND
      E.idTipoEstabelecimento = $idTipoEstabelecimento AND 
      E.idCidade = $idCidade GROUP BY A.idEstabelecimentos ORDER BY media DESC";
     $count = 1;
    
    $resultado = mysqli_query($link, $query) or die(mysqli_error($link));
    echo "<div class='w3-row-padding'>";
    while ($linha = mysqli_fetch_array($resultado)) {
        echo"<div class='w3-third w3-container w3-margin-bottom'>
            <a href='lugar.php?idEstabelecimentos=" . $linha["idEstabelecimentos"] . "'><img src='" . GetImagemEstabelecimento($link, $linha["idEstabelecimentos"]) . "' style='width:100%; box-shadow:0.5px 0.5px 3px grey; border-radius:5px;' class='w3-hover-opacity'> </a>".
      "<div class='w3-container w3-white' style='box-shadow:0.5px 0.5px 3px grey; border-radius:5px;'>
          <p><b> Posição ".$count."</b></p>
          <a href='lugar.php?idEstabelecimentos=" . $linha["idEstabelecimentos"] . "'><p><b>".$linha["Nome"]."</b></p></a>
        <p>Média: " . round($linha ["media"],0) ."</p>
      </div>
    </div>";
        $count++;
    }
    echo "</div>";
}



function IncluirComentario ($link, $Pontos, $idEstabelecimentos, $idUsuarios, $DataHora, $Comentario) {
    $query = "INSERT INTO avaliacoes (Pontos, idEstabelecimentos, idUsuarios, DataHora, Comentario) 
        VALUES ($Pontos, $idEstabelecimentos, $idUsuarios, '$DataHora', '$Comentario')";
    //echo $query;
    mysqli_query ($link, $query) or die(mysqli_error($link));
}

function ListaAvaliacoes ($link, $idEstabelecimentos) {
     $query = "SELECT * 
FROM avaliacoes A
JOIN usuarios U ON A.idUsuarios = U.idUsuarios 
WHERE A.idEstabelecimentos=$idEstabelecimentos;";
     
     $resultado = mysqli_query($link, $query) or die(mysqli_error($link));
   
    while ($linha = mysqli_fetch_array($resultado)) {
        echo "<div class='w3-container w3-card w3-white w3-round w3-margin'><br>
        <img src='". $linha["LocalImagem"] ."' alt='Avatar' class='w3-left w3-circle w3-margin-right' style='width:70px'>
        <span class='w3-right w3-opacity'>".$linha["DataHora"]."</span>
        <h4>".$linha ["Nome"]."</h4><br>
        <hr class='w3-clear'>
        <p> Nota: ".$linha["Pontos"]."</p>
        <p>".$linha["Comentario"]."</p>
            
        </div>";
    }
    //<button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
    //<button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
    // botao p curtir e comentar o comentario
    
    //<div class="w3-half">
    //<img src="/w3images/lights.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
    //</div> FOTOS NO COMENTS 
    
    }



function GetImagemEstabelecimento ($link, $idEstabelecimentos) {
    $query = "SELECT * FROM imagensestabelecimento WHERE idEstabelecimentos=$idEstabelecimentos";
    
   $resultado = mysqli_query($link, $query) or die(mysqli_error($link));
   $linha = mysqli_fetch_array($resultado);
   $caminho = $linha["Local"];
   return "$caminho";
}
//style='width:100%; box-shadow:0.5px 0.5px 3px grey; border-radius:5px;' class='w3-hover-opacity'
function GetImagemUsuario ($link, $idUsuarios) {
    $query = "SELECT LocalImagem FROM usuarios WHERE idUsuarios=$idUsuarios";
    
    $resultado = mysqli_query ($link, $query) or die(mysqli_error($link));
    $linha = mysqli_fetch_array($resultado);
   $caminho = $linha["LocalImagem"];
   return "$caminho";
}

function getNecessidade ($link,$idNecessidade){
      
      $query ="SELECT Descricao 
        FROM necessidades 
        WHERE idNecessidade = $idNecessidade";
      
        $resultado = mysqli_query($link, $query) or die(mysqli_error($link));
        
        $linha = mysqli_fetch_array($resultado);
            
            echo $linha["Descricao"];
  }
  
  function getTipoEstabelecimento ($link,$idTipoEstabelecimento){
      
      $query ="SELECT Descricao 
        FROM tipoestabelecimento 
        WHERE idTipoEstabelecimento = $idTipoEstabelecimento";
      
        $resultado = mysqli_query($link, $query) or die(mysqli_error($link));
        
        $linha = mysqli_fetch_array($resultado);
            
            echo $linha["Descricao"];
  }
  
  function getCidade ($idCidade){
      if ($idCidade==1){
          echo "Charqueadas";
      }else if($idCidade==2){
          echo "São Jerônimo";
      }    
  }
  
  
 function getNota ($link, $idCidade, $idTipoEstabelecimento, $idNecessidade, $idEstabelecimento) {
    $query = "SELECT avg(A.pontos) as media, E.idEstabelecimentos, E.Nome, E.Detalhes, E.Endereco, P.idItensAcessibilidade, I.Descricao
FROM 
(estabelecimentos E JOIN possui P ON P.idEstabelecimentos = E.idEstabelecimentos)
 JOIN itensacessibilidade I ON P.idItensAcessibilidade = I.idItensAcessibilidade
LEFT JOIN avaliacoes A ON E.idEstabelecimentos=A.idEstabelecimentos 
WHERE  
      P.idItensAcessibilidade = $idNecessidade AND
      E.idTipoEstabelecimento = $idTipoEstabelecimento AND 
      E.idEstabelecimentos = $idEstabelecimento AND 
      E.idCidade = $idCidade GROUP BY A.idEstabelecimentos ORDER BY media DESC";
    
    
    $resultado = mysqli_query($link, $query) or die(mysqli_error($link));
    $linha = mysqli_fetch_array($resultado);
    echo "Média: " . round($linha["media"],0);
    
  
}