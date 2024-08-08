<?php

    class AnimalInformacao extends Model{
        
        public function inserir($table, $informacoes = []){
            $this->table = $table;
            $this->insert($informacoes);
        }
    }