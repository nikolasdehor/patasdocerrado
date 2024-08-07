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

        .hero {
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 20px;
            position: relative;
            min-height: 50vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 40px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .hero .btn-primary {
            padding: 10px 30px;
            font-size: 1.2rem;
            border-radius: 25px;
            background-color: rgba(255, 127, 0, 0.8);
            border: none;
        }

        .hero .btn-primary:hover {
            background-color: rgba(255, 127, 0, 1);
        }

        .pet-details {
            padding: 60px 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            margin-top: 20px;
        }

        .pet-details h2 {
            margin-bottom: 30px;
            font-weight: bold;
        }

        .pet-details .pet-info {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .pet-details .pet-info img {
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .pet-details .pet-info h3 {
            margin-bottom: 15px;
            font-weight: bold;
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

    <!-- Hero Section -->
    <section class="hero" id="heroSection">
        <div class="container">
            <h1 id="petName">Nome do Pet</h1>
            <p id="petDescription">Descrição do Pet</p>
        </div>
    </section>

    <div class="content">
        <!-- Pet Details -->
        <section class="pet-details">
            <div class="container">
                <div class="pet-info">
                    <img id="petImage" src="https://via.placeholder.com/400x300" alt="Imagem do Pet">
                    <h3 id="petNameDetail">Nome do Pet</h3>
                    <p id="petDetails">Detalhes sobre o pet...</p>
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
                description: '2 anos, macho, brincalhão e amigável.',
                image: 'https://via.placeholder.com/400x300',
                details: 'Rex é um cachorro muito amigável e cheio de energia. Ele adora brincar e está procurando um lar amoroso.'
            },
            luna: {
                name: 'Luna',
                description: '1 ano, fêmea, amorosa e carinhosa.',
                image: 'https://via.placeholder.com/400x300',
                details: 'Luna é uma cadelinha doce e carinhosa. Ela adora receber carinho e se dá bem com outros animais.'
            },
            bobby: {
                name: 'Bobby',
                description: '3 anos, macho, ativo e leal.',
                image: 'https://via.placeholder.com/400x300',
                details: 'Bobby é um cão leal e cheio de energia. Ele está à procura de uma família ativa que possa acompanhá-lo em suas aventuras.'
            }
        };

        const pet = pets[petName.toLowerCase()];

        if (pet) {
            document.getElementById('petName').textContent = pet.name;
            document.getElementById('petDescription').textContent = pet.description;
            document.getElementById('petImage').src = pet.image;
            document.getElementById('petNameDetail').textContent = pet.name;
            document.getElementById('petDetails').textContent = pet.details;
        } else {
            document.getElementById('petName').textContent = 'Pet não encontrado';
            document.getElementById('petDescription').textContent = 'Detalhes não disponíveis';
            document.getElementById('petImage').style.display = 'none';
            document.getElementById('petNameDetail').textContent = 'Pet não encontrado';
            document.getElementById('petDetails').textContent = 'Detalhes não disponíveis';
        }
    </script>
</body>

</html>
