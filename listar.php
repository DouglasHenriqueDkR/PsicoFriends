<?php
    include "classes/class.Usuarios.php";

    $objUsuarios = new Usuarios("exemplofila1", "root", "" );

    $lista = $objUsuarios->Listar();
    if( ! isset($lista))
    {
        echo "Erro, não foram encontrados resultados !";
    }

    

    while( $usuario = $lista->fetchObject())
    {
        echo $usuario->nome;
    
    }

    ?>



<style> 