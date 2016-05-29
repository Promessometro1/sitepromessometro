<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Promessômetro</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<style type="text/css">
        .navbar-brand {
            min-width: 231px;
            color: transparent !important;
            background: url('img/logo.png') no-repeat center;
        }

        .navbar-nav li button {
            margin: 10px 8px;
            font-weight: bold;
        }

        ul.navbar-nav li a {
            font-size: 16px;
            color: #FFF !important;
            transition: 0.3s linear;
        }

        ul.navbar-nav li a:hover {
            color: #87CEFA !important;
            transition: 0.3s linear;
        }

        .navbar-inverse {
            padding: 12px 0px;
            background: rgba(8, 8, 8, 0.8);
        }

        .dropdown-inverse {
            background: rgba(8, 8, 8, 0.8);
            border-color: #080808;
        }

        .dropdown-inverse li a {
            color: #999;
        }

        .dropdown-inverse li a:hover {
            color: #FFF;
            background: none;
        }

        .jumbotron {
            margin: 0rem;
        }

        section.sobre {
            color: #FFF;
            padding: 36.5vh 0vh;
            margin: auto;
            background-image: url('img/brasil.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        section.mapaBr {
            padding: 15.5vh 0vh;
            margin: auto;
            text-align: justify;
            background: none;
        }

        section.sobre div.container {
            margin: auto;
        }

        section.sobre p {
            padding-bottom: 3rem;
        }

        .branco {
            color: #337AB7;
            background-color: #FFF;
        }

        .azul {
            color: #FFF;
            background-color: #337AB7;
        }

        .caption h3 {
            margin-bottom: 0rem;
        }

        q {
            font-style: italic;
        }

        q::before{
            color: #777;
            font-size: 5rem;
            content: "\201C";
            line-height: 0rem;
            padding-right: 0.5rem;
            vertical-align: -1.6rem;
        }

        q::after {
            color: #777;
            font-size: 5rem;
            content: "\201D";
            line-height: 0rem;
            vertical-align: -1.6rem;
        }

        ul.navbar-foot a:link {
          font-size: 16px;
          color: white;
          background-color: transparent;
          text-decoration: none;
          }

        ul.navbar-foot a:visited {
          color: white;
          background-color: transparent;
          text-decoration: none;
          }

        ul.navbar-foot a:hover {
          color: #87CEFA;
          background-color: transparent;
          text-decoration: none;
          }

        ul.navbar-foot a:active {
            color: white;
            background-color: transparent;
            text-decoration: underline;
            }
    </style>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Promessômetro</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="#">Quem Somos</a></li>
                    <li><a href="#">Blog Tô de Olho</a></li>
                    <li><a href="#">Parceiros</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><button class="btn btn-primary btn-sm">Login</button></li>
                    <li><button id="cadastro"class="btn btn-default btn-sm">Cadastre-se</button></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="jumbotron sobre">
        <div class="container">
            <div class="row text-center">
                <h1>PROMESSÔMETRO</h1>
                <h2>O QUE É?</h2>
                <p>O Promessômetro é uma ferramenta para auditoria cidadã e avaliação da gestão municipal.</p>
                <button class="btn btn-success btn-lg">CADASTRE-SE</button>
            </div>
        </div>
    </section>

    <section class="jumbotron">
        <div class="container">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="center-block img-responsive" src="img/carousel/img1.jpg" alt="First slide">
                        <div class="carousel-caption">
                            <h2>Protestos</h2>
                            <p>Manifestantes na avenida por uma política melhor</p>
                        </div>
                    </div>
                    <div class="item">
                        <img class="center-block img-responsive" src="img/carousel/img2.jpg" alt="Second slide">
                        <div class="carousel-caption">
                            <h2>Protestos</h2>
                            <p>Manifestantes na avenida por uma política melhor</p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

<section class="jumbotron mapaBr">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1> <b>Prometeu, tem que cumprir!</b></h1>
                    <p>O prefeito da sua cidade está cumprindo as promessas feitas?</br>
                    Veja no seu Estado as cidades que já possuem Promessômetro
                    e auditores cidadãos fiscalizando as promessas feitas pelos prefeitos.</p>
                </div>
              <div class="col-md-5">
                 <div class="col-xs-6 col-sm-6 text-left">
                    <div id="mapaBrasil"></div>
                 </div>
              </div>
            </div>
        </div>
    </section>
    <section class="jumbotron bg-depoimentos">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="thumbnail">
                        <img src="img/thumbnail/thumb1.jpg" alt="ODED GRAJEW" class="img-circle">
                        <div class="caption">
                            <p><q>O balanço das metas permite uma avaliação da administração pelo cidadão. A prefeitura tem que apresentar um balanço do que foi realizado.</q></p>
                            <h3>ODED GRAJEW</h3>
                            <p><small>Coordenador da Rede Nossa São Paulo</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="thumbnail">
                        <img src="img/thumbnail/thumb2_.jpg" alt="ETHAN ZUCKERMAN" class="img-circle">
                        <div class="caption">
                            <p><q>Monitorar governos é uma forma vital de exercermos o poder. </q><br/> </p>
                            <h3><br/>ETHAN ZUCKERMAN</h3>
                            <p><small>diretor do Center for Civic Media do MIT - Massachusetts Institute of Technology</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="jumbotron">
        <div class="container">
            <div class="col-md-offset-2 col-md-8">
                <h2>Veja o convite do idealizador do Promessômetro</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/j4XAxhKQUXY"></iframe>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="navbar-collapse collapse navbar-inverse navbar-foot">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#"></br><b><i>Home</b></i></a>
                        <a href="#"></br>objetivo</a>
                        <a href="#"></br>de olho no promessômetro</a>
                        <a href="#"></br>Parceiros<br></br></a>
                    </div>
                    <div class="col-md-4">
                        <a href="#"></br><b><i>Auditor Cidadão</i></b></a>
                        <a href="#"></br>placar da câmara de vereadores</a>
                        <a href="#"></br>programa de metas - 2013 2016</a>
                        <a href="#"></br>programa cidades sustentaveis</a>
                        <a href="#"></br>programa cidade transparente</a>
                        <a href="#"></br>índice de efetividade da gestão municipal</a>
                        <a href="#"></br>programa município verde azul</a>
                        <a href="#"></br>sinal vermelho SANASA</a>
                        <a href="#"></br>monitoramento da qualidade do ar</a><br></br>
                    </div>
                    <div class="col-md-4">
                        <ul>
                            <li><a href="#"><b><i>Fale Conosco</i></b></a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> vilela@promessometro.org</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-comment"></span> +55 19 9 8161 9281</a></li>
                            <li>
                                <a href="#"><i class="fa fa-facebook-square fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter-square fa-lg"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
                <p class="navbar-text pull-left"><b>Promessômetro © 2015 | auditoria cidadã</b> e avaliação de sustentabilidade da gestão municipal</p>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="http://d3js.org/d3.v3.min.js"></script>
    <script type = "text/javascript" src="{{ URL::asset('js/funcoes.js') }}"></script>
    <script>criarMapa();</script>
    <script type="text/javascript">
    document.getElementById("cadastro").onclick = function () {
        location.href = "cadastro";
    };
</script>
</body>
</html>
