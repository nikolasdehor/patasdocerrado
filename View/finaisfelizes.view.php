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
                .card {
                    display: flex;
                    flex-direction: column;
                    height: 95%;
                }
                .card img{
                    height: 20rem;
                    object-fit: cover;
                }

                .card-body {
                    flex-grow: 1; 
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between; 
                }
                .btn-primary{
                    background-color: #ff7f00;
                    border: none;
                    transition: background-color 0.3s ease;
                }
                .btn-primary:hover {
                    background-color: #cc6600;
                }

                h2{
                    border-bottom: solid;
                    border-color: #ff7f00;
                }
            </style>

        </head>
        <body>
            <div class="container pt-4 pb-5 bg-light">
                <h2>
                    Finais Felizes
                </h2>
                <div class="container-fluid p-3">
                    <div class="row">
                        <form id="animaisAdotarForm" class="d-flex center" method="POST">
                            <div class="row g-3">
                                <div class="form-group col-4">
                                    <select class="form-select" id="especie_ID" name="especie_ID" form="animaisAdotarForm">
                                        <option value="0">
                                            Todos as Espécies
                                        </option>
                                        <?php 
                                            foreach ($especies as $x){
                                        ?>
                                            <option value="<?php echo $x->ID;
                                            ?>">
                                                <?php echo $x->nome;
                                                ?>
                                            </option>
                                        <?php 
                                            }
                                        ?>
                                    </select>
                                </div> 
                                <script type="text/javascript">
                                    document.getElementById('especie_ID').value = "<?php echo $_POST['especie_ID'];?>";
                                </script>
                                <div class="form-group col-4">
                                    <select class="form-select" id="genero_ID" name="genero_ID" form="animaisAdotarForm">
                                        <option value="0">
                                            Todos os Gêneros
                                        </option>
                                        <?php 
                                            foreach ($generos as $x){
                                        ?>
                                            <option value="<?php echo $x->ID;
                                            ?>">
                                                <?php echo $x->nome;
                                                ?>
                                            </option>
                                        <?php 
                                            }
                                        ?>
                                    </select>
                                </div> 
                                <script type="text/javascript">
                                    document.getElementById('genero_ID').value = "<?php echo $_POST['genero_ID'];?>";
                                </script>
                                <div class="form-group col-4">
                                    <select class="form-select" id="porte_ID" name="porte_ID" form="animaisAdotarForm">
                                        <option value="0">
                                            Todos os Portes
                                        </option>
                                        <?php 
                                            foreach ($portes as $x){
                                        ?>
                                            <option value="<?php echo $x->ID;
                                            ?>">
                                                <?php echo $x->nome;
                                                ?>
                                            </option>
                                        <?php 
                                            }
                                        ?>
                                    </select>
                                </div> 
                                <script type="text/javascript">
                                    document.getElementById('porte_ID').value = "<?php echo $_POST['porte_ID'];?>";
                                </script>
                                <div class="form-group col-4">
                                    <select class="form-select" id="cidade_ID" name="cidade_ID" form="animaisAdotarForm">
                                        <option value="0">
                                            Todas as Cidades
                                        </option>
                                        <?php 
                                            foreach ($cidades as $x){
                                        ?>
                                            <option value="<?php echo $x->ID;
                                            ?>">
                                                <?php echo $x->nome;
                                                ?>
                                            </option>
                                        <?php 
                                            }
                                        ?>
                                    </select>
                                </div> 
                                <script type="text/javascript">
                                    document.getElementById('cidade_ID').value = "<?php echo $_POST['cidade_ID'];?>";
                                </script>
                                <div class="form-group col-5">
                                    <input form="animaisAdotarForm" class="form-control" name="pesquisa" id="pesquisa" type="search" value="" placeholder="Pesquisar nome" aria-label="Search">
                                </div>
                                <script type="text/javascript">
                                    document.getElementById('pesquisa').value = "<?php echo $_POST['pesquisa'];?>";
                                </script>
                                <div class="col-3">
                                    <button class="btn btn-primary col-12" type="submit">Buscar</button>
                                </div>
                            </div> 
                        </form>
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
                                <h4>Não há animais cadastrados</h4>
                            <?php
                        }
                    ?>
                </div>
            </div>
            
        </body>
    </html>