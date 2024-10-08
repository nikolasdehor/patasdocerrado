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
            background-image: url("assets/imagens/dog02.jpg");
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


        .logo {
              display: block;
                 margin: 0 0 20px 120px; 
                 max-width: 500px;
                 height: auto;
                  animation: slideInRight 0.8s ease-out; 
}

        .highlights {
            background-color: rgba(0, 0, 0, 0.7); /
            padding: 10px; 
            border-radius: 100px; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); 
            margin-top: 20px; 
        }

        .highlight-icons {
            text-align: center;
            padding: 5px; 
        }

        .highlight-icons i {
            font-size: 30px; 
        }

        .highlight-icons h3 {
            margin-top: 5px; 
            font-size: 16px;
            font-weight: bold; 
            color: #fff;
        }

        .highlight-icons p {
            font-size: 14px; 
            color: #ddd; 
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
    <!-- Hero Section -->
    <section class="hero">
    <div class="container hero-text">
        <!-- Logo -->
        <img src="assets/imagens/Logo/Logopng.png" alt="Logo" class="logo">

        <h1>Encontre seu novo melhor amigo!</h1>
       
        <!-- Botões -->
        <div class="btn-container">

            <a href="AnimaisAdotar" class="btn btn-lg btn-primary">Ver Pets para Adoção</a>

            <a href="FinaisFelizes" class="btn btn-lg btn-primary">Finais Felizes</a>
            <br><br><br><br><br><br><br><br>
        </div>
        <div class="highlights">
            <div class="row">
                <div class="col-md-4 highlight-icons">
                    <i class="fas fa-heart"></i>
                    <h3>Adote</h3>
                    <p>Adote com amor!</p>
                </div>
                <div class="col-md-4 highlight-icons">
                    <i class="fas fa-paw"></i>
                    <h3>Adoção</h3> 
                    <p>Ajude um pet a encontrar um novo lar!</p> 
                </div>
                <div class="col-md-4 highlight-icons">
                    <i class="fas fa-home"></i>
                    <h3>Parcerias</h3>
                    <p>Fazemos parcerias com prefeituras e ONGs</p>
                </div>
            </div>
        </div>
        
           
</section>



    <div class="content">
        <!-- About Us -->
        <section id="about" class="about-us bg-light">
            <div class="container">
                <h2 class="text-center">Sobre Nós</h2>
                <p class="text-center">Nossa missão é encontrar lares amorosos para cada pet.</p>
                <div class="row">
                    <div class="col-md-6">
                        <h3>Nossa História</h3>
                        <p>Fundada com amor e dedicação, a Patas do Cerrado tem a missão de proporcionar um lar acolhedor para todos os pets. Nossa equipe é composta por amantes de animais que se dedicam diariamente para cuidar e encontrar lares para nossos amigos peludos.</p>
                    </div>
                    <div class="col-md-6 values">
                        <h3>Valores</h3>
                        <ul>
                            <li>Amor</li>
                            <li>Cuidado</li>
                            <li>Respeito</li>
                            <li>Compromisso</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Adopt a Pet -->
        <section id="adopt" class="py-5">
            <div class="container">
                <h2 class="text-center">Adote um Pet</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card pet-card mb-4">
                            <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Pet 1">
                            <div class="card-body">
                                <h5 class="card-title">Rex</h5>
                                <p class="card-text">2 anos, macho, brincalhão e amigável.</p>
                                <a href="adopt?pet=rex" class="btn btn-primary">Mais Informações</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card pet-card mb-4">
                            <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Pet 2">
                            <div class="card-body">
                                <h5 class="card-title">Luna</h5>
                                <p class="card-text">1 ano, fêmea, amorosa e carinhosa.</p>
                                <a href="adopt?pet=luna" class="btn btn-primary">Mais Informações</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card pet-card mb-4">
                            <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Pet 3">
                            <div class="card-body">
                                <h5 class="card-title">Bobby</h5>
                                <p class="card-text">3 anos, macho, ativo e leal.</p>
                                <a href="adopt?pet=bobby" class="btn btn-primary">Mais Informações</a>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative">
                        <div class="position-absolute top-50 start-50 translate-middle">    
                            <a href="AnimaisAdotar" class="btn btn-primary">Ver mais</a>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Success Stories -->
        <section id="success-stories" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center">Histórias de Sucesso</h2>
                <p class="text-center">Veja algumas das histórias de adoção bem-sucedidas que nos inspiram.</p>
                <div class="row success-stories">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Story 1">
                            <div class="card-body">
                                <h5 class="card-title">Max e sua nova família</h5>
                                <p class="card-text">Max foi adotado por uma família amorosa e agora vive feliz com seus novos donos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Story 2">
                            <div class="card-body">
                                <h5 class="card-title">Bella encontrou seu lar</h5>
                                <p class="card-text">Bella agora tem um lar cheio de amor e carinho, graças à Patas do Cerrado.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Story 3">
                            <div class="card-body">
                                <h5 class="card-title">Rocky e sua jornada</h5>
                                <p class="card-text">Rocky foi resgatado e agora vive feliz com sua nova família.</p>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative">
                        <div class="position-absolute top-50 start-50 translate-middle">    
                            <a href="FinaisFelizes" class="btn btn-primary">Ver mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="py-5">
            <div class="container">
                <h2 class="text-center">Contato</h2>
                <form class="contact-form">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" placeholder="Seu Nome">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Seu Email">
                    </div>
                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea class="form-control" id="message" rows="3" placeholder="Sua Mensagem"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <footer class="footer py-4 mt-auto">
        <div class="container text-center">
            <p>&copy; 2024 Patas do Cerrado. Todos os direitos reservados.</p>
            <div class="social-icons">
                <a href="#" class="text-white mr-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white mr-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        // Script para atualizar o favicon de acordo com o tema do sistema
        const setFavicon = (theme) => {
            const favicon = document.querySelector('link[rel="icon"]');
            if (theme === 'dark') {
                favicon.href = 'assets/imagens/paw-white.svg';
            } else {
                favicon.href = 'assets/imagens/paw.svg';
            }
        };

        const matchMediaDark = window.matchMedia('(prefers-color-scheme: dark)');
        matchMediaDark.addEventListener('change', (e) => setFavicon(e.matches ? 'dark' : 'light'));
        setFavicon(matchMediaDark.matches ? 'dark' : 'light');

        // Script para scroll suave
        document.querySelectorAll('.navbar-nav a, .hero a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                if (this.hash !== "") {
                    e.preventDefault();
                    const hash = this.hash;
                    document.querySelector(hash).scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>

</html>
