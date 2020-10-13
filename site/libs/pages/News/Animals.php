<?php

//require_once('../../php/class/connection.class.php');

//$connection = new Connection();

//$query = $connection->searchNewsAnimals();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Notícias - Animais</title>
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
                <a href="../../../index.php"><img src="../../images/logo/Logo.png" class="rounded mx-auto d-block img-fluid" alt="Saúde Logo" id="logo"></a>
            </div>
        </div>
        <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="../../../index.php" class="nav-link text-white">Página Inicial</a></li>
                <li class="nav-item dropdown"><a href="../News.php" class="nav-link dropdown bg-dark text-white" data-toggle="dropdown">Notícias</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="Animals.php">Animais</a>
                        <a class="dropdown-item" href="Business.php">Finanças Empresariais</a>
                        <a class="dropdown-item" href="Education.php">Educação</a>
                        <a class="dropdown-item" href="HealthFood.php">Alimentação</a>
                        <a class="dropdown-item" href="PersonalCares.php">Cuidados Pessoais</a>
                        <a class="dropdown-item" href="PersonalFinances.php">Finanças Pessoais</a>
                    </div>
                </li>
                <li class="nav-item dropdown"><a href="../Statistics.php" class="nav-link dropdown bg-dark text-white" data-toggle="dropdown">Estatísticas</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="../statistics/World.php">Mundo</a>
                        <a class="dropdown-item" href="../statistics/Brazil.php">Brasil</a>
                        <a class="dropdown-item" href="../statistics/States.php">Estados</a>
                        <a class="dropdown-item" href="../statistics/Citys.php">Cidades</a>
                    </div>
                </li>
                <li class="nav-item"><a href="../Form.php" class="nav-link text-white">Pesquisa</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <div class="container-fluid">
            <div class="container shadow pt-3 pb-3 mt-3 mb-3">
                <div class="bg-secondary text-white pt-2 pb-2">
                    <p class="font-weight-bold text-center align-middle display-4">Notícias<p>
                </div>
                <div class="container">
                    <div class="container w-100 mx-auto mb-2 pt-1">
                        <div class="row">
                            <div class="btn-group border rounded-lg mr-5">
                                <a href="Animals.php"><button class="btn btn-light active">Animais</button></a><span class="border border-top-0 border-left-0 border-bottom-0"></span>
                                <a href="Business.php"><button class="btn btn-light">Finanças Empresariais</button></a><span class="border border-top-0 border-left-0 border-bottom-0"></span>
                                <a href="Education.php"><button class="btn btn-light">Educação</button></a><span class="border border-top-0 border-left-0 border-bottom-0"></span>
                                <a href="HealthFood.php"><button class="btn btn-light">Alimentação</button></a><span class="border border-top-0 border-left-0 border-bottom-0"></span>
                                <a href="PersonalCares.php"><button class="btn btn-light">Cuidados Pessoais</button></a><span class="border border-top-0 border-left-0 border-bottom-0"></span>
                                <a href="PersonalFinances.php"><button class="btn btn-light">Finanças Pessoais</button></a>
                            </div>
                            <!-- <form action="#" method="get">
                                <div class="form-inline">
                                    <div class="form-inline ml-5">
                                        <select name="search-fpr" id="search-for" class="form-control mr-1">
                                            <option value="newest">Mais recentes</option>
                                            <option value="oldest">Mais antigas</option>
                                        </select>
                                        <button class="btn btn-light ml-1 border rounded-lg" type="submit">
                                            <i class="fa fa-search" aria-hidden="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16">
                                                    <path fill-rule="evenodd" d="M11.5 7a4.499 4.499 0 11-8.998 0A4.499 4.499 0 0111.5 7zm-.82 4.74a6 6 0 111.06-1.06l3.04 3.04a.75.75 0 11-1.06 1.06l-3.04-3.04z"></path>
                                                </svg>
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </form> -->
                        </div>
                    </div>
                    <div class="container pt-3 pb-3">
                        <?php // while ($line = $query->fetch_assoc()) {
                        //$titles = $line['title'];
                        //$imgs = $line['img'];
                        //$news = $line['new'];
                        ?>
                        <!-- <div class="container pt-3 pb-3">
                                <div class="container bg-primary pt-4 pr-4 pb-4 mb-3 rounded shadow">
                                    <a href="news/New.php" class="text-decoration-none text-reset">
                                        <div class="row">
                                            <div class="col-3">
                                                <img class="rounded mx-auto d-bolck img-fluid justify-align-middle" src="../../images/news/<?php //echo $imgs; 
                                                                                                                                            ?>" alt="">
                                            </div>
                                            <div class="col bg-light rounded">
                                                <div class="container mx-auto d-block">
                                                    <div class="row h-25 bg-dark rounded mt-2 mb-2 pt-3 pb-1 justify-content-center">
                                                        <p class="text-white font-weight-bold text-uppercase"><?php //echo $titles; 
                                                                                                                ?></p>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div class="row h-75 text-justify">
                                                        <p><?php //echo $news; 
                                                            ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div> -->
                        <?php //} 
                        ?>
                        <div class="container bg-primary pt-4 pr-4 pb-4 mb-3 rounded shadow">
                            <a href="animals/new1.php" class="text-decoration-none text-reset">
                                <div class="row">
                                    <div class="col-3">
                                        <img class="rounded mx-auto d-bolck img-fluid justify-align-middle" src="../../images/news/20200724180507491762a.jpg" alt="">
                                    </div>
                                    <div class="col bg-light rounded">
                                        <div class="container mx-auto d-block">
                                            <div class="row h-25 bg-dark rounded mt-2 mb-2 pt-3 pb-1 justify-content-center">
                                                <p class="text-white font-weight-bold text-uppercase">Coronavírus em animais domésticos: entenda se há risco</p>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row h-75 text-justify">
                                                <p>Após o episódio em que um cão de nove anos foi sacrificado na Carolina do Sul por apresentar diagnóstico de coronavírus, o tema “COVID-19 em animais domésticos” têm sido bastante discutido. Entre outros questionamentos, pessoas têm dúvidas se os pets podem transmitir a doença para humanos, se qualquer animal doméstico é capaz de contraí-la e se os donos devem tomar cuidados com seus animais durante a quarentena.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="container bg-primary pt-4 pr-4 pb-4 mb-3 rounded shadow">
                            <a href="animals/new2.php" class="text-decoration-none text-reset">
                                <div class="row">
                                    <div class="col-3">
                                        <img class="rounded mx-auto d-bolck img-fluid justify-align-middle" src="../../images/news/whatsapp-image-2020-04-29-at-15.39.10.jpeg" alt="">
                                    </div>
                                    <div class="col bg-light rounded">
                                        <div class="container mx-auto d-block">
                                            <div class="row h-25 bg-dark rounded mt-2 mb-2 pt-3 pb-1 justify-content-center">
                                                <p class="text-white font-weight-bold text-uppercase">Animais de estimação podem carregar a Covid-19 na pelagem;</p>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row h-75 text-justify">
                                                <p>Com o avanço do novo coronavírus pelo Brasil, surgem preocupações e dúvidas na população em diversos assuntos. Um deles é em relação à Covid-19 e os animais de estimação. Ainda não há evidências de transmissão da doença entre humanos e animais, segundo o Conselho Regional de Medicina Veterinária de Minas Gerais (CRMV-MG), mas é necessário ficar atento a certos cuidados durante a pandemia.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="container bg-primary pt-4 pr-4 pb-4 mb-3 rounded shadow">
                            <a href="animals/new3.php" class="text-decoration-none text-reset">
                                <div class="row">
                                    <div class="col-3">
                                        <img class="rounded mx-auto d-bolck img-fluid justify-align-middle" src="../../images/news/fotos-caes-e-gatos-1537878669005_v2_450x600.jpg" alt="">
                                    </div>
                                    <div class="col bg-light rounded">
                                        <div class="container mx-auto d-block">
                                            <div class="row h-25 bg-dark rounded mt-2 mb-2 pt-3 pb-1 justify-content-center">
                                                <p class="text-white font-weight-bold text-uppercase">Gatos contraem coronavírus e podem transmitir entre animais, aponta estudo</p>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row h-75 text-justify">
                                                <p>Um estudo divulgado ontem na renomada publicação New England Journal of Medicine confirma a suspeita de que o novo coronavírus é capaz de infectar gatos e que, provavelmente, os animais transmitam a covid-19 entre eles.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="container bg-primary pt-4 pr-4 pb-4 mb-3 rounded shadow">
                            <a href="animals/new4.php" class="text-decoration-none text-reset">
                                <div class="row">
                                    <div class="col-3">
                                        <img class="rounded mx-auto d-bolck img-fluid justify-align-middle" src="../../images/news/gatos-sao-capazes-de-responder-aos-seus-proprios-nomes-1554503168561_v2_900x506.jpg" alt="">
                                    </div>
                                    <div class="col bg-light rounded">
                                        <div class="container mx-auto d-block">
                                            <div class="row h-25 bg-dark rounded mt-2 mb-2 pt-3 pb-1 justify-content-center">
                                                <p class="text-white font-weight-bold text-uppercase">Dois gatos são os primeiros animais de estimação com covid-19 nos EUA</p>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row h-75 text-justify">
                                                <p>Dois gatos de Nova York foram diagnosticados com a covid-19, doença causada pelo novo coronavírus, e são os primeiros animais de estimação contaminados nos Estados Unidos.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="container bg-primary pt-4 pr-4 pb-4 mb-3 rounded shadow">
                            <a href="animals/new5.php" class="text-decoration-none text-reset">
                                <div class="row">
                                    <div class="col-3">
                                        <img class="rounded mx-auto d-bolck img-fluid justify-align-middle" src="../../images/news/gato-coronavc3adrus.jpg" alt="">
                                    </div>
                                    <div class="col bg-light rounded">
                                        <div class="container mx-auto d-block">
                                            <div class="row h-25 bg-dark rounded mt-2 mb-2 pt-3 pb-1 justify-content-center">
                                                <p class="text-white font-weight-bold text-uppercase">O que os gatos têm realmente a ver com o coronavírus?</p>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row h-75 text-justify">
                                                <p>A crise do novo coronavírus parece atingir todos os universos e não seria diferente com o mundo animal. Afinal de contas, diariamente saem, em todas as mídias, “notícias” de tratamentos mirabolantes contra a Covid-19, bem como receitas mágicas de como não se infectar. No meio de muita informação séria, as fake news se espalham e confundem uma população cada vez mais sensível e em pânico. E tudo isso em pouquíssimos meses: o que, na dinâmica da ciência, é um curto tempo para tantas perguntas e respostas.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
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
                    <a href="../../../index.php">
                        <p class="text-center">Página Principal</p>
                    </a>
                    <a href="../TipsPrevention.php">
                        <p class="text-center">Prevenção</p>
                    </a>
                    <a href="../News.php">
                        <p class="text-center">Notícias</p>
                    </a>
                    <a href="../Statistics.php">
                        <p class="text-center">Estatísticas</p>
                    </a>
                    <a href="../Form.php">
                        <p class="text-center">Pesquisa</p>
                    </a>
                </div>
                <div class="col-sm-4">
                    <p class="text-center h8 font-weight-bold text-uppercase text-white">Notícias</p>
                    <a href="Animals.php">
                        <p class="text-center">Animais</p>
                    </a>
                    <a href="Business.php">
                        <p class="text-center">Finanças Empresariais</p>
                    </a>
                    <a href="Education.php">
                        <p class="text-center">Educação</p>
                    </a>
                    <a href="HealthFood.php">
                        <p class="text-center">Alimentação</p>
                    </a>
                    <a href="PersonalCares.php">
                        <p class="text-center">Cuidados Pessoais</p>
                    </a>
                    <a href="PersonalFinances.php">
                        <p class="text-center">Finanças Pessoais</p>
                    </a>
                </div>
                <div class="col-sm-4">
                    <p class="text-center h8 font-weight-bold text-uppercase text-white">Estatísticas</p>
                    <a href="../statistics/World.php">
                        <p class="text-center">Mundo</p>
                    </a>
                    <a href="../statistics/Brazil.php">
                        <p class="text-center">Brasil</p>
                    </a>
                    <a href="../statistics/States.php">
                        <p class="text-center">Estados</p>
                    </a>
                    <a href="../statistics/Citys.php">
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