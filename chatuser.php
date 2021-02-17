<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="css/chatuser_style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/BorbSymbol.png">
    <title>Chat dos Usuários </title>
    <script src="jquery.min.js" type="text/javascript"></script>    
</head>
<script>
function exibirModal() {
    
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>



<?php

include "carregaclasses.php"; 
$atendimentoId = @$_GET['codigo'];
?>

<body>


    <div class="nav">
    <ul>
    <li>
       <a value="Sair" name="Sair" onclick="exibirModal()">Sair</a>
    </li>
            
            <li><a style="float:right">Olá <?php echo @$_COOKIE['login']; ?></a></li>
    </ul>

    <?php
    include "starrating.php";
    ?>
    
    </div>
     
        <div class="message">
        <form method="post" action="./chatuser.php?codigo=<?php echo $atendimentoId; ?>">
              <input type="text" name="mensagem">
              <input type="button" value="Enviar"> 
          </form>  
         
    </div>
    

      <div class="visual" id="visual"> 

          <?php 
          

          include "exibirchat.php";
          
          if(isset($_POST["desistir"]))
          echo "Saindo da conversa...";
          //header("refresh:5;url=home.php" );
          
          

          ?>

      </div>

      
</body>
</html>

<script>
setInterval(function(){  atualizar(); }, 5000);
function atualizar() {
   $("#visual").load("exibirchatasync.php?codigo=<?php echo $atendimentoId; ?>);
}
</script>

