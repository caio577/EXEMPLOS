<?php
class Carro{
//lista de atributos
    public $cor;
    public $qtd_porta;
    public $velocidade_maxima;
    public $velocidade_atual;

    //lista de metodos
    public function acelerar ($valor_aceleracao){
        $this->velocidade_atual = 
            $this->velocidade_atual + $valor_aceleracao*$tempo; 

    }

    public function frear($valor_frenagem, $tempo){
        $this->velocidade_atual =
        $this->velocidade_atual - $valor_frenagem*$tempo;

    }

    public function virar($lado){


    }
    
}







?>