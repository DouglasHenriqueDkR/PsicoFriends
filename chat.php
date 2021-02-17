<?php
include "carregaclasses.php";

$objAtendimento = new Atendimento();
$objMensa = new AtendimentoMensagens();
$objFila = new Fila();
$objUsuario = new Usuarios();
$objAtendente = new Atendentes();

// obter o codigo da sala (get)
$atendimentoId = @$_GET['codigo'];
$mensagem = @$_POST['mensagem'];
// obter o tipo de usuario (cookie)
$tipo = @$_COOKIE['tipologin'];

// valida todo o atendimento
if( $atend = $objAtendimento->ConsultarAtendimento($atendimentoId) ) {
     
        if( $fila = $objFila->ConsultarFilaPorId( $atend->GetFilaId()) ) {

            if( $usuario =  $objUsuario->Consultar( $fila->GetUsuarioId()) ) {
                
            }
            else 
            {
                echo "não achou usuário tem algo errado";
            }
        }

        if( $atendente = $objAtendente->Consultar($atend->GetAtendenteId() ) ) {
            
        }
        else
        {
            echo "erro por não achar atendente no banco de dados";
        }
    }

if ( $tipo == "USUARIO" ) // se o tipo for usuario ver se ele é o registrado no atendimento (fila)
{
    if( $fila->GetUsuarioId() == $_COOKIE['usuarioid']) {
        $tipoAcesso="U";
    }
    else
    {
        MensagemDeErro( "Erro acesso de atendente não permitido" );
        // tratar problema de violação de acesso de outra sala
    }
}
else if ( $tipo == 'ATENDENTE' ) // se o tipo for atendente ver se ele é o registrado no atendimento
{
    if( $atend->GetAtendenteId() == $_COOKIE['atendenteid'] ) {
        // valida se o código do atendente no atendimento é igual ao login
        $tipoAcesso="A";
    }
    else     {
        MensagemDeErro( "Erro acesso de atendente não permitido" );
        // tratar problema de violação de acesso de outra sala
    }    
}
else{
    // tratar se chegou até aqui não é usuário nem atendente, pode estar com problemas de login
    MensagemDeErro("Erro interno, login incorreto !");
}

//se tudo tiver ok, exibir mensagens 

// conforme o usuário a tela mostrar se é atendente ou usuario
//include "chatlayout.php";
     
    


function MensagemDeErro($mensagem) {
?>
        <div>
            <h1>Erro do sistema</h1>
            <h4><?php echo $mensagem; ?> </h4>
        </div>
  <!--      <meta http-equiv="refresh" content="3; URL='index.php'"/>   -->
<?php
}
?>

<style> 
tr {
    color:red;

}

td { 
    color:blue;
}