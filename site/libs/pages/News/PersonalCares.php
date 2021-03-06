<?php

//require_once('../../php/class/connection.class.php');

//$connection = new Connection();

//$query = $connection->searchNewsPersonalCares();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Notícias - Cuidados Pessoais</title>
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
                                <a href="Animals.php"><button class="btn btn-light">Animais</button></a><span class="border border-top-0 border-left-0 border-bottom-0"></span>
                                <a href="Business.php"><button class="btn btn-light">Finanças Empresariais</button></a><span class="border border-top-0 border-left-0 border-bottom-0"></span>
                                <a href="Education.php"><button class="btn btn-light">Educação</button></a><span class="border border-top-0 border-left-0 border-bottom-0"></span>
                                <a href="HealthFood.php"><button class="btn btn-light">Alimentação</button></a><span class="border border-top-0 border-left-0 border-bottom-0"></span>
                                <a href="PersonalCares.php"><button class="btn btn-light active">Cuidados Pessoais</button></a><span class="border border-top-0 border-left-0 border-bottom-0"></span>
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
                        <?php //while ($line = $query->fetch_assoc()) {
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
                            <a href="personalcares/new1.php" class="text-decoration-none text-reset">
                                <div class="row">
                                    <div class="col-3">
                                        <img class="rounded mx-auto d-bolck img-fluid justify-align-middle" src="../../images/news/xPequenos-gestos-contra-o-coronavirus.jpg.pagespeed.ic.CKOkT8GJ85.jpg" alt="">
                                    </div>
                                    <div class="col bg-light rounded">
                                        <div class="container mx-auto d-block">
                                            <div class="row h-25 bg-dark rounded mt-2 mb-2 pt-3 pb-1 justify-content-center">
                                                <p class="text-white font-weight-bold text-center text-uppercase">Saiba quais são os cuidados pessoais necessários para evitar o contágio pela</p>
                                                <p class="text-white font-weight-bold text-center text-uppercase">Covid-19</p>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row h-75 text-justify">
                                                <p>Ainda restam muitas dúvidas sobre os cuidados para evitar a contaminação pelo novo coronavírus, que causa a Covid-19. Embora as principais recomendações continuem sendo as do isolamento social, para quem pode ficar em casa, e da higienização constante das mãos, além do uso da máscara nas saídas essenciais, há outras medidas que ajudam a evitar a doença.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="container bg-primary pt-4 pr-4 pb-4 mb-3 rounded shadow">
                            <a href="personalcares/new2.php" class="text-decoration-none text-reset">
                                <div class="row">
                                    <div class="col-3">
                                        <img class="rounded mx-auto d-bolck img-fluid justify-align-middle" src="../../images/news/iStock-1209879833.jpg" alt="">
                                    </div>
                                    <div class="col bg-light rounded">
                                        <div class="container mx-auto d-block">
                                            <div class="row h-25 bg-dark rounded mt-2 mb-2 pt-3 pb-1 justify-content-center">
                                                <p class="text-white font-weight-bold text-uppercase">Higiene pessoal em tempos de Covid-19</p>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row h-75 text-justify">
                                                <p>Quando se fala dos hábitos de higiene pessoal, logo vem à sua mente tomar banho ou escovar os dentes? Sem dúvida essas atitudes são importantes para a saúde, mas para afastar o risco de doenças, principalmente em tempos de pandemia da Covid-19, vale a pena incorporar alguns outros cuidados ao seu dia a dia.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="container bg-primary pt-4 pr-4 pb-4 mb-3 rounded shadow">
                            <a href="personalcares/new3.php" class="text-decoration-none text-reset">
                                <div class="row">
                                    <div class="col-3">
                                        <img class="rounded mx-auto d-bolck img-fluid justify-align-middle" src="../../images/news/hora-de-se-prevenir-1584128319601_v2_900x506.jpg" alt="">
                                    </div>
                                    <div class="col bg-light rounded">
                                        <div class="container mx-auto d-block">
                                            <div class="row h-25 bg-dark rounded mt-2 mb-2 pt-3 pb-1 justify-content-center">
                                                <p class="text-white font-weight-bold text-center text-uppercase">Coronavírus: cuidados que você deve ter para se prevenir da covid-19</p>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row h-75 text-justify">
                                                <p>O número de casos de covid-19 cresce dia após dias no Brasil e, por isso, as pessoas estão cada vez mais preocupadas com os cuidados que devem tomar para se prevenir. Não é por menos. Afinal, o novo coronavírus tem a capacidade de se espalhar rapidamente e, na maioria das vezes, é transmitido quando o doente ainda não apresenta sintomas.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="container bg-primary pt-4 pr-4 pb-4 mb-3 rounded shadow">
                            <a href="personalcares/new4.php" class="text-decoration-none text-reset">
                                <div class="row">
                                    <div class="col-3">
                                        <img class="rounded mx-auto d-bolck img-fluid justify-align-middle" src="../../images/news/alcool-gel-risco-queimadura-660x372.jpg" alt="">
                                    </div>
                                    <div class="col bg-light rounded">
                                        <div class="container mx-auto d-block">
                                            <div class="row h-25 bg-dark rounded mt-2 mb-2 pt-3 pb-1 justify-content-center">
                                                <p class="text-white font-weight-bold text-uppercase">HIGIENE PESSOAL E DOS AMBIENTES COMO FORMA DE PREVENÇÃO À COVID-19</p>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row h-75 text-justify">
                                                <p>Estamos vivendo um período muito difícil em todos os países. Uma pandemia sem precedentes no mundo contemporâneo que mudou a forma que nos comportamos e como cuidamos dos nossos hábitos de higiene.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="container bg-primary pt-4 pr-4 pb-4 mb-3 rounded shadow">
                            <a href="personalcares/new5.php" class="text-decoration-none text-reset">
                                <div class="row">
                                    <div class="col-3">
                                        <img class="rounded mx-auto d-bolck img-fluid justify-align-middle" src="../../images/news/257756ee79d07c68d322e5cf0b6d0e6e_L.jpg" alt="">
                                    </div>
                                    <div class="col bg-light rounded">
                                        <div class="container mx-auto d-block">
                                            <div class="row h-25 bg-dark rounded mt-2 mb-2 pt-3 pb-1 justify-content-center">
                                                <p class="text-white font-weight-bold text-center text-uppercase">Coronavírus (COVID-19): mudança de hábitos é essencial para evitar a disseminação do vírus</p>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row h-75 text-justify">
                                                <p>A Organização Mundial da Saúde (OMS) decretou nesta semana estado de pandemia em decorrência do coronavírus (COVID-19). O Hospital Pequeno Príncipe, ciente de seu papel de referência em atendimento pediátrico e na proteção de crianças e adolescentes, vem orientar a sociedade a adotar cuidados essenciais a fim de prevenir o risco de contágio ou transmissão de infecções respiratórias, incluindo o coronavírus (COVID-19). É muito importante que cada pessoa aja com responsabilidade, praticando o autocuidado, além de estender os cuidados aos meninos e meninas sob sua responsabilidade.</p>
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