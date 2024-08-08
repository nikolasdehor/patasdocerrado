<?php

    class Animal extends Model{
        protected $table = "animal";

        public function inserirInformacoes($animal_ID, $cuidado = [], $temperamento = [], $convivo = [], $sociabilidade = []){
            if(!empty($cuidado)){
                show($cuidado);
            }
        }
    }