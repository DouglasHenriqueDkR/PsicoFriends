<?php

    $sala = $_GET['id'];
    
    include "carregaclasses.php";
    $objUsuario = new Usuarios();

    $usuarioId = @$_COOKIE['usuarioid'];

    if( $usuarioId == '') {
        echo "Login expirado, faça um novo login !";
    }
    else
    {
        $objAtendimento = new Atendimento();

        // consultar o atendimento
        $atendimento = $objAtendimento->ConsultarAtendimento($sala);

        if( $atendimento == null ) {
            // informar erro
            echo "Ocorreu um erro";
        }
        else
        {
            $objFila = new Fila();
            $fila = $objFila->ConsultarFilaPorId( $atendimento->GetFilaId() );

            if( $fila->GetUsuarioId() != $usuarioId ) {
                // tratar tentativa de fraude
            }
            else
            {
                //iniciar o atendimento !
                // informar salvando na fila que já foi atendido (não perdeu a entrada da fila se isso deu errado)
                $fila->Gravar($atendimento->GetFilaId(), 1);

                ?>
                    <meta http-equiv="refresh" content="2; URL='chat.php?codigo=<?php echo $sala; ?>'"/>
                <?php
            }


        }


    }



?>