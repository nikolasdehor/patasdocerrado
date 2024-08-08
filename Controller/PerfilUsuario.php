<?php

    class PerfilUsuario extends Controller{
        public function index(){
            if(empty($_SESSION)){
                $data['usuario'] = 'Usuário';
            }else{
                $usuario = new usuario();
                $cidade = new cidade();
                $data['usuario'] = $_SESSION['USUARIO'];
                $join = "cidade ON usuario.cidade_ID = cidade.ID";
                $fields = "cidade.nome AS 'cidadeNome'";
                $where = "usuario.ID = ".$data['usuario'][0]->ID;
                $data['usuario'][0]->cidade = $usuario->select($join,$where, null, null, $fields)[0]->cidadeNome;

                $join = "animal ON ".$data['usuario'][0]->ID." = animal.usuario_ID INNER JOIN cidade ON animal.cidade_ID = cidade.ID";
                $order = "animal.ID DESC";
                $fields = "DISTINCT animal.ID, animal.nome AS 'animalNome', cidade.nome AS 'cidadeNome'";
                $where = "statusAdocao_ID = 1";
                $data['animais'] = $usuario->select($join, $where, $order, null, $fields);
                $data['cidades'] = $cidade->select();
            }
            $this->view('perfilusuario', $data);
        }
    }
