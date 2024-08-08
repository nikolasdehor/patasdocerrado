<?php
    
    class FinaisFelizes extends Controller{
        public function index(){
            $animais = new Animal();
            $form = new Formulario();
            $data['especies'] = $form->listarTabela('especie');
            $data['generos'] = $form->listarTabela('genero');
            $data['portes'] = $form->listarTabela('porte');
            $data['cidades'] = $form->listarTabela('cidade');

            $join = "cidade ON animal.cidade_ID = cidade.ID";
            $order = "animal.ID DESC";
            $fields = "animal.ID, animal.nome AS 'animalNome', cidade.nome AS 'cidadeNome'";
            $where['animal.statusAdocao_ID'] = "statusAdocao_ID = 2";

            if($_SERVER['REQUEST_METHOD']=='POST'){
                if($_POST['especie_ID'] != 0){
                    $where['animal.especie_ID'] = "animal.especie_ID =".$_POST['especie_ID'];
                }
                if($_POST['genero_ID'] != 0){
                    $where['animal.genero_ID'] = "animal.genero_ID =".$_POST['genero_ID'];
                }
                if($_POST['porte_ID'] != 0){
                    $where['animal.porte_ID'] = "animal.porte_ID =".$_POST['porte_ID'];
                }
                if($_POST['cidade_ID'] != 0){
                    $where['animal.cidade_ID'] = "animal.cidade_ID =".$_POST['cidade_ID'];
                }
                if($_POST['pesquisa'] != ""){
                    $where['animal.nome'] = "animal.nome LIKE '".$_POST['pesquisa']."%'";
                }
            }
            $where = implode(" AND ", $where);
            $data['animais'] = $animais->select($join, $where, $order, null, $fields);
            $this->view('animaisadotar', $data);
        }
    }