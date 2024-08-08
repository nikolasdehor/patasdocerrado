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
    <br><br><br>
    <h1>
        Perfil Usuario
    </h1>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
