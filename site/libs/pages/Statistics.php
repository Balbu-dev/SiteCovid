<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Estatísticas</title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="container-fluid bg-primary text-white shadow">
            <div class="container">
                <a href="../../index.php"><img src="../images/Logo.png" class="rounded mx-auto d-block img-fluid" alt="Saúde Logo" id="logo"></a>
            </div>
        </div>
        <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="../../index.php" class="nav-link text-white">Página Inicial</a></li>
                <li class="nav-item dropdown"><a href="News.php" class="nav-link dropdown bg-dark text-white" data-toggle="dropdown">Notícias</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="news/Animals.php">Animais</a>
                        <a class="dropdown-item" href="news/Business.php">Finanças Empresariais</a>
                        <a class="dropdown-item" href="news/Education.php">Educação</a>
                        <a class="dropdown-item" href="news/HealthFood.php">Alimentação</a>
                        <a class="dropdown-item" href="news/PersonalCares.php">Cuidados Pessoais</a>
                        <a class="dropdown-item" href="news/PersonalFinances.php">Finanças Pessoais</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a href="Statistics.php" class="nav-link dropdown bg-dark text-white" data-toggle="dropdown">Estatísticas</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="statistics/World.php">Mundo</a>
                        <a class="dropdown-item" href="statistics/Countries.php">Países</a>
                        <a class="dropdown-item" href="statistics/States.php">Estados</a>
                        <a class="dropdown-item" href="statistics/Citys.php">Cidades</a>
                    </div>
                </li>
                <li class="nav-item"><a href="Form.php" class="nav-link text-white">Pesquisa</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="container-fluid">
            <div class="container shadow pt-3 pb-3 mt-3 mb-3">
                <div class="bg-secondary text-white pt-2 pb-2">
                    <p class="font-weight-bold text-center align-middle display-4">Estatísticas<p>
                </div>
                <div class="container">
                    <div class="row mt-4 mb-4">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <a href="statistics/World.php" class="stretched-link"><img class="card-img-top img-fluid" src="..\Images\media-movel-mundo.png" alt=""></a>
                                </div>
                                <div class="card-body bg-primary">
                                    <p class="card-title text-white text-center font-weight-bold ">Mundo</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <a href="statistics/Countries.php" class="stretched-link"><img class="card-img-top img-fluid" src="..\Images\media-movel-brasil.png" alt=""></a>
                                </div>
                                <div class="card-body bg-primary">
                                    <p class="card-title text-white text-center font-weight-bold ">Países</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row mt-4 mb-4">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <a href="statistics/States.php" class="stretched-link"><img class="card-img-top img-fluid" src="..\Images\media-movel-rs.png" alt=""></a>
                                </div>
                                <div class="card-body bg-primary">
                                    <p class="card-title text-white text-center font-weight-bold ">Estados</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <a href="statistics/Citys.php" class="stretched-link"><img class="card-img-top img-fluid" src="..\Images\media-movel-portoalegre.png" alt=""></a>
                                </div>
                                <div class="card-body bg-primary">
                                    <p class="card-title text-white text-center font-weight-bold ">Cidades</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container-fluid bg-dark">
            <div class="row pt-3 pb-3">
                <div class="col-sm-4">
                    <p class="text-center h8 font-weight-bold text-uppercase text-white">Menu</p>
                    <a href="../../index.php">
                        <p class="text-center">Página Principal</p>
                    </a>
                    <a href="TipsPrevention.php">
                        <p class="text-center">Prevenção</p>
                    </a>
                    <a href="News.php">
                        <p class="text-center">Notícias</p>
                    </a>
                    <a href="Statistics.php">
                        <p class="text-center">Estatísticas</p>
                    </a>
                    <a href="Form.php">
                        <p class="text-center">Pesquisa</p>
                    </a>
                </div>
                <div class="col-sm-4">
                    <p class="text-center h8 font-weight-bold text-uppercase text-white">Notícias</p>
                    <a href="news/Animals.php">
                        <p class="text-center">Animais</p>
                    </a>
                    <a href="news/Business.php">
                        <p class="text-center">Finanças Empresariais</p>
                    </a>
                    <a href="news/Education.php">
                        <p class="text-center">Educação</p>
                    </a>
                    <a href="news/HealthFood.php">
                        <p class="text-center">Alimentação</p>
                    </a>
                    <a href="news/PersonalCares.php">
                        <p class="text-center">Cuidados Pessoais</p>
                    </a>
                    <a href="news/PersonalFinances.php">
                        <p class="text-center">Finanças Pessoais</p>
                    </a>
                </div>
                <div class="col-sm-4">
                    <p class="text-center h8 font-weight-bold text-uppercase text-white">Estatísticas</p>
                    <a href="statistics/World.php">
                        <p class="text-center">Mundo</p>
                    </a>
                    <a href="statistics/Countries.php">
                        <p class="text-center">Países</p>
                    </a>
                    <a href="statistics/States.php">
                        <p class="text-center">Estados</p>
                    </a>
                    <a href="statistics/Citys.php">
                        <p class="text-center">Cidades</p>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>