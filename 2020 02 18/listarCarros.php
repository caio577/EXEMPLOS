<?php
include "classCarro.php";

include "cabecalho.php";
?>
Objetos "Carro" instanciados no sistema:

<?php 
    foreach($_SESSION["carro"] as $c) {
        echo "
            cor: <span style='color:$c->cor'>$c->cor</span><br />
            Quantidade Portas: $c->qtd_porta <br />
            Velocidade Máxima: $c->velocidade_maxima <br />
            Quantidade Portas: $c->velocidade_atual 
            <hr />";
        
        
        
    }

?>
</body>
</html>
