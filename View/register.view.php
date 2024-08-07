<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar - Patas do Cerrado</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('assets/imagens/dog.jpg');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .register-container {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 50rem;
            position: relative;
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
    </style>
</head>

<body>
    <div class="register-container">
        <a href="home" class="home-icon"><i class="fas fa-home"></i></a>
        <h2 class="text-center">Registrar</h2>
        <form id="registerForm" onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
            <div class="row user-info">
                <div class="col">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu Nome" required>
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Sua Senha" required>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Seu CPF" required>
                    </div>
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
                <div class="col">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Seu Email" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmar-senha">Confirmar Senha</label>
                        <input type="password" class="form-control" id="confirmar-senha" name="confirmar-senha" placeholder="Confirme sua Senha" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Seu Telefone" required>
                    </div>
                    <div class="form-group">
                        <label for="imagem">Insira uma Imagem de perfil:</label>
                        <input type="file" id="imagem" name="imagem" accept="image/*">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <button class="btn btn-primary btn-block" type="submit">Registrar</button>
                </div>
            </div>
            <small class="form-text text-center">Já tem uma conta? <a href="login">Login</a></small>
        </form>
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
