
<?php

include "carregaclasses.php";

$objUsuario = new Usuarios();

$objUsuario->setNome( @$_POST['txt_nome'] );
$objUsuario->SetGenero( @$_POST['cmb_sexo'] );
$objUsuario->setCelular( @$_POST['txt_cel']);
$objUsuario->setEmail(@$_POST['txt_email'] );
$objUsuario->setLoginUsuario( @$_POST['txt_loginusuario'] );
$objUsuario->SetDataDeNascimento( @$_POST ['data_nasc'] );
$objUsuario->setSenha(@$_POST['txt_senha'] );
$objUsuario->setSenha2(@$_POST['txt_senha2']);

if( ! $objUsuario->ValidarCadastro() ) {
    echo "Erro no preenchimento do formulário !";
    header("refresh:3;url=cad.html" );

} else  {
    if( $objUsuario->Cadastrar() ) {
        echo "Cadastro realizado com sucesso !";
        header("refresh:2;url=login.html" );

    }
    else
    {
        echo "Erro ao cadastrar ";
        header("refresh:3;url=cad.html" );
    }
}




?>