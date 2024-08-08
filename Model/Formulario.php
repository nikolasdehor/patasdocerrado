<?php

    class Formulario extends Model{

        public function listarTabela($tabela){
            $this->table = $tabela;
            $order = "ID ASC";
            $fields = "ID, nome";
            $result = $this->select(null, null, $order, null, $fields);;
            return ($result);
        }
    }