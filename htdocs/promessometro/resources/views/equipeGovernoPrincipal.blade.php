@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>Equipe_Governo Page</title>
    </head>
    <body>
    <section style="margin-top: 75px; ">
        <div class="middle-cadastra">
        <div class="middlecenter-cadastra text-center">
        <h1 style="font-family: Lato; font-style: bold;">Equipe Governo</h1>
            <input type="submit" value="Cadastrar" class="btn btn-success btn-lg" onclick="location.href= 'equipegoverno/cadastrar'">
            <input type="submit" value="Atualizar" class="btn btn-success btn-lg" onclick="location.href= 'equipegoverno/consultar'">
            <input type="submit" value="Voltar" class="btn btn-success btn-lg" onclick="location.href= '/promessometro/public'">
            </div>
            </div>
        </section>
    </body>
</html>
