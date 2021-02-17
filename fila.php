<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/BorbSymbol.png"/>
    <link rel="stylesheet" href="css/fila_style.css">
    <title>Fila</title>
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
<div id="data">
    <h3><?php echo $_COOKIE['login']; ?>
    <h3> Vamos conversar!</h3>
    <form action="index.php" method="post">
        <table class="iniciate">
    
            <tr>
                <td>
                    <?php
                    include "usuarioaguardandonafila.php";

                    echo "<p> A sua posição na fila é:".$posicao."</p>";
                    ?>
                </td>
            </tr>

    
            <tr>
                <td>
                    <label>
                        <p1> Aguarde ... </p1>

                    </label>
                </td>
            </tr>
        </table>
        </form>
        
    </div>
                           
    <div class="loader">Loading...</div>


    <div class="saida">
        <form action="" method="get">
             <input type="submit" value="Sair da fila" name="desistir" href="home.php">
        </form>

    </div>

    <script src="jquery.min.js"></script>
    <script type="text/javascript">
    
      $(document).ready(function(){
        $('#data , .loader , .saida').hide();
        $('#data , .loader , .saida').fadeIn(2000);
      })
    
    </script>

</body>
</html>

