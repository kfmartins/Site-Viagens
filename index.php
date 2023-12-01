<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="style.css" href="stylesheet.css" media="screen" />
</head>

<body>
    <div .id>
        <h1>Lugares Turísticos do Brasil</h1>
    </div>
    <?php
        include("menu.php");
    ?>
    <center>
        <img src="https://thumbcdn-b.hotelurbano.net/RtRapxHUb1Bj9CEnUgTGp0axf70=/1240x0/center/middle/filters:format(webp):strip_icc():quality(80)/https://s3.amazonaws.com/legado-prod/prod/ofertas/imagens/2022/12/01/17/44/shutterstock_1935273770.png"
            class="img-fluid" alt="auto">
        <center />
        <br>
        <div class="container">
            <h1>Top 5</h1>
            <div class="row"> <!-- A class row deixa os elementos em linha -->
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.viagensecaminhos.com/wp-content/uploads/2017/08/ilha-do-mel-1.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ilha Do Mel</h5>
                            <p class="card-text">A Ilha do Mel é o destino mais lindo do Litoral do Paraná. Suas praias
                                são preservadas e não há ruas nem veículos circulando, apenas trilhas de areia. Sem
                                dúvida, um ótimo lugar para relaxar, longe do trânsito e barulho das grandes cidades.
                            </p>
                            <a href="#" class="btn btn-primary">Veja mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="cataratas.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cataratas Do Iguaçu</h5>
                            <p class="card-text">Para quem é apaixonado por belezas naturais e tem vontade de conhecer
                                uma das maravilhas da natureza, as Cataratas do Iguaçu se destacam entre os destinos
                                brasileiros de forma única e incomparável. </p>
                            <a href="#" class="btn btn-primary">Veja mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="Parque das chapadas.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Parque Nacional da Chapada dos Veadeiros</h5>
                            <p class="card-text">O Parque Nacional da Chapada dos Veadeiros ocupa uma área de 240.586,56
                                hectares no interior de Goiás e a ampla área protegida presenteia os turistas com
                                paisagens espetaculares em meio ao cerrado. A entrada oficial para o Parque Nacional
                                está localizada na Vila de São Jorge e por lá que se chega às principais atrações</p>
                            <a href="#" class="btn btn-primary">Veja mais</a>
                        </div>
                    </div>
                </div>
            </div> <!-- FIM do row 1-->
            <br>
            <br>
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="pao de acucar.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pão de Açúcar</h5>
                            <p class="card-text">ncorporado à paisagem carioca em 1912, o Parque Bondinho Pão de Açúcar foi o primeiro teleférico instalado no Brasil e o terceiro no mundo. É um dos principais cartões postais do Rio e o lugar perfeito para se ter uma vista privilegiada da Baía de Guanabara e outros pontos da cidade maravilhosa.</p>
                            <a href="#" class="btn btn-primary">Veja mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="museu.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Museu do Olho</h5>
                            <p class="card-text">O Museu Oscar Niemeyer (MON), também conhecido como Museu do Olho, é um museu de arte localizado na cidade de Curitiba, capital do estado do Paraná, no Brasil.</p>
                            <a href="#" class="btn btn-primary">Veja mais</a>
                        </div>
                    </div>
                </div>
            </div><!-- FIM do row 2-->
        </div><!-- FIM do container -->
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="cristo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cristo Redentor RJ</h5>
                        <p class="card-text">Cristo Redentor é uma estátua art déco [1] que retrata Jesus Cristo, localizada no topo do morro do Corcovado, a 709 metros acima do nível do mar, com vista para parte considerável da cidade brasileira do Rio de Janeiro. Feito de concreto armado e pedra-sabão,[2][3][4] tem trinta metros de altura (uma das maiores estátuas do mundo)</p>
                        <a href="#" class="btn btn-primary">Veja mais</a>
                    </div>
                </div>
            </div>
           
    <?php
        include("rodape.php");
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>