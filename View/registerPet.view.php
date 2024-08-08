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
            margin-right: 0.5rem;
            border-radius: 10px;
            font-size: 1rem;
            background-color: #C3C3C3;
            border-style: solid;
            border-color: #7F7F7F;
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
                                <label for="especie">Espécie</label>
                                <input type="text" class="form-control" id="especie" name="especie" placeholder="Selecione a espécie" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="especie">Gênero</label>
                                <input type="text" class="form-control" id="especie" name="especie" placeholder="Selecione a espécie" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="especie">Idade</label>
                                <input type="text" class="form-control" id="especie" name="especie" placeholder="Selecione a espécie" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="especie">Porte</label>
                                <input type="text" class="form-control" id="especie" name="especie" placeholder="Selecione a espécie" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="cidade">Selecione sua cidade</label><br>
                                <select class="form-select rounded" id="cidade_ID" name="cidade_ID" form="registerForm">
                                    <?php 
                                        foreach ($data as $cidade){
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
                                <textarea class="form-control" id="descricao" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="col-4">
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1" class="form-label">Foto Principal</label>
                                <input type="file" class="form-control" id="especie" name="especie" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                            <div class="form-group">
                                <label for="cuidados-veterinarios" class="form-label">Cuidados Veterinários</label>
                                <div class="row row-cols-4">
                                    <input type="checkbox" class="btn-check" id="btn-castrado" autocomplete="off">
                                    <label class="btn btn-primary" for="btn-castrado">Castrado</label>
                                    <input type="checkbox" class="btn-check" id="btn-vacinado" autocomplete="off">
                                    <label class="btn btn-primary" for="btn-vacinado">Vacinado</label>
                                    <input type="checkbox" class="btn-check" id="btn-vermifugado" autocomplete="off">
                                    <label class="btn btn-primary" for="btn-vermifugado">Vermifugado</label>
                                </div>
                                <div class="row row-cols-2">
                                    <input type="checkbox" class="btn-check" id="btn-vermifugado" autocomplete="off">
                                    <label class="btn btn-primary" for="btn-cuidados-especiais">Cuidados Especiais</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cuidados-veterinarios" class="form-label">Temperamento</label>
                                <div class="row row-cols-4">
                                    <input type="checkbox" class="btn-check" id="btn-docil" autocomplete="off">
                                    <label class="btn btn-primary" for="btn-docil">Dócil</label>
                                    <input type="checkbox" class="btn-check" id="btn-agressivo" autocomplete="off">
                                    <label class="btn btn-primary" for="btn-agressivo">Agressivo</label>
                                    <input type="checkbox" class="btn-check" id="btn-vermifugado" autocomplete="off">
                                    <label class="btn btn-primary" for="btn-vermifugado">Vermifugado</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cuidados-veterinarios" class="form-label">Cuidados Veterinários</label>
                                <div class="row row-cols-4">
                                    <input type="checkbox" class="btn-check" id="btn-castrado" autocomplete="off">
                                    <label class="btn btn-primary" for="btn-castrado">Castrado</label>
                                    <input type="checkbox" class="btn-check" id="btn-vacinado" autocomplete="off">
                                    <label class="btn btn-primary" for="btn-vacinado">Vacinado</label>
                                    <input type="checkbox" class="btn-check" id="btn-vermifugado" autocomplete="off">
                                    <label class="btn btn-primary" for="btn-vermifugado">Vermifugado</label>
                                </div>
                                <div class="row row-cols-2">
                                    <input type="checkbox" class="btn-check" id="btn-vermifugado" autocomplete="off">
                                    <label class="btn btn-primary" for="btn-cuidados-especiais">Cuidados Especiais</label>
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
