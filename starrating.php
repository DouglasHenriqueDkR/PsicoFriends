<?php
    $atendimentoId = @$_GET['codigo']; 
?>
    <!-- Trigger/Open The Modal -->

    <form action="encerraAtendimento.php?codigo=<?php echo $atendimentoId; ?>" method="POST">

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Avalie o atendimento:</h2>
            </div>
            <div class="modal-body">
                <span class="">Motivo do encerramento</span>

                <select name="motivo" id="motivo">
                    <option value="">Selecione</option>
                    <option value="1">Não tenho mais o que falar</option>
                    <option value="2">A atendente não responde</option>
                    <option value="3">Não gostei da atendente</option>
                </select>
                <br>
                <textarea rows="4" cols="50" name="comentario" placeholder="preencha com seu comentário"></textarea>
                <br>

                <a href="javascript:void(0)" onclick="Avaliar(1)">
                    <img src="img/star0.png" id="s1"></a>

                <a href="javascript:void(0)" onclick="Avaliar(2)">
                    <img src="img/star0.png" id="s2"></a>

                <a href="javascript:void(0)" onclick="Avaliar(3)">
                    <img src="img/star0.png" id="s3"></a>

                <a href="javascript:void(0)" onclick="Avaliar(4)">
                    <img src="img/star0.png" id="s4"></a>

                <a href="javascript:void(0)" onclick="Avaliar(5)">
                    <img src="img/star0.png" id="s5"></a>

                <input type="hidden" name="rating" id="rating" value="0">
            </div>
            <div class="modal-footer">
                <input type="submit" value="Enviar" size="30px">
            </div>
        </div>
    </div>
</form>

<script>
    function Avaliar(valor) {
        var s1 = document.getElementById("s1").src = "img/star1.png";
        var s2 = document.getElementById("s2").src = "img/star1.png";
        var s3 = document.getElementById("s3").src = "img/star1.png";
        var s4 = document.getElementById("s4").src = "img/star1.png";
        var s5 = document.getElementById("s5").src = "img/star1.png";

        if (valor < 5)
            document.getElementById("s5").src = "img/star0.png";

        if (valor < 4)
            document.getElementById("s4").src = "img/star0.png";

        if (valor < 3)
            document.getElementById("s3").src = "img/star0.png";

        if (valor < 2)
            document.getElementById("s2").src = "img/star0.png";

        if (valor < 1)
            document.getElementById("s1").src = "img/star0.png";

        document.getElementById("rating").value = valor;
    }
</script>

<style>
    /* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #00a8ff;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: white;
  color: white;
}

input[type=submit], input[type=reset] {
    background-color:  #00a8ff;
    border: 1px solid white;
    color: white;
    padding:10px;
    text-decoration: none;
    margin: 6px 2px;
    cursor: pointer;
    width: 100%;
    border-radius: 4px;
  }
</style>