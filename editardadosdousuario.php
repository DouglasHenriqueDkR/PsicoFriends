<?php

 $usuarioId = $_COOKIE['usuarioid'];
 
 include "carregaclasses.php";
 $objUsuario = new Usuarios();

 if( $objUsuario->Consultar($usuarioId))
    {
        ?>
        <h1>Edição de dados do usuário</h1>

        <?php echo $objUsuario->GetNome();   ?>



        <?php
    }
    else
    {
        echo "Houve erro no sistema !";
    }



?>