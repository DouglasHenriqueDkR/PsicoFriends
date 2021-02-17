<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/BorbSymbol.png"/>
    <link rel="stylesheet" href="css/solicitaatendimento_style.css">
    <title>Tela de Atendimento</title>
</head>
<body>

<div id="header">

<ul>
    <li><a href="home.php">Home</a></li>
</ul>

<div class="title">
<img src="img/PsicoFriendsBlueLG.png" width="330" height="120">
</div>
</div>

    <footer class="footer">
            <img src="img/Footer.png" width="100%" height="120px">
    </footer>

      <?php
    include "solicitaatendimentousuario.php";
    ?>
    <div class="formvolun">
        <form action="" method="post">
            <br>
                   <table>
                    <input type="submit"  name="enviou" value=" Solicitar atendimento" onclick="window.location='fila.php';">
                </tr>
                   </table>
       </form>
    </div>

    <script src="jquery.min.js"></script>
    <script type="text/javascript">
    
      $(document).ready(function(){
        $('.title , .formvolun').hide();
        $('.title , .formvolun').fadeIn(2000);
      })
    
    </script>

                                       
</body>
</html>

