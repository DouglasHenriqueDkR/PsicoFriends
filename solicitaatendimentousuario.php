<?php

 include "carregaclasses.php";
 $objUsuario = new Usuarios();
 $objFila = new Fila();

 $usuarioId = $_COOKIE['usuarioid'];
 $tipo = $_COOKIE['tipologin'];
 $login = $_COOKIE['login'];

// echo "UsuarioId:".$_COOKIE['usuarioid']."/Tipo:".$_COOKIE['tipologin']."/Login:".$_COOKIE['login']."/";
 if( $usuarioId == '') {
     echo "Login expirado, faça um novo login !";
     ?> 
     <meta http-equiv="refresh" content="2; URL='login.html'"/>
     <?php
 }

 if(  $tipo != 'USUARIO') {
     echo "Esta opção requer um perfil de usuário !";
 }
 else 
  {
    $posicao = $objFila->ConsultarUsuarioNaFila( $usuarioId )+1;
    
    if( $posicao > 0 ) {
        echo "O usuário já encontra-se na fila !";
        ?>
        <meta http-equiv="refresh" content="0; URL='fila.php'"/>
        <?php
    }

    $enviou = @$_POST['enviou'];
    if( $enviou != "" )
        {
            if( $objFila->InserirUsuario( $usuarioId ) ) 
            {
                echo "Usuário inserido na fila com sucesso ! Iniciando atendimento";
                ?>
                    <meta http-equiv="refresh" content="0; URL='fila.php'"/>
                <?php
            }
            else
            {
                echo "Erro !";
            }
        }
    
     // echo "<h1>".$usuarioId."</h1>";
    
    if( $objUsuario->Consultar($usuarioId))
        {
            ?>

 
            <?php
        }
        else
        {
            echo "Houve erro no sistema ao procurar o usuário!";
        }
  }


?>

<!DOCTYPE html>

