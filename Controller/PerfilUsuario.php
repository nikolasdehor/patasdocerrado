<?php

    class PerfilUsuario extends Controller{
        public function index(){
            if(empty($_SESSION)){
                $data['usuario'] = 'Usuário';
            }else{
                $usuario = new usuario();
                $data['usuario'] = $_SESSION['USUARIO'];
                $join = "cidade ON usuario.cidade_ID = cidade.ID";
                $fields = "cidade.nome AS 'cidadeNome'";
                $where = "usuario.ID = ".$data['usuario'][0]->ID;
                $data['usuario'][0]->cidade = $usuario->select($join,$where, null, null, $fields)[0]->cidadeNome;
            }
            $this->view('perfilusuario', $data);
        }
    }
