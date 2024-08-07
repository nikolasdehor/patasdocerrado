<?php

    class Formulario extends Model{

        public function listarTabela($tabela){
            $query = "SELECT ID, nome FROM $tabela ORDER BY $this->order_column $this->order_type;";
            $result = $this->query($query);
            return ($result);
        }
    }