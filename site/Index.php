<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- TITLE -->
    <title>Saúde - Covid 19</title>
    <!-- REQUIRED META TAGS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- LOGO -->
        <div class="container-fluid bg-primary text-white shadow">
            <div class="container">
                <a href="index.php"><img src="libs/images/Logo.png" class="rounded mx-auto d-block img-fluid" alt="Saúde Logo" id="logo"></a>
            </div>
        </div>
        <!-- END LOGO -->
        <!-- MENU -->
        <nav class="navbar navbar-expand-sm bg-dark justify-content-center">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="index.php" class="nav-link text-white">Página Inicial</a></li>
                <li class="nav-item dropdown"><a href="libs/pages/News.php" class="nav-link dropdown bg-dark text-white" data-toggle="dropdown">Notícias</a>
                    <!-- DROPDOWN MENU -->
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="libs/pages/news/Animals.php">Animais</a>
                        <a class="dropdown-item" href="libs/pages/news/Business.php">Finanças Empresariais</a>
                        <a class="dropdown-item" href="libs/pages/news/Education.php">Educação</a>
                        <a class="dropdown-item" href="libs/pages/news/HealthFood.php">Alimentação</a>
                        <a class="dropdown-item" href="libs/pages/news/PersonalCares.php">Cuidados Pessoais</a>
                        <a class="dropdown-item" href="libs/pages/news/PersonalFinances.php">Finanças Pessoais</a>
                    </div>
                    <!-- END DROPDOWN MENU -->
                </li>
                <li class="nav-item dropdown"><a href="libs/pages/Statistics.php" class="nav-link dropdown bg-dark text-white" data-toggle="dropdown">Estatísticas</a>
                    <!-- DROPDOWN MENU -->
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="libs/pages/statistics/World.php">Mundo</a>
                        <a class="dropdown-item" href="libs/pages/statistics/Brazil.php">Brasil</a>
                        <a class="dropdown-item" href="libs/pages/statistics/States.php">Estados</a>
                        <a class="dropdown-item" href="libs/pages/statistics/Citys.php">Cidades</a>
                    </div>
                    <!-- END DROPDOWN MENU -->
                </li>
                <li class="nav-item"><a href="libs/pages/Form.php" class="nav-link text-white">Pesquisa</a></li>
            </ul>
        </nav>
        <!-- END MENU -->
    </header>
    <!-- END HEADER -->
    <!-- SECTION -->
    <section>
        <!-- CONTAINER FLUID -->
        <div class="container-fluid">
            <!-- CONTAINER -->
            <div class="container shadow pt-3 pb-3 mt-3 mb-3">
                <!-- TITLE -->
                <div class="bg-secondary text-white pt-2 pb-2">
                    <p class="font-weight-bold text-center align-middle display-4">Covid-19</p>
                </div>
                <!-- END TITLE -->
                <!-- NAVBAR TABS -->
                <nav class="navbar navbar-expand-sm justify-content-center">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="nav-item"><a class="nav-link active text-secondary" data-toggle="tab" href="#st1">O que é o Covid-19</a></li>
                        <li class="nav-item"><a class="nav-link text-secondary" data-toggle="tab" href="#st2">Sintomas da Doença</a></li>
                        <li class="nav-item"><a class="nav-link text-secondary" data-toggle="tab" href="#st3">Como é transmitido</a></li>
                        <li class="nav-item"><a class="nav-link text-secondary" data-toggle="tab" href="#st4">Como ocorre o diagnóstico</a></li>
                        <li class="nav-item"><a class="nav-link text-secondary" data-toggle="tab" href="#st5">Como se proteger</a></li>
                        <li class="nav-item"><a class="nav-link text-secondary" data-toggle="tab" href="#st6">Se eu ficar doente</a></li>
                        <li class="nav-item"><a class="nav-link text-secondary" data-toggle="tab" href="#st7">Serviço de Saúde</a></li>
                    </ul>
                </nav>
                <!-- END NAVBAR TABS -->
                <!-- TAB CONTENT -->
                <div class="tab-content">
                    <!-- TAB PANE -->
                    <div class="tab-pane container active" id="st1">
                        <!-- SUBTITLE -->
                        <div class="subtitle">
                            <p class="text-center h3 font-weight-bold text-uppercase text-primary">O que é o Coivd-19</p>
                        </div>
                        <!-- END SUBTITLE -->
                        <!-- TEXT -->
                        <div class="text">
                            <p class="text-justify">Os coronavírus são uma grande família de vírus comuns em muitas espécies diferentes de animais, incluindo camelos, gado, gatos e morcegos. Raramente, os coronavírus que infectam animais podem infectar pessoas, como exemplo do MERS-CoV e SARS-CoV. Recentemente, em dezembro de 2019, houve a transmissão de um novo coronavírus (SARS-CoV-2), o qual foi identificado em Wuhan na China e causou a COVID-19, sendo em seguida disseminada e transmitida pessoa a pessoa.</p>
                            <p class="text-justify">A COVID-19 é uma doença causada pelo coronavírus, denominado SARS-CoV-2, que apresenta um espectro clínico variando de infecções assintomáticas a quadros graves. De acordo com a Organização Mundial de Saúde, a maioria (cerca de 80%) dos pacientes com COVID-19 podem ser assintomáticos ou oligossintomáticos (poucos sintomas), e aproximadamente 20% dos casos detectados requer atendimento hospitalar por apresentarem dificuldade respiratória, dos quais aproximadamente 5% podem necessitar de suporte ventilatório.</p>
                        </div>
                        <!-- END TEXT -->
                    </div>
                    <!-- END TAB PANE -->
                    <!-- TAB PANE -->
                    <div class="tab-pane container" id="st2">
                        <!-- SUBTITLE -->
                        <div class="subtitle">
                            <p class="text-center h3 font-weight-bold text-uppercase text-primary">Sintomas da Doença</p>
                        </div>
                        <!-- END SUBTITLE -->
                        <!-- TEXT -->
                        <div class="text">
                            <p class="text-justify">Os sintomas da COVID-19 podem variar de um resfriado, a uma Síndrome Gripal-SG (presença de um quadro respiratório agudo, caracterizado por, pelo menos dois dos seguintes sintomas: sensação febril ou febre associada a dor de garganta, dor de cabeça, tosse, coriza) até uma pneumonia severa. Sendo os sintomas mais comuns:</p>
                            <!-- UNORDERED LIST -->
                            <div class="list">
                                <ul>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Tosse;</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Febre;</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Coriza;</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Dor de garganta;</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Dificuldade de respirar;</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Perda de olfato (anosmia);</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Alteração do paladar (ageusia);</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Distúrbios gastrintestinais (náuseas/vômitos/diarreia);</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Cansaço (astenia);</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Diminuição do apetite (hiporexia);</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Dispnéia ( falta de ar);</p>
                                    </li>
                                </ul>
                            </div>
                            <!-- END UNORDERED LIST -->
                        </div>
                        <!-- END TEXT -->
                    </div>
                    <!-- END TAB PANE -->
                    <!-- TAB PANE -->
                    <div class="tab-pane container" id="st3">
                        <!-- SUBTITLE -->
                        <div class="subtitle">
                            <p class="text-center h3 font-weight-bold text-uppercase text-primary">Como é transmitido</p>
                        </div>
                        <!-- END SUBTITLE -->
                        <div class="text">
                            <p class="text-justify">A transmissão acontece de uma pessoa doente para outra ou por contato próximo por meio de:</p>
                            <!-- UNORDERED LIST -->
                            <div class="list">
                                <ul>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Toque do aperto de mão contaminadas</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Gotículas de saliva</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Espirro</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Tosse</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Catarro</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Objetos ou superfícies contaminadas, como celulares, mesas, talheres, maçanetas, brinquedos, teclados de computador etc</p>
                                    </li>
                                </ul>
                            </div>
                            <!-- END UNORDERED LIST -->
                        </div>
                        <!-- END TEXT -->
                    </div>
                    <!-- END TAB PANE -->
                    <!-- TAB PANE -->
                    <div class="tab-pane container" id="st4">
                        <!-- SUBTITLE -->
                        <div class="subtitle">
                            <p class="text-center h3 font-weight-bold text-uppercase text-primary">Diagnóstico</p>
                        </div>
                        <!-- END SUBTITLE -->
                        <!-- TEXT -->
                        <div class="text">
                            <p class="text-justify">O diagnóstico da COVID-19 pode ser realizado a partir de critérios como:</p>
                            <!-- ORDERED LIST -->
                            <div class="list">
                                <ol>
                                    <li class="font-weight-bold text-secondary h6">
                                        <p class="text-justify font-weight-bold text-uppercase text-secondary h6">O diagnóstico clínico é realizado pelo médico atendente, que deve avaliar a possibilidade da doença, principalmente, em pacientes com a associação dos seguintes sinais e sintomas:</p>
                                        <!-- UNORDERED LIST -->
                                        <ul class="font-weight-normal text-body">
                                            <li>
                                                <p class="text-justify font-italic text-muted">Febre, que pode estar presente no momento do exame clínico ou referida pelo paciente (sensação febril) de ocorrência recente;</p>
                                            </li>
                                            <li>
                                                <p class="text-justify font-italic text-muted">Sintomas do trato respiratório (por exemplo, tosse, dispneia, coriza, dor de garganta);</p>
                                            </li>
                                            <li>
                                                <p class="text-justify font-italic text-muted">Outros sintomas consistentes incluindo, mialgias, distúrbios gastrointestinais (diarreia/náuseas/vômitos), perda ou diminuição do olfato (anosmia) ou perda ou diminuição do paladar (ageusia);</p>
                                            </li>
                                        </ul>
                                        <!-- END UNORDERED LIST -->
                                        <p class="font-weight-normal text-body text-justify">Em crianças, além dos itens anteriores, considera-se também a obstrução nasal, a desidratação e a falta de apetite (inapetência), na ausência de outro diagnóstico específico.</p>
                                        <p class="font-weight-normal text-body text-justify">Em idosos, deve-se considerar também, critérios específicos de agravamento como: síncope (desmaio ou perda temporária de consciência), confusão mental, sonolência excessiva, irritabilidade e falta de apetite (inapetência).</p>
                                        <p class="font-weight-normal text-body text-justify">O diagnóstico clínico da doença, também deve ser considerado em pacientes com doença grave do trato respiratório inferior sem causa clara, como é o caso de pacientes que se apresentem em Síndrome Respiratória Aguda Grave (SRAG). Nesta síndrome o indivíduo apresenta-se em franca dispneia/desconforto respiratório/dificuldade para respirar com saturação de oxigênio (O2) menor do que 95% em ar ambiente ou coloração azulada dos lábios ou rosto (cianose) ou queixa de pressão persistente no tórax.</p>
                                        <p class="font-weight-normal text-body text-justify">Em crianças, a SRAG apresenta-se com os sinais e sintomas anteriores, devendo ser observados sinais característicos de esforço respiratório, tais como, os batimentos de asa de nariz, tiragem intercostal, e, por fim, alteração na coloração das extremidades que ficam azuladas (cianose).</p>
                                    </li>
                                    <li class="font-weight-bold text-secondary h6">
                                        <p class="text-justify font-weight-bold text-uppercase text-secondary h6">O diagnóstico clínico-epidemiológico é realizado pelo médico atendente no qual considera-se:</p>
                                        <!-- UNORDERED LIST -->
                                        <ul class="font-weight-normal text-body">
                                            <li>
                                                <p class="text-justify font-italic text-muted">casos de paciente com a associação dos sinais e sintomas supracitados ou SRAG MAIS histórico de contato próximo ou domiciliar, nos últimos 14 dias antes do aparecimento dos sintomas, com caso confirmado laboratorialmente para COVID-19 e para o qual não foi possível realizar a investigação laboratorial específica;</p>
                                            </li>
                                        </ul>
                                        <!-- END UNORDERED LIST -->
                                    </li>
                                    <li class="font-weight-bold text-secondary h6">
                                        <p class="text-justify font-weight-bold text-uppercase text-secondary h6">Diagnóstico clínico-imagem:</p>
                                        <!-- UNORDERED LIST -->
                                        <ul class="font-weight-normal text-body">
                                            <li>
                                                <p class="text-justify font-italic text-muted">caso de sintomas respiratório mais febre ou SRAG ou óbito por SRAG que não foi possível confirmar ou descartar por critério laboratorial E que apresente alterações tomográficas;</p>
                                            </li>
                                        </ul>
                                        <!-- END UNORDERED LIST -->
                                    </li>
                                    <li class="font-weight-bold text-secondary h6">
                                        <p class="text-justify font-weight-bold text-uppercase text-secondary h6">Diagnóstico laboratirial - Caso o paciente apresente os sintomas respiratórios mais febre ou SRAG. O profissional de saúde poderá solicitar os seguintes exames laboratoriais:</p>
                                        <!-- UNORDERED LIST -->
                                        <ul class="font-weight-normal text-body">
                                            <li>
                                                <p class="text-justify font-italic text-muted">De biologia molecular, (RT-PCR em tempo real) que diagnostica tanto a COVID-19, a Influenza ou a presença de Vírus Sincicial Respiratório (VSR) normalmente até o oitavo dia de início de sintomas.</p>
                                            </li>
                                            <li>
                                                <p class="text-justify font-italic text-muted">Imunológico, que detecta, ou não, a presença de anticorpos em amostras coletadas a partir do oitavo dia de início dos sintomas. Sendo eles:</p>
                                                <!-- UNORDERED LIST -->
                                                <ul>
                                                    <li>
                                                        <p class="text-justify font-italic text-muted">Ensaio imunoenzimático (Enzyme-Linked Immunosorbent Assay - ELISA);</p>
                                                    </li>
                                                    <li>
                                                        <p class="text-justify font-italic text-muted">Imunocromatografia (teste rápido) para detecção de anticorpos;</p>
                                                    </li>
                                                    <li>
                                                        <p class="text-justify font-italic text-muted">Imunoensaio por Eletroquimioluminescência (ECLIA);</p>
                                                    </li>
                                                </ul>
                                                <!-- END UNORDERED LIST -->
                                            </li>
                                            <li>
                                                <p class="text-justify font-italic text-muted">Pesquisa de antígenos: resultado reagente para SARS-CoV-2 pelo método de Imunocromatografia para detecção de antígeno;</p>
                                            </li>
                                        </ul>
                                        <!-- END UNORDERED LIST -->
                                    </li>
                                    <li class="font-weight-bold text-secondary h6">
                                        <p class="text-justify font-weight-bold text-uppercase text-secondary h6">Diagnóstico laboratorial em indivíduo assintomático (pessoa sem sintomas) que realizou:</p>
                                        <!-- UNORDERED LIST -->
                                        <ul class="font-weight-normal text-body">
                                            <li>
                                                <p class="text-justify font-italic text-muted">Exame de Biologia Molecular com resultado detectável para SARS-CoV-2 realizado pelo método RT-PCR em tempo real;</p>
                                            </li>
                                            <li>
                                                <p class="text-justify font-italic text-muted">Exame de Imunológico com resultado reagente para IgM e/ou IgA realizado pelos seguintes métodos: Ensaio imunoenzimático (ELISA) e Imunocromatografia (teste rápido) para detecção de anticorpos;</p>
                                            </li>
                                        </ul>
                                        <!-- END UNORDERED LIST -->
                                    </li>
                                </ol>
                            </div>
                            <!-- END ORDERED LIST -->
                        </div>
                        <!-- END TEXT -->
                    </div>
                    <!-- END TAB PANE -->
                    <!-- TAB PANE -->
                    <div class="tab-pane container" id="st5">
                        <!-- SUBTITLE -->
                        <div class="subtitle">
                            <p class="text-center h3 font-weight-bold text-uppercase text-primary">Como se proteger</p>
                        </div>
                        <!-- END SUBTITLE -->
                        <!-- TEXT -->
                        <div class="text">
                            <p class="text-justify">As recomendações de prevenção à COVID-19 são as seguintes:</p>
                            <!-- UNORDERED LIST -->
                            <div class="list">
                                <ul>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Lave com frequência as mãos até a altura dos punhos, com água e sabão, ou então higienize com álcool em gel 70%. Essa frequência deve ser ampliada quando estiver em algum ambiente público (ambientes de trabalho, prédios e instalações comerciais, etc), quando utilizar estrutura de transporte público ou tocar superfícies e objetos de uso compartilhado;</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Ao tossir ou espirrar, cubra nariz e boca com lenço ou com a parte interna do cotovelo;</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Não tocar olhos, nariz, boca ou a máscara de proteção fácil com as mãos não higienizadas;</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Se tocar olhos, nariz, boca ou a máscara, higienize sempre as mãos como já indicado;</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Mantenha distância mínima de 1 (um) metro entre pessoas em lugares públicos e de convívio social. Evite abraços, beijos e apertos de mãos. Adote um comportamento amigável sem contato físico, mas sempre com um sorriso no rosto;</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Higienize com frequência o celular, brinquedos das crianças e outro objetos que são utilizados com frequência;</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Não compartilhe objetos de uso pessoal como talheres, toalhas, pratos e copos;</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Mantenha os ambientes limpos e bem ventilados;</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Evite circulação desnecessária nas ruas, estádios, teatros, shoppings, shows, cinemas e igrejas;</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Se estiver doente, evite contato próximo com outras pessoas, principalmente idosos e doentes crônicos, busque orientação pelos canais on-line disponibilizados pelo SUS ou atendimento nos serviços de saúde e siga as recomendações do profissional de saúde;</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Durma bem e tenha uma alimentação saudável;</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Recomenda-se a utilização de máscaras em todos os ambientes. As máscaras de tecido (caseiras/artesanais), não são Equipamentos de Proteção Individual (EPI), mas podem funcionar como uma barreira física, em especial contra a saída de gotículas potencialmente contaminadas;</p>
                                    </li>
                                </ul>
                            </div>
                            <!-- END UNORDERED LIST -->
                            <p class="text-justify">Estimule familiares, amigos e colegas de trabalho sobre a importância do uso de máscara e da higienização das mãos na prevenção da disseminação do vírus causador da doença COVID-19.</p>
                            <div class="bold-text">
                                <p class="font-weight-bold text-secondary h6">Dicas para viajantes:</p>
                            </div>
                            <p class="text-justify">Caso você precise viajar, avalie a real necessidade. Se for inevitável viajar, previna-se e siga as orientações das autoridades de saúde locais.</p>
                            <p class="text-justify">Ao voltar de viagens internacionais ou locais recomenda-se:</p>
                            <!-- UNORDERED LIST -->
                            <div class="list">
                                <ul>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Reforçar os hábitos de higiene e proteção como a utilização de máscara, higienização das mãos com água e sabão ou com álcool em gel 70%;</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Caso apresente sintomas de gripe, busque atendimento nos serviços de saúde, e evite contato com outras pessoas;</p>
                                    </li>
                                </ul>
                            </div>
                            <!-- END UNORDERED LIST -->
                        </div>
                        <!-- END TEXT -->
                    </div>
                    <!-- END TAB PANE -->
                    <!-- TAB PANE -->
                    <div class="tab-pane container" id="st6">
                        <!-- SUBTITLE -->
                        <div class="subtitle">
                            <p class="text-center h3 font-weight-bold text-uppercase text-primary">Se eu ficar doente</p>
                        </div>
                        <!-- END SUBTITLE -->
                        <!-- TEXT -->
                        <div class="text">
                            <p class="text-justify">Se estiver doente, com sintomas compatíveis com a COVID-19, tais como febre, tosse, dor de garganta e/ou coriza, com ou sem falta de ar, evite contato físico com outras pessoas, incluindo os familiares, principalmente, idosos e doentes crônicos, Procure imediatamente os postos de triagem nas Unidades Básicas de Saúde / UPAS ou outras unidades de saúde. Após encaminhamento consulte-se com o médico. Uma vez diagnosticado pelo médico, receba as orientações e prescrição dos medicamentos que você deverá usar. O médico poderá solicitar exames complementares. Inicie o tratamento prescrito imediatamente. Mantenha seu médico sempre informado da evolução dos sintomas durante o tratamento e siga suas recomendações.</p>
                            <p class="text-justify">Utilize máscara o tempo todo.</p>
                            <p class="text-justify">Se for preciso cozinhar, use máscara de proteção, cobrindo boca e nariz todo o tempo.</p>
                            <p class="text-justify">Depois de usar o banheiro, nunca deixe de lavar as mãos com água e sabão e sempre limpe vaso mantendo a tampa fechada, pia e demais superfícies com álcool, água sanitária ou outro produto recomendado pela Agência Nacional de Vigilância Sanitária – Anvisa - para desinfecção do ambiente.</p>
                            <p class="text-justify">Separe toalhas de banho, garfos, facas, colheres, copos e outros objetos apenas para seu uso.</p>
                            <p class="text-justify">O lixo produzido precisa ser separado e descartado.</p>
                            <p class="text-justify">Evite compartilhar sofás e cadeiras e realize limpeza e desinfecção frequente com água sanitária ou álcool 70% ou outro produto recomendado pela Agência Nacional de Vigilância Sanitária – Anvisa.</p>
                            <p class="text-justify">Mantenha a janela aberta para circulação de ar do ambiente usado para isolamento e a porta fechada, limpe a maçaneta frequentemente com álcool 70%, água sanitária, ou outro produto recomendado pela Agência Nacional de Vigilância Sanitária – Anvisa.</p>
                            <p class="text-justify">Caso o paciente não more sozinho, recomenda-se que os demais moradores da residência durmam em outro cômodo, seguindo também as seguintes recomendações:</p>
                            <!-- UNORDERED LIST -->
                            <div class="list">
                                <ul>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Mantenha a distância mínima de 1 metro entre a pessoa infectada e os demais moradores.</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Limpe os móveis da casa frequentemente com água sanitária, álcool 70% ou outro produto recomendado pela Agência Nacional de Vigilância Sanitária – Anvisa.</p>
                                    </li>
                                    <li>
                                        <p class="text-justify font-italic text-muted">Se uma pessoa da casa tiver diagnóstico positivo, todos os moradores devem ficar em distanciamento conforme orientação médica.</p>
                                    </li>
                                </ul>
                            </div>
                            <!-- END UNORDERED LIST -->
                        </div>
                        <!-- END TEXT -->
                    </div>
                    <!-- END TAB PANE -->
                    <!-- TAB PANE -->
                    <div class="tab-pane container" id="st7">
                        <!-- SUBTITLE -->
                        <div class="subtitle">
                            <p class="text-center h3 font-weight-bold text-uppercase text-primary">Serviço de Saúde</p>
                        </div>
                        <!-- END SUBTITLE -->
                        <!-- TEXT -->
                        <div class="text">
                            <p class="text-justify">Procure um serviço de saúde caso apresente sintomas de síndrome gripal.</p>
                            <!-- UNORDERED LIST -->
                            <div>
                                <ul>
                                    <li class="text-justify font-italic text-muted"><a class="text-justify font-italic text-muted" href="https://portalarquivos.saude.gov.br/images/pdf/2020/April/18/Hospitais-estaduais-CORONAV--RUS.pdf">Lista de hospitais que prestam atendimento em seu estado/município.</a></li>
                                    <li class="text-justify font-italic text-muted"><a class="text-justify font-italic text-muted" href="https://portalarquivos.saude.gov.br/images/pdf/2020/April/18/postos-de-sa--de-com-endere--o.pdf">Lista dos postos de saúde que prestam atendimento em seu estado/município.</a></li>
                                    <li class="text-justify font-italic text-muted"><a class="text-justify font-italic text-muted" href="https://portalarquivos.saude.gov.br/images/pdf/2020/May/25/lista-laboratorio.pdf">Laboratórios públicos de referência de testagem para coronavírus.</a></li>
                                </ul>
                            </div>
                            <!-- END UNORDERED LIST -->
                        </div>
                        <!-- END TEXT -->
                    </div>
                    <!-- END TAB PANE -->
                </div>
                <!-- END TAB CONTENT -->
            </div>
            <!-- END CONTAINER -->
        </div>
        <!-- END CONTAINER FLUID -->
    </section>
    <!-- END SECTION -->
    <!-- FOOTER -->
    <footer>
        <!-- CONTAINER FLUID -->
        <div class="container-fluid bg-dark">
            <!-- ROW -->
            <div class="row pt-3 pb-3">
                <!-- COL -->
                <div class="col-sm-4">
                    <!-- LINKS -->
                    <p class="text-center h8 font-weight-bold text-uppercase text-white">Menu</p>
                    <a href="index.php">
                        <p class="text-center">Página Principal</p>
                    </a>
                    <a href="libs/pages/TipsPrevention.php">
                        <p class="text-center">Prevenção</p>
                    </a>
                    <a href="libs/pages/News.php">
                        <p class="text-center">Notícias</p>
                    </a>
                    <a href="libs/pages/Statistics.php">
                        <p class="text-center">Estatísticas</p>
                    </a>
                    <a href="libs/pages/Form.php">
                        <p class="text-center">Pesquisa</p>
                    </a>
                    <!-- END LINKS -->
                </div>
                <!-- END COL -->
                <!-- COL -->
                <div class="col-sm-4">
                    <!-- LINKS -->
                    <p class="text-center h8 font-weight-bold text-uppercase text-white">Notícias</p>
                    <a href="libs/pages/news/Animals.php">
                        <p class="text-center">Animais</p>
                    </a>
                    <a href="libs/pages/news/Business.php">
                        <p class="text-center">Finanças Empresariais</p>
                    </a>
                    <a href="libs/pages/news/Education.php">
                        <p class="text-center">Educação</p>
                    </a>
                    <a href="libs/pages/news/HealthFood.php">
                        <p class="text-center">Alimentação</p>
                    </a>
                    <a href="libs/pages/news/PersonalCares.php">
                        <p class="text-center">Cuidados Pessoais</p>
                    </a>
                    <a href="libs/pages/news/PersonalFinances.php">
                        <p class="text-center">Finanças Pessoais</p>
                    </a>
                    <!-- END LINKS -->
                </div>
                <!-- END COL -->
                <!-- COL -->
                <div class="col-sm-4">
                    <!-- LINKS -->
                    <p class="text-center h8 font-weight-bold text-uppercase text-white">Estatísticas</p>
                    <a href="libs/pages/statistics/World.php">
                        <p class="text-center">Mundo</p>
                    </a>
                    <a href="libs/pages/statistics/Brazil.php">
                        <p class="text-center">Brasil</p>
                    </a>
                    <a href="libs/pages/statistics/States.php">
                        <p class="text-center">Estados</p>
                    </a>
                    <a href="libs/pages/statistics/Citys.php">
                        <p class="text-center">Cidades</p>
                    </a>
                    <!-- END LINKS -->
                </div>
                <!-- END COL -->
            </div>
            <!-- END ROW -->
        </div>
        <!-- END CONTAINER FLUID -->
    </footer>
    <!-- END FOOTER -->
    <!-- OPTIONAL JAVASCRIPT -->
    <!-- JQUERY FIRST, THEN POPPER.JS, THEN BOOTSTRAP JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>