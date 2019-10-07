function getValor(int) {
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
      document.getElementById("resp").innerHTML=this.responseText;
  }
  xmlhttp.open("GET","php/processa_valor.php?opcao="+int,true);
  xmlhttp.send();
}


/*
document.getElementById("op").addEventListener("click", function(){
     
    //document.getElementById("resposta").innerHTML = "Hello World";
    
  xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
      document.getElementById("resposta").innerHTML=this.responseText;
  }
  xmlhttp.open("GET","php/processa_valor.php?opcao="+int,true);
  xmlhttp.send();
    
    
});

*/