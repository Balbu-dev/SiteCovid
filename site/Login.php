<!doctype html>
<html lang="pt-br">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="container-fluid bg-primary text-white shadow">
            <div class="container">
                <a href="index.php"><img src="libs/images/Logo.png" class="rounded mx-auto d-block img-fluid" alt="Saúde Logo" id="logo"></a>
            </div>
        </div>
        <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="index.php" class="nav-link text-white">Página Inicial</a></li>
                <li class="nav-item dropdown"><a href="libs/pages/News.php" class="nav-link dropdown bg-dark text-white" data-toggle="dropdown">Notícias</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="libs/pages/news/Animals.php">Animais</a>
                        <a class="dropdown-item" href="libs/pages/news/Business.php">Finanças Empresariais</a>
                        <a class="dropdown-item" href="libs/pages/news/Education.php">Educação</a>
                        <a class="dropdown-item" href="libs/pages/news/HealthFood.php">Alimentação</a>
                        <a class="dropdown-item" href="libs/pages/news/PersonalCares.php">Cuidados Pessoais</a>
                        <a class="dropdown-item" href="libs/pages/news/PersonalFinances.php">Finanças Pessoais</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a href="libs/pages/Statistics.php" class="nav-link dropdown bg-dark text-white" data-toggle="dropdown">Estatísticas</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="libs/pages/statistics/World.php">Mundo</a>
                        <a class="dropdown-item" href="libs/pages/statistics/Brazil.php">Brasil</a>
                        <a class="dropdown-item" href="libs/pages/statistics/States.php">Estados</a>
                        <a class="dropdown-item" href="libs/pages/statistics/Citys.php">Cidades</a>
                    </div>
                </li>
                <li class="nav-item"><a href="libs/pages/Form.php" class="nav-link text-white">Pesquisa</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="container-fluid">
            <div class="container shadow pt-3 pb-3 mt-3 mb-3">
                <div class="bg-secondary text-white pt-2 pb-2">
                    <p class="font-weight-bold text-center align-middle display-4">Login</p>
                </div>
                <div class="container mt-5">
                    <form action="logon.php" method="get">
                        <div class="form-group">
                            <div class="form-inline row ml-3 mb-2">
                                <label for="user" class="col justify-content-end"">Usuário:</label>
                                <div class=" col-7 justify-content-start">
                                    <input type="text" class="form-control" name="user" id="user">
                            </div>
                        </div>
                        <div class="form-inline row ml-3 mb-2">
                            <label for="password" class="col justify-content-end">Senha:</label>
                            <div class="col-7 justify-content-start">
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                        </div>
                        <div class="row form-inline justify-content-center mt-3">
                            <button type="submit" class="btn btn-primary w-25">Logar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>

    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>