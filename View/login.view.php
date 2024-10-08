<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Patas do Cerrado</title>
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
            background-image: url("assets/imagens/dog.jpg");
            background-size: cover;
            background-position: center;
            color: white;
        }

        .login-container {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            position: relative;
        }

        .login-container h2 {
            margin-bottom: 20px;
        }

        .login-container .form-group {
            margin-bottom: 20px;
        }

        .login-container .btn-primary {
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 1.2rem;
            background-color: #ff7f00;
            border: none;
            transition: background-color 0.3s ease;
        }

        .login-container .btn-primary:hover {
            background-color: #ff7f00;
        }

        .login-container .form-text {
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
    </style>
</head>

<body>
    <div class="login-container">
        <a href="home" class="home-icon"><i class="fas fa-home"></i></a>
        <h2 class="text-center">Login</h2>
        <form method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Seu Email">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Sua Senha">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
            <small class="form-text text-center">Ainda não tem uma conta? <a href="register">Registre-se</a></small>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
