<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar - Patas do Cerrado</title>
    <link href="assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/javascript/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('assets/imagens/dog.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
        }
        
        .register-container {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            min-width: 50rem;
            max-width:60rem;
            border-radius: 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .register-container h2 {
            margin-bottom: 20px;
        }

        .register-container .form-group {
            margin-bottom: 20px;
        }

        .form-select {
            height: 2.5rem;
            width: 100%;
        }

        .register-container .btn-primary {
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 1.2rem;
            background-color: #ff7f00;
            border: none;
            transition: background-color 0.3s ease;
        }

        .form-group .btn-primary {
            border-radius: 10px;
            font-size: 1rem;
            background-color: #FFFFFF;
            border-style: solid;
            border-color: #C3C3C3;
            color: #000000;
            transition: background-color 0.3s ease;
        }
        .form-group .btn-primary:checked {
            background-color: #ff7f00;
            color: white;
        }

        .register-container .btn-primary:hover {
            background-color: #ff7f00;
        }

        .register-container .form-text {
            color: #ddd;
        }

        .home-icon {
            position: absolute;
            top: 10px;
            left: 10px;
            color: white;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        .home-icon:hover {
            color: #ffc107;
        }

        .address-container {
            display: none;
        }

        hr{
            height: 1px;
            background: black;
        }
    </style>
</head>

<body>
    <div class="container min-vh-150 d-flex justify-content-center align-items-center">
        <div class="register-container">
            <a href="home" class="home-icon"><i class="fas fa-home"></i></a>
            <h2 class="text-center">Registrar</h2>
            <div class="container d-flex justify-content-center align-items-center">
                <form class="w-75" id="registerForm" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                    <div class="row row-cols-2">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nome">Nome do Pet*</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do seu pet" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="especie_ID">Espécie</label>
                                <select class="form-select rounded" id="especie_ID" name="especie_ID" form="registerForm">
                                    <?php 
                                        foreach ($especies as $especie){
                                    ?>
                                        <option value="<?php echo $especie->ID;
                                        ?>">
                                            <?php echo $especie->nome;
                                            ?>
                                        </option>
                                    <?php 
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="genero_ID">Gênero</label>
                                <select class="form-select rounded" id="genero_ID" name="genero_ID" form="registerForm">
                                    <?php 
                                        foreach ($generos as $genero){
                                    ?>
                                        <option value="<?php echo $genero->ID;
                                        ?>">
                                            <?php echo $genero->nome;
                                            ?>
                                        </option>
                                    <?php 
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="idade">Idade</label>
                                <select class="form-select rounded" id="idade_ID" name="idade_ID" form="registerForm">
                                    <?php 
                                        foreach ($idades as $idade){
                                    ?>
                                        <option value="<?php echo $idade->ID;
                                        ?>">
                                            <?php echo $idade->nome;
                                            ?>
                                        </option>
                                    <?php 
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="especie">Porte</label>
                                <select class="form-select rounded" id="porte_ID" name="porte_ID" form="registerForm">
                                    <?php 
                                        foreach ($portes as $porte){
                                    ?>
                                        <option value="<?php echo $porte->ID;
                                        ?>">
                                            <?php echo $porte->nome;
                                            ?>
                                        </option>
                                    <?php 
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="cidade">Cidade</label><br>
                                <select class="form-select rounded" id="cidade_ID" name="cidade_ID" form="registerForm">
                                    <?php 
                                        foreach ($cidades as $cidade){
                                    ?>
                                        <option value="<?php echo $cidade->ID;
                                        ?>">
                                            <?php echo $cidade->nome;
                                            ?>
                                        </option>
                                    <?php 
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="descricao" class="form-label">Descrição</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="4" form="registerForm"></textarea>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label for="foto" class="form-label">Foto Principal</label>
                                <input type="file" accept="image/*" class="form-control" id="foto" name="foto">
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                            <div class="form-group">
                                <label for="cuidados-veterinarios" class="form-label">Cuidados Veterinários</label>
                                <div class="row row-cols-4" id="cuidados-veterinarios">
                                    <input type="checkbox" class="btn-check" id="btn-castrado" name="btn-castrado" value=1 autocomplete="off">
                                    <label class="btn btn-primary" for="btn-castrado">Castrado</label>
                                    <input type="checkbox" class="btn-check" id="btn-vacinado" name="btn-vacinado" value=2 autocomplete="off">
                                    <label class="btn btn-primary" for="btn-vacinado">Vacinado</label>
                                    <input type="checkbox" class="btn-check" id="btn-vermifugado" name="btn-vermifugado" value=3 autocomplete="off">
                                    <label class="btn btn-primary" for="btn-vermifugado">Vermifugado</label>
                                </div>
                                <div class="row row-cols-2">
                                    <input type="checkbox" class="btn-check" id="btn-cuidados-especiais" name="btn-cuidados-especiais" value=4 autocomplete="off">
                                    <label class="btn btn-primary" for="btn-cuidados-especiais">Cuidados Especiais</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="temperamento" class="form-label">Temperamento</label>
                                <div class="row row-cols-4" id="temperamento">
                                    <input type="checkbox" class="btn-check" id="btn-docil" name="btn-docil" value=1 autocomplete="off">
                                    <label class="btn btn-primary" for="btn-docil">Dócil</label>

                                    <input type="checkbox" class="btn-check" id="btn-agressivo" name="btn-agressivo" value=2 autocomplete="off">
                                    <label class="btn btn-primary" for="btn-agressivo">Agressivo</label>

                                    <input type="checkbox" class="btn-check" id="btn-calmo" name="btn-calmo" value=3 autocomplete="off">
                                    <label class="btn btn-primary" for="btn-calmo">Calmo</label>

                                    <input type="checkbox" class="btn-check" id="btn-brincalhao" name="btn-brincalhao" value=4 autocomplete="off">
                                    <label class="btn btn-primary" for="btn-brincalhao">Brincalhão</label>

                                    <input type="checkbox" class="btn-check" id="btn-sociavel" name="btn-sociavel" value=5 autocomplete="off">
                                    <label class="btn btn-primary" for="btn-sociavel">Sociável</label>
                                    
                                    <input type="checkbox" class="btn-check" id="btn-arisco" name="btn-arisco" value=6 autocomplete="off">
                                    <label class="btn btn-primary" for="btn-arisco">Arisco</label>

                                    <input type="checkbox" class="btn-check" id="btn-independente" name="btn-independente" value=7 autocomplete="off">
                                    <label class="btn btn-primary" for="btn-independente">Independente</label>

                                    <input type="checkbox" class="btn-check" id="btn-carente" name="btn-carente" value=8 autocomplete="off">
                                    <label class="btn btn-primary" for="btn-carente">Carente</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="convivio" class="form-label">Convívio</label>
                                <div class="row row-cols-4" id="convivio">
                                    <input type="checkbox" class="btn-check" id="btn-casa-com-quintal" name="btn-casa-com-quintal" value=1 autocomplete="off">
                                    <label class="btn btn-primary col-4" for="btn-casa-com-quintal">Casa com quintal</label>
                                    <input type="checkbox" class="btn-check" id="btn-apartamento" name="btn-apartamento" value=2 autocomplete="off">
                                    <label class="btn btn-primary" for="btn-apartamento">Apartamento</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sociabilidade" class="form-label">Sociabilidade</label>
                                <div class="row row-cols-4" id="sociabilidade">
                                    <input type="checkbox" class="btn-check" id="btn-cachorros" name="" value=1 autocomplete="off">
                                    <label class="btn btn-primary" for="btn-cachorros">Cachorros</label>
                                    <input type="checkbox" class="btn-check" id="btn-gatos" name="btn-gatos" value=2 autocomplete="off">
                                    <label class="btn btn-primary" for="btn-gatos">Gatos</label>
                                    <input type="checkbox" class="btn-check" id="btn-desconhecidos" name="btn-desconhecidos" value=3 autocomplete="off">
                                    <label class="btn btn-primary" for="btn-desconhecidos">Desconhecidos</label>
                                    <input type="checkbox" class="btn-check" id="btn-criancas" name="btn-criancas" value=4 autocomplete="off">
                                    <label class="btn btn-primary" for="btn-criancas">Crianças</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <button class="btn btn-primary btn-block" type="submit">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        function validateForm() {
            const name = document.getElementById('nome').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('senha').value;
            const confirmPassword = document.getElementById('confirmar-senha').value;
            const phone = document.getElementById('telefone').value;
            const cpf = document.getElementById('senha').value;

            if (!name || !email || !password || !confirmPassword || !phone || !cpf) {
                alert('Por favor, preencha todos os campos.');
                return false;
            }

            if (password !== confirmPassword) {
                alert('As senhas não coincidem.');
                return false;
            }
            return true;
        }
    </script>
</body>

</html>
