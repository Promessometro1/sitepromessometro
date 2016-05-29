@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>VISUALIZA METAS</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <section style="margin-top: 75px; ">
        <div class="middle-cadastra">
            <div class="middlecenter-cadastra text-center">
                 <form action="consultar" method="post">
                    @foreach ($meta as $aux) 
                        <input type="hidden" value="{{ $aux->ID_META }}" name="ID_META"> 
                        <li>Objetivo</li> <input type="text" value="{{ $aux->OBJETIVO }}" maxlength="50" name="OBJETIVO">
                        <li>Resumo</li> <input type="text" value="{{ $aux->RESUMO }}" maxlength="50" name="RESUMO">
                        <li>Descrição</li> <input type="text" value="{{ $aux->DESCRICAO }}" maxlength="50" name="DESCRICAO">
                        <li>ID Pop Beneficiada</li> <input type="text" value="{{ $aux->ID_POP_BENEFICIADA }}" maxlength="50" name="ID_POP_BENEFICIADA">
                        <li>Data Início</li> <input type="text" value="{{ $aux->DATA_INICIO }}" maxlength="50" name="DATA_INICIO">
                        <li>Data Fim</li> <input type="text" value="{{ $aux->DATA_FIM }}" maxlength="50" name="DATA_FIM">
                        <li>Status Meta</li> <input type="text" value="{{ $aux->STATUS_META }}" maxlength="50" name="STATUS_META">
                        <li>ID Gestão</li> <input type="text" value="{{ $aux->ID_GESTAO }}" maxlength="50" name="ID_GESTAO">
                        <li>ID Tema</li> <input type="text" value="{{ $aux->ID_TEMA }}" maxlength="50" name="ID_TEMA">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <br><input type="submit" value="Alterar"><br>
                        @endforeach
                        <br><br>
                        </form>
                        <input type="submit" value="Voltar" class="btn btn-success btn-lg" onclick="location.href= '/promessometro/public/meta'">   
                    </div>
            </div>
        </section>
    </body>
</html>
