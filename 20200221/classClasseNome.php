<?php
    class ClasseNome{
        private $atributo1; //Quando um atributo possui em seu corpo a limitação "PRIVATE", geralmente utilizado para limitar por acesso de conta de usuario.
        private $atributo2;
        private $atributo3;

        public function __construct($a1, $a2, $a3){
            $this->set_atributo1($a1); //sempre que houver um This estara acionando o objeto daquela classe(associa-se a "este")
            $this->set_atributo2($a2);
            $this->set_atributo3($a3);
        }

        private function set_atributo1($valor){ //Ao definir um metodo como private um outro objeto não tem acesso(forma de limitar o uso deste metodo)
            $this->atributo1 = $valor;
        }

        private function set_atributo2($valor){
            $this->atributo2 = $valor;
        }

        private function set_atributo3($valor){
            $this->atributo3 = $valor;
        }

        private function get_atributo1($valor){
            return($this->atributo1); 
        }

        private function get_atributo2($valor){
            return($this->atributo2);
        }


        private function get_atributo3($valor){
            return($this->atributo3);
        }
    }
?>