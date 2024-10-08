<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="home"><i class="fas fa-paw"></i> Patas do Cerrado</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="#">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#adopt">Adote</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#success-stories">Histórias de Sucesso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contato</a>
                </li>
                <li class="nav-item nav-img">
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <img src="assets/imagens/UserPlaceholder.jpg" class="rounded-circle">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                            <li><span class="dropdown-item-text">
                                <?php
                                    echo $usuario[0]->nome;
                                ?>
                            </span>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="perfilusuario">Meu Perfil</a></li>
                            <li><a class="dropdown-item" href="registeranimal">Cadastrar um Animal</a></li>
                            <li><a class="dropdown-item" href="#">Altera Senha</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout">Sair</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>