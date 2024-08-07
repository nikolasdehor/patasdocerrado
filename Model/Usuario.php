<?php

    class Usuario extends Model{
        protected $table = "usuario";

        public function validar($data){
            show($data);
            $where = "email = '".$data['email']."' AND senha = '".$data['senha']."'";
            $result = $this->select(null, $where);
            if(!empty($result)){
                return true;
            }
            return false;
        }
    }