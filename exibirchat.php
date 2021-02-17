<?php
    $atendimentoId = @$_GET['codigo']; 
    $objMensa = new AtendimentoMensagens();
    // trata o post
    $mensagem = @$_POST['mensagem'];
    //echo "cookie:".@$_COOKIE['usuarioid']."#atendenteid:".@$_COOKIE['atendenteid']."#";
    
    $tipoAcesso = @$_COOKIE['atendenteid'] != "" ? "A" : "U";
    
    if( $mensagem != '' ) {
      if( ! $objMensa->CriarNovo($atendimentoId, $tipoAcesso, $mensagem )) {
          echo "erro na inserção da mensagem do usuário, tente novamente";
      }
    }
  
    $listamsg = $objMensa->ListarMensagemDoAtendimento($atendimentoId);

    foreach($listamsg as $value){
        if( $value->GetOrigem() == "A" ) 
        {   ?>
            
          <div class="balao2">
            <?php echo substr( $value->GetDataHora(), 11, 8)." - ".$value->GetTexto(); ?>
          </div>
  
  
<?php   }
        else
        {  ?>
          
          <div class="balao3">
            <?php echo substr( $value->GetDataHora(), 11,8)." - ".$value->GetTexto(); ?>
          </div>
  
<?php   }
        
      }

?>