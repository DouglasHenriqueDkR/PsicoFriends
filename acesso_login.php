<?php

   $email = $_POST['email'];
   $senha = $_POST['senha'];

   if( $email == "" || $senha == "" ) {
        ?>
        <meta http-equiv="refresh" content="5; URL='login.html'"/>
        <?php
   }

   include "carregaclasses.php";
   
   $objUsuario = new Usuarios();
   $objAtendente = new Atendentes();
  
   setcookie("tipologin","", time() + (86400 * 30), "/"); // 86400 = 1 day
   setcookie("usuarioid","" , time() + (86400 * 30), "/");
   setcookie("atendenteid","" , time() + (86400 * 30), "/");
   setcookie("login","" , time() + (86400 * 30), "/"); 

   if( $objUsuario->ValidarLogin( $email, $senha )) 
   {
       //echo "Usuário encontrado ! ".$objUsuario->getUsuarioId();
       setcookie("tipologin", "USUARIO", time() + (86400 * 30), "/"); // 86400 = 1 day
       setcookie("usuarioid", $objUsuario->getUsuarioId() , time() + (86400 * 30), "/");
       setcookie("login", $objUsuario->getNome(), time() + (86400 * 30), "/"); 
       
    //   echo "UsuarioId:".$_COOKIE['usuarioid']."/Tipo:".$_COOKIE['tipologin']."/Login:".$_COOKIE['login']."/";
        ?>
       <meta http-equiv="refresh" content="5; URL='home.php'"/>  
        <?php
   }
   else
   {
       if( $objAtendente->ValidarLogin( $email, $senha )) {
            
            setcookie("tipologin", "ATENDENTE", time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie("atendenteid", $objAtendente->GetAtendenteId() , time() + (86400 * 30), "/"); 
            setcookie("login", $objAtendente->getNome(), time() + (86400 * 30), "/"); 
        
            echo "Atendente encontrado !";
            ?>
            <meta http-equiv="refresh" content="5; URL='home.php'"/>
            <?php
       }

       else
       {
       echo "Login não encontrado ou senha inválida!";
       ?>
        <meta http-equiv="refresh" content="5; URL='login.html'"/>
        <?php
       }
   }

   ?>