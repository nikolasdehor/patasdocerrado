<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patas do Cerrado</title>
    <link rel="icon" href="/assets/imagens/paw.svg" type="image/svg+xml">
    <link href="assets/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/javascript/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="assets/css/dropdown.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
        }

        .navbar {
            background: rgba(0, 0, 0, 0.7);
            border-bottom: 1px solid #000000;
            padding: 10px 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            width: 100%;
            position: fixed;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand img {
            height: 40px;
        }

        .navbar-brand i {
            font-size: 1.75rem;
            margin-right: 10px;
            color: #ff7f00;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            margin-right: 20px;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #ff7f00;
        }

        .navbar-nav .btn-primary {
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 1rem;
            background-color: #ff7f00;
            border: none;
            transition: background-color 0.3s ease;
        }

        .navbar-nav .btn-primary:hover {
            background-color: #cc6600;
        }

        .navbar .nav-img {
            padding-right: 5rem;
        }

        .hero {
            background-image: url("assets/imagens/dog.jpg");
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 20px;
            position: relative;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            overflow: hidden;
        }

        .hero h1,
        .hero p,
        .hero .btn-primary {
            animation: slideInRight 1s forwards;
            opacity: 0;
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            max-width: 400px;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 40px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
            max-width: 400px;
        }

        .hero .btn-primary {
            padding: 10px 30px;
            font-size: 1.2rem;
            border-radius: 25px;
            background-color: rgba(255, 127, 0, 0.8);
            border: none;
            max-width: 400px;
        }

        .hero .btn-primary:hover {
            background-color: rgba(255, 127, 0, 1);
        }

        .highlight-icons {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .highlight-icons i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: #ff7f00;
            transition: transform 0.3s ease;
        }

        .highlight-icons i:hover {
            transform: scale(1.2);
        }

        .highlight-icons h3 {
            margin-top: 10px;
            font-weight: bold;
        }

        .highlight-icons p {
            color: #6c757d;
        }

        .pet-card {
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .pet-card:hover {
            transform: scale(1.05);
        }

        .pet-card img {
            width: 100%;
            height: auto;
            display: block;
        }

        .pet-card .card-body {
            padding: 20px;
        }

        .card-title {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .btn-primary {
            background-color: #ff7f00;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #cc6600;
        }

        .success-stories .card {
            margin-bottom: 20px;
            border-radius: 15px;
            transition: transform 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .success-stories .card:hover {
            transform: scale(1.05);
        }

        .footer {
            background-color: #343a40;
            color: white;
            position: relative;
            width: 100%;
        }

        .footer a {
            color: #ff7f00;
        }

        .footer a:hover {
            text-decoration: none;
        }

        .about-us {
            padding: 60px 0;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }

        .about-us h2 {
            margin-bottom: 30px;
            font-weight: bold;
        }

        .about-us .col-md-6 {
            margin-bottom: 30px;
        }

        .about-us .values ul {
            list-style: none;
            padding: 0;
        }

        .about-us .values ul li {
            padding-left: 25px;
            position: relative;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .about-us .values ul li:before {
            content: '\f058';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: #ff7f00;
        }

        .contact-form .btn-primary {
            border-radius: 25px;
            padding: 10px 30px;
            font-size: 1.2rem;
            background-color: #ff7f00;
            border: none;
        }

        .contact-form .btn-primary:hover {
            background-color: #cc6600;
        }

        .highlights {
            position: absolute;
            bottom: 50px;
            left: 10%;
            transform: translateX(-50%);
            width: 80%;
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-around;
            animation: slideUp 1s forwards;
            opacity: 0;
        }

        @keyframes slideUp {
            from {
                transform: translateY(100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .highlights .highlight-icons {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .highlights h3,
        .highlights p {
            color: white;
            text-align: center;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .hero .btn-primary {
                padding: 8px 20px;
                font-size: 1rem;
            }

            .highlights {
                bottom: -30px;
                width: 90%;
                padding: 15px;
                flex-direction: column;
            }

            .highlight-icons h3 {
                font-size: 1.2rem;
            }

            .highlight-icons p {
                font-size: 0.9rem;
            }

            .hero h1,
            .hero p,
            .hero .btn-primary {
                max-width: 100%;
                margin-left: 0;
                text-align: center;
            }

            .highlights .highlight-icons {
                flex-direction: column;
            }
        }

        .hero-text {
            text-align: -webkit-right;
        }

        .user-info{
            background-color: #E3E3E3;
        }
        
        .card{
            border:none;
            background-color: #E3E3E3;
            min-height: 10rem;
        }

        .card-title{
            color: #ff7f00;
        }

        .modal-title{
            color: #ff7f00;
        }
    </style>
</head>
<body>
    <?php
        if(!empty($_SESSION['USUARIO'])){
            include ("View/header/navLogado.php");
        }else{
            include ("View/header/nav.php");
        }
    ?>
    <br><br><br><br>
    <div class="container-fluid">
        <div class="container user-info rounded">
            <div = row>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="assets/imagens/UserPlaceholder.jpg" class="img-fluid rounded" alt="Foto de Perfil Usuário">
                        </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">
                                <?php
                                    echo $usuario[0]->nome;
                                ?>
                            </h3>
                            <h6 class="card-subtitle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ff7f00" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                                </svg>
                                Goiás, 
                                <?php
                                    echo $usuario[0]->cidade;
                                ?>
                            </h6>
                            <p class="card-text">
                                <?php
                                    echo $usuario[0]->descricao;
                                ?>
                            </p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalContatos">
                                Meus contatos
                            </button>
                            <div class="modal fade" id="modalContatos" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Quer saber mais sobre meus pets?</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Entre em contato com este usuário para saber mais!
                                        <br>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ff7f00" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                        </svg>
                                        <strong>
                                        <?php
                                            echo $usuario[0]->telefone;
                                        ?>
                                        </strong>
                                        <br>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#ff7f00" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                        </svg>
                                        <strong>
                                        <?php
                                            echo $usuario[0]->email;
                                        ?>
                                        </strong>
                                        <br>
                                    </div>
                                    <div class="modal-footer">
                                        <em>*Adote com responsabilidade! Um gesto de amor pode mudar duas vidas para sempre.*</em>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                if(!empty($animais)){
                    foreach($animais as $x){
            ?>
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="card" style="width: 100%">
                    <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Pet 1">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php
                                echo $x->animalNome;
                            ?>
                        </h5>
                        <p class="card-text">
                            <?php
                                echo $x->cidadeNome;
                            ?>
                        </p>
                        <a href="adopt?pet=rex" class="btn btn-primary">Mais Informações</a>
                    </div>
                </div>
            </div>
                            
            <?php
                            
                }
            }else{
                    ?>
                        <h4>Este usuário não inseriu nenhum animal</h4>
                    <?php
                }
            ?>
                </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
