<?php
    setcookie("tipologin", "", time() - (86400 * 30), "/"); // 86400 = 1 day
    setcookie("login", "", time() - (86400 * 30), "/"); 
    setcookie("usuarioid", time() - (86400 * 30), "/"); 
    setcookie("atendenteid", time() - (86400 * 30), "/"); 
    setcookie("administradorid", time() - (86400 * 30), "/"); 
       
?>
<meta http-equiv="refresh" content="2; URL='login.html'"/>
        