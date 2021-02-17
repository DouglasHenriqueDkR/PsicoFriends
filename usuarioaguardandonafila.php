<?php

    include "carregaclasses.php";
    $objUsuario = new Usuarios();

    $usuarioId = @$_COOKIE['usuarioid'];
    $desistiu = @$_GET['desistir'];

    if( $usuarioId == '') {
        echo "Login expirado, faça um novo login !";
    }
    else
    {
   
    $objFila = new Fila();

    $posicao = ($objFila->ConsultarUsuarioNaFila( $usuarioId ))+1;

    // indica que o usuário não está na fila
    if( $posicao == -1 ) {
        // tratar caso
    }

    if( $desistiu != "" ) {
        if( $fila = $objFila->ConsultarFilaAtivaDoUsuario($usuarioId) ) {
            $objFila->Gravar( $fila->GetFilaId() , 2 );
            ?>
            <meta http-equiv="refresh" content="0; URL='home.php'"/>
            <?php
        }
    }

    if( $posicao == 1 )
    {
        // busca se existe realmente uma fila ativa para pegar o id (código da fila)
        $minhaFila = $objFila->ConsultarFilaAtivaDoUsuario( $usuarioId );

        if( $minhaFila != null ) {

            $objAtendimento = new Atendimento();
            // consulta qual é o código do atendimento que esta fila vai receber
            $atendimento = $objAtendimento->ConsultarAtendimentoPorFilaId( $minhaFila->GetFilaId() );
            if( $atendimento != 0 ) {
                ?>
                <meta http-equiv="refresh" content="0; URL='chatuser.php?codigo=<?php echo $atendimento; ?>'"/>
                <?php
            }
            else 
            {
                echo "Aguardando atendente abrir a sala !";
            }
        }
    }
}

?>
<script>
    setTimeout(function() {
        location.reload();
        }, 30000);
</script>