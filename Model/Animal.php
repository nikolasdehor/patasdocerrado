<?php

    class Animal extends Model{
        protected $table = "animal";

        function listarAnimais($data = []){
            if(!empty($data)){
                $keys = array_keys($data);
                $query = "SELECT animal.ID, animal.nome AS 'animalNome', cidade.nome AS 'cidadeNome' FROM animal INNER JOIN cidade ON animal.cidade_ID = cidade.ID WHERE ";
                if(!empty($data)){
                    
                }
                $query = trim($query, " && ");
                $query.= " ORDER BY animal.$this->order_column $this->order_type";
                show($data);
                show($query);
                $result = $this->query($query, $data);
            }else{
                $query = "SELECT animal.ID, animal.nome AS 'animalNome', cidade.nome AS 'cidadeNome' FROM animal INNER JOIN cidade ON animal.cidade_ID = cidade.ID ORDER BY $this->order_column $this->order_type;";
                $result = $this->query($query); 
            }
            return $result;
        }
    }