
<title> Tela de Atendimento </title>
<link rel="stylesheet" href="css/atendente_style.css">
<div id="header">

        <ul>
            <li><a href="home.php">Home</a></li>
        </ul>

    <div class="title">
        <img src="img/PsicoFriendsBlueLG.png" width="300" height="100">
    </div>    

</div>

    <footer class="footer">
            <img src="img/Footer.png" width="100%" height="120px">
    </footer>

<div>

<?php

    // echo "Nome do atendente:".$_COOKIE['atendenteid']." ".$_COOKIE['login'];

    include "carregaclasses.php";
    $objFila = new Fila();
    $objAtendimento = new Atendimento();
    $codAtend = @$_GET['codigo'];

    if( @$_POST['atender'] != "" ) {
        //    echo "apertou!";
        $codigoDaFila = $objFila->ObterUsuarioParaAtendimento();

       // echo "Recebeu a fila nº".$codigoDaFila;

        if( $codigoDaFila == 0 ) {
            echo "Não há pessoas para atender !";
        }
        else {
            $atendenteId = $_COOKIE['atendenteid'];
            $codigoAtendimento = $objAtendimento->CriarNovo( $codigoDaFila, $atendenteId );
            if( $codigoAtendimento == 0 ) {
                echo "Houve erro na abertura do atendimento, solicite suporte !";
            }
            else{   ?>
                <meta http-equiv="refresh" content="1; URL='chatvolun.php?codigo=<?php echo $codigoAtendimento; ?>'"/>
<?php            }
            }
        }

    if( $codAtend != "" ) {
        ?>
                <div class="form">
                    <h1>Atendimento ao cliente <?php echo $codAtend; ?></h1>

                </div>

        <?php
    }


    include "painelfila.php";

?>
    <form method="POST">
        <table> 
        <tr> 
        <input type="submit" name="atender" value="Atender próximo">
    </form>
</div>

