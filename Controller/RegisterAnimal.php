<?php

    class RegisterAnimal extends Controller{
        public function index(){
            $form = new Formulario();
            $cuidado = [];
            $temperamento = [];
            $convivio = [];
            $sociabilidade = [];

            $data['especies'] = $form->listarTabela('especie');
            $data['generos'] = $form->listarTabela('genero');
            $data['portes'] = $form->listarTabela('porte');
            $data['idades'] = $form->listarTabela('idade');
            $data['cidades'] = $form->listarTabela('cidade');
            if($_SERVER['REQUEST_METHOD']=='POST'){
                if(isset($_POST['btn-castrado'])){
                    $cuidado[] = $_POST['btn-castrado'];
                    unset($_POST['btn-castrado']);
                }
                if(isset($_POST['btn-vacinado'])){
                    $cuidado[] = $_POST['btn-vacinado'];
                    unset($_POST['btn-vacinado']);
                }
                if(isset($_POST['btn-vermifugado'])){
                    $cuidado[] = $_POST['btn-vermifugado'];
                    unset($_POST['btn-vermifugado']);
                }
                if(isset($_POST['btn-cuidados-especiais'])){
                    $cuidado[] = $_POST['btn-cuidados-especiais'];
                    unset($_POST['btn-cuidados-especiais']);
                }

                if(isset($_POST['btn-docil'])){
                    $temperamento[] = $_POST['btn-docil'];
                    unset($_POST['btn-docil']);
                }
                if(isset($_POST['btn-agressivo'])){
                    $temperamento[] = $_POST['btn-agressivo'];
                    unset($_POST['btn-agressivo']);
                }
                if(isset($_POST['btn-calmo'])){
                    $temperamento[] = $_POST['btn-calmo'];
                    unset($_POST['btn-calmo']);
                }
                if(isset($_POST['btn-brincalhao'])){
                    $temperamento[] = $_POST['btn-brincalhao'];
                    unset($_POST['btn-brincalhao']);
                }
                if(isset($_POST['btn-sociavel'])){
                    $temperamento[] = $_POST['btn-sociavel'];
                    unset($_POST['btn-sociavel']);
                }
                if(isset($_POST['btn-arisco'])){
                    $temperamento[] = $_POST['btn-arisco'];
                    unset($_POST['btn-arisco']);
                }
                if(isset($_POST['btn-independente'])){
                    $temperamento[] = $_POST['btn-independente'];
                    unset($_POST['btn-independente']);
                }
                if(isset($_POST['btn-carente'])){
                    $temperamento[] = $_POST['btn-carente'];
                    unset($_POST['btn-carente']);
                }

                if(isset($_POST['btn-casa-com-quintal'])){
                    $convivio[] = $_POST['btn-casa-com-quintal'];
                    unset($_POST['btn-casa-com-quintal']);
                }
                if(isset($_POST['btn-apartamento'])){
                    $convivio[] = $_POST['btn-apartamento'];
                    unset($_POST['btn-apartamento']);
                }

                if(isset($_POST['btn-cachorros'])){
                    $sociabilidade[] = $_POST['btn-cachorros'];
                    unset($_POST['btn-cachorros']);
                }
                if(isset($_POST['btn-gatos'])){
                    $sociabilidade[] = $_POST['btn-gatos'];
                    unset($_POST['btn-gatos']);
                }
                if(isset($_POST['btn-desconhecidos'])){
                    $sociabilidade[] = $_POST['btn-desconhecidos'];
                    unset($_POST['btn-desconhecidos']);
                }
                if(isset($_POST['btn-criancas'])){
                    $sociabilidade[] = $_POST['btn-criancas'];
                    unset($_POST['btn-criancas']);
                }
                $_POST['usuario_ID'] = $_SESSION['USUARIO'][0]->ID;
                $_POST['statusAdocao_ID'] = 1;
                $animal = new Animal();
                $ID = $animal->insert($_POST);
                $animal->inserirInformacoes($ID, $cuidado, $temperamento, $convivio, $sociabilidade);
                header("Location:index.php");
            }
            $this->view('registeranimal', $data);
        }
    }
