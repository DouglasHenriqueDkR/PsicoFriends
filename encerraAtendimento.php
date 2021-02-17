<?php


    include "carregaclasses.php"; 

    $atendimento = new Atendimento();

    $atendimentoId = @$_GET['codigo']; 
    $motivo = $_POST['motivo'];
    $comentario = $_POST['comentario'];
    $avaliacao = $_POST['rating'];
    
    $tipo = $_COOKIE['tipologin'];

    
    if(  $tipo == 'USUARIO') {

        $resultado = $atendimento->EncerrarAtendimento ($atendimentoId, "U", $motivo, $avaliacao, $comentario );
    }
    else
    {
        $resultado = $atendimento->EncerrarAtendimento ($atendimentoId, "A", $motivo, $avaliacao, $comentario );
    }
        
    
    echo "Atendimento encerrado !";
    header("refresh:0;url=home.php" );



?>