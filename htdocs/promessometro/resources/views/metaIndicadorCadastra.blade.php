@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>CADASTRO META_INDICADOR</title>
        
    </head>  
    <body>
    <section style="margin-top: 75px; ">
        <div class="middle-cadastra">
                <div class="middlecenter-cadastra text-center">
                    <form action = "cadastrar" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                            <li>Id_Indicador</li>
                            <input type="text" name="ID_INDICADOR"></input><br>
                            <li>Id_Gestão</li>
                            <input type="text" name="ID_GESTAO"></input><br>
                            <li>Valor esperado</li>
                            <input type="text" name="VALOR_META"></input><br><br>
                            <input type="submit" value="Cadastrar" class="btn btn-success btn-lg"></input><br><br>
                            </form>
                            <input type="submit" value="Voltar" class="btn btn-success btn-lg" onclick="location.href= '/promessometro/public/metaindicador'"> 
                </div>
            </div>
        </section>
    </body>
</html>
