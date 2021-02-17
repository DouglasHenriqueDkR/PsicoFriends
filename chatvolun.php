<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/BorbSymbol.png">
     <link rel="stylesheet"  type="text/css" href="css/chatvolunstyle.css">
    <title>Chat dos Voluntários </title>   
    <script src="jquery.min.js" type="text/javascript"></script>    
</head>
<script>
function exibirModal() {
    
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
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
                  <a value="Encerrar Conversa" name="Encerrar Conversa" onclick="exibirModal()">Encerrar Conversa</a>
                </li>

                <li>
                  <a style="float:right">Olá <?php echo @$_COOKIE['login']; ?></a>
                </li>
        </ul>
        
    <?php
    include "starrating.php";
    ?>
    
    </div>


      <div class="message">
          <form method="post" action="./chatvolun.php?codigo=<?php echo $atendimentoId; ?>">
                <input type="text" name="mensagem">
                <input type="button" value="Enviar">
          </form>  
      </div>

    <div class="visual" >

      <div class="list"> 

        <h2> <a5>No momento:</a5> <br>  <br> <a4> <?php echo @$_COOKIE['login']; ?></a4></h2>
        <h3>Usuários na fila:</h3>
       
        <?php     include "painelfila.php";?>

      </div>

      <div class="visual" id="visual">

      <?php 
      
      include "exibirchat.php"; 
      
      if(isset($_POST["conversa"]))
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



