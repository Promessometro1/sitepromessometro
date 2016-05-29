@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>Tema Page</title>

    </head>
    <body>
        <section style="margin-top: 75px; ">
        <div class="middle-cadastra">
        <div class="middlecenter-cadastra text-center">
        <h1 style="font-family: Lato; font-style: bold;">Tema</h1>
            <input type="submit" value="Cadastrar" class="btn btn-success btn-lg" onclick="location.href= 'tema/cadastrar'">
            <input type="submit" value="Atualizar" class="btn btn-success btn-lg" onclick="location.href= 'tema/consultar'">
            <input type="submit" value="Voltar" class="btn btn-success btn-lg" onclick="location.href= '/promessometro/public'">
            </div>
            </div>
        </section>
    </body>
</html>
