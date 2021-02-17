<?php
$objFila = new Fila();
    $objAtendimento = new Atendimento();

        $itensFila = $objFila->ListarFila();

echo "<table border='1';>
          <tr>
             <th>Posição</th>
             <th>Usuário</th>
             <th>Entrada</th>
          </tr>";
$posicao = 0;
    if( $itensFila->num_rows > 0 ) {
        while( $linha = $itensFila->fetch_assoc()) {
            $posicao++;
            
            echo "<tr><td width='10%'>".$posicao . "</td><td>".$linha['nome'] ."</td> <td align='center'; width='15%'>".formataSQLtoDateTimeBRL( $linha['datadeentrada'] )."</td></tr>";
        }

        echo "</table>";
    }
    else
    {
        echo "Não há ninguem na fila";
    }
?>    