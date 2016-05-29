@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>CADASTRO TEMAS</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <section style="margin-top: 75px; ">
            <div class="middle-cadastra">
                <div class="middlecenter-cadastra text-center">
                    <form action = "cadastrar" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <li>Nome</li> <input type="text" name="NOME"></input>
                        <li>Sigla</li> <input type="text" name="SIGLA"></input><br><br>
                        <input type="submit" value="Cadastrar" class="btn btn-success btn-lg"></input><br><br>
                        </form>
                        <input type="submit" value="Voltar" class="btn btn-success btn-lg" onclick="location.href= '/promessometro/public/tema'"> 
                        </div>
                </div>  
        </section>


    </body>
</html>