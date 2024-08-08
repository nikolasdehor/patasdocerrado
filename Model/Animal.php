<?php

    class Animal extends Model{
        protected $table = "animal";


        public function inserirInformacoes($animal_ID, $cuidado = [], $temperamento = [], $convivio = [], $sociabilidade = []){
            $animalInfo = new AnimalInformacao();
            $informacao['animal_ID'] = $animal_ID;
            if(!empty($cuidado)){
                foreach ($cuidado as $x) {
                    $tabela = "cuidadoveterinario";
                    $informacao['tipoCuidadoVeterinario_ID'] = $x;
                    $animalInfo->inserir($tabela, $informacao);
                }
                unset($informacao['tipoCuidadoVeterinario_ID']);
            }
            if(!empty($temperamento)){
                foreach ($temperamento as $x) {
                    $tabela = "temperamento";
                    $informacao['tipoTemperamento_ID'] = $x;
                    $animalInfo->inserir($tabela, $informacao);
                }
                unset($informacao['tipoTemperamento_ID']);
            }
            if(!empty($convivio)){
                foreach ($convivio as $x) {
                    $tabela = "convivio";
                    $informacao['tipoConvivio_ID'] = $x;
                    $animalInfo->inserir($tabela, $informacao);
                }
                unset($informacao['tipoConvivio_ID']);
            }
            if(!empty($sociabilidade)){
                foreach ($sociabilidade as $x) {
                    $tabela = "sociabilidade";
                    $informacao['tipoSociabilidade_ID'] = $x;
                    $animalInfo->inserir($tabela, $informacao);
                }
                unset($informacao['tipoSociabilidade_ID']);
            }
        }
    }