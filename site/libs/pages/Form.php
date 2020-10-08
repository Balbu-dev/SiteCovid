<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Pesquisa</title>
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
                    <p class="font-weight-bold text-center align-middle display-4">Pesquisa</p>
                </div>
                <div class="container mt-3 mb-3 w-75">
                    <form action="" method="post" class="needs-validation" novalidate>
                        <div class="form-row mb-3">
                            <div class="col">
                                <div class="form-inline">
                                    <label for="email" class="mr-sm-2">E-mail:</label>
                                    <input type="email" name="email" id="email" class="form-control form-control-sm w-75" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="exemplo@mail.com">
                                    <div class="invalid-feedback">Digite um email válido</div>
                                    <div class="valid-feedback">Preenchido com sucesso</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-inline">
                                    <label for="cpf" class="mr-sm-2">Cpf:</label>
                                    <input type="number" name="cpf" id="cpf" class="form-control form-control-sm w-75" required pattern="[0-9]{11}">
                                    <div class="invalid-feedback">Digite um CPF válido!</div>
                                    <div class="valid-feedback">Preenchido com sucesso</div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <p>Você tem ou teve Covid-19?</p>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="quest1" id="sim" class="form-check-input">Sim
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="quest1" id="nao" class="form-check-input">Não
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <p>Conhece alguem que tem ou teve Covid-19?</p>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="quest2" id="sim" class="form-check-input">Sim
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" name="quest2" id="nao" class="form-check-input">Não
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <p>Se sim, qual a idade deles(as)? Pode marcar mais de uma opção.</p>
                                    <div class="form-check">
                                        <label class="form-checkbox-label">
                                            <input type="checkbox" name="quest4" id="kid" class="form-check-input">Menos de 12 anos;
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-checkbox-label">
                                            <input type="checkbox" name="quest4" id="teenager" class="form-check-input">Mais de 13 e menos de 18 anos;
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-checkbox-label">
                                            <input type="checkbox" name="quest4" id="young" class="form-check-input">Mais de 19 e menos de 30 anos;
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-checkbox-label">
                                            <input type="checkbox" name="quest4" id="adult" class="form-check-input">Mais de 31 e menos de 50 anos;
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-checkbox-label">
                                            <input type="checkbox" name="quest4" id="old" class="form-check-input"> Mais de 51 e menos de 70 anos;
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-checkbox-label">
                                            <input type="checkbox" name="quest4" id="old-man" class="form-check-input">Mais de 71 anos;
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row ml-sm-1">
                                    <div class="form-group">
                                        <p>Você já perdeu alguém por causa da Covid-19?</p>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="quest5" id="sim" class="form-check-input">Sim
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="quest5" id="nao" class="form-check-input">Não
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-sm-1">
                                    <div class="form-group">
                                        <p>Você conhece alguém que está curado(a) da Covid-19?</p>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="quest6" id="sim" class="form-check-input">Sim
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" name="quest6" id="nao" class="form-check-input">Não
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                        </div>
                    </form>
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