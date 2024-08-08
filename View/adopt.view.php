<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patas do Cerrado - Detalhes do Pet</title>
    <link rel="icon" href="assets/imagens/paw.svg" type="image/svg+xml">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="assets/css/dropdown.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
            padding-top: 100px; /* Para evitar sobreposição da navbar */
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

        .pet-details {
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            margin-top: 20px;
        }

        .pet-info {
            display: flex;
            align-items: flex-start;
        }

        .main-image-container {
            max-width: 50%;
            text-align: center;
        }

        .main-image {   /* Ajusta a base das fotos */
            width: 100%;
            height: 330px;
            max-width: 360px;
            border-radius: 50px;
            margin-bottom: 3px;
        }

        .thumbnail-images {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .thumbnail-images img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin: 0 5px;
            border-radius: 15px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .thumbnail-images img:hover {
            transform: scale(1.1);
        }

        .pet-details-text {
            max-width: 50%;
            padding-left: 20px;
        }

        .pet-details-text h3 {
            font-weight: bold;
            margin-bottom: 15px;
        }

        .pet-details-text p {
            margin-bottom: 20px;
        }

        .tags {
            margin-bottom: 20px;
        }

        .tags span {
            display: inline-block;
            background-color: #ff7f00;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            margin: 0 5px;
        }

        .btn-adopt {
            padding: 10px 20px;
            font-size: 1.2rem;
            border-radius: 20px;
            background-color: #ff7f00;
            border: none;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-adopt:hover {
            background-color: #cc6600;
        }

        .footer {
            background-color: #343a40;
            color: white;
            margin-top: auto;
            padding: 20px 0;
        }

        .footer a {
            color: #ff7f00;
        }

        .footer a:hover {
            text-decoration: none;
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

    <div class="content">
        <!-- Pet Details -->
        <section class="pet-details">
            <div class="container">
                <div class="pet-info">
                    <div class="main-image-container">
                        <img id="petImage" class="main-image" src="https://via.placeholder.com/600x400" alt="Imagem do Pet">
                        <div class="thumbnail-images">
                            <img src="https://via.placeholder.com/100x75" alt="Imagem do Pet 1">
                            <img src="https://via.placeholder.com/100x75" alt="Imagem do Pet 2">
                            <img src="https://via.placeholder.com/100x75" alt="Imagem do Pet 3">
                            <img src="https://via.placeholder.com/100x75" alt="Imagem do Pet 4">
                        </div>
                    </div>
                    <div class="pet-details-text">
                        <h3 id="petNameDetail">Nome do Pet</h3>
                        <p id="petLocation">Localidade do Pet</p>
                        <p id="petDetails">Detalhes sobre o pet...</p>
                        <div class="tags">
                            <span>Grande</span>
                            <span>Docil</span>
                            <span>Macho</span>
                        </div>
                        <button class="btn-adopt">Quero Adotar</button>
                    </div>
                </div>
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

    <script>
        // Script to fetch pet details from URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const petName = urlParams.get('pet');

        const pets = {
            rex: {
                name: 'Rex',
                location: 'Cidade X',
                description: '2 anos, macho, brincalhão e amigável.',
                image: 'https://via.placeholder.com/600x400',
                thumbnails: [
                    'https://via.placeholder.com/100x75',
                    'https://via.placeholder.com/100x75',
                    'https://via.placeholder.com/100x75',
                    'https://via.placeholder.com/100x75'
                ]
            }
        };

        if (pets[petName]) {
            document.getElementById('petNameDetail').textContent = pets[petName].name;
            document.getElementById('petLocation').textContent = pets[petName].location;
            document.getElementById('petDetails').textContent = pets[petName].description;
            document.getElementById('petImage').src = pets[petName].image;

            const thumbnails = document.querySelectorAll('.thumbnail-images img');
            thumbnails.forEach((img, index) => {
                img.src = pets[petName].thumbnails[index];
            });
        } else {
            document.getElementById('petNameDetail').textContent = 'Pet não encontrado';
            document.getElementById('petDetails').textContent = '';
        }
    </script>
</body>

</html>
