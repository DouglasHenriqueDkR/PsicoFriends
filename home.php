<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/BorbSymbol.png">
    <link rel="stylesheet" href="css/home_style.css">
    <title>Psico Friends - Index</title>
</head>
<body>

    <div id="header">
        
  
      <ul>
        <li><a class="active" href="home.php">Home</a></li>
        
        <?php
            if( $_COOKIE['tipologin'] == "USUARIO") {
              ?>
              <li><a href="solicitaatendimento.php">Quer conversar? </a></li>
            <?php }
            else  
                  { ?>
                  <li><a href="atendente.php">Quer atender? </a></li>

<?php }  ?>
                    
            
        <?php
        //echo "<h1>".$_COOKIE['usuarioid']."</h1>";
        //echo "<h1>Tipo:".$_COOKIE['tipologin']."</h1>";
        if( @$_COOKIE['login'] != '' ) {
          ?>
          
          <li><a class="active" style="float:left" href="">Olá <?php echo @$_COOKIE['login']; ?></a></li>
          <li><a href="logout.php"style="float:right"> Sair</a></li>
          <?php }
        else
          { ?>
          <li><a href="login.html"style="float:right"> Login</a></li>
        <?php } ?>

        <li><a href="cad.html"style="float:right">Faça parte</a></li>
      </ul>

    <div class="title">
        <img src="img/PsicoFriendsWhiteLG.png" class="img-fluid" style="width: 600px">
    </div>


    <div class="container">

            <?php
            if( $_COOKIE['tipologin'] == "USUARIO") {
              ?>
            

      <h1> Seja Bem Vindo!</h1>

      <p>Entre em uma conversa com um de nossos voluntários e disponha de um ombro amigo, para compartilhar seus problemas, angústias ou apenas desabafar sobre seu dia-a-dia,
        nossa equipe preza pelo seu bem estar. Compartilhe apenas o que desejar compartilhar. Nós somos um auxilio e sempre recomendamos que procure um especialista.
      <p>E lembrem-se você não está sozinho "Quando uma conversa pode salvar uma vida, o mundo ganha empatia". 
      <p> Hoje estamos aqui por você, mas amanhã você pode ser o ombro amigo de alguém.
        

      

            <?php } 
            else 
                  { ?>
                  
                  <p> Nós agradecemos imensamente a sua disposição e disponibilidade para com os nossos usuários. 
                  Lembre-se nossos usuários estão passando por cituações delicadas, sejamos sempre respeitosos e acolhedores. Caso a situação esteja muito delicada, sempre recomende a procura por um psicólogo.
                  <p> Quando planatamos bons frutos, somos recompensados com bons frutos.
                
                <?php }   ?>

    </div>


    <script src="jquery.min.js"></script>
    <script type="text/javascript">
    
      $(document).ready(function(){
        $('.title').hide();
        $('.title').fadeIn(2000);
      })
    
    </script>


</body>
</html>

