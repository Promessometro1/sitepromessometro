@extends ('navbar')

<!DOCTYPE html>
<html>
    <head>
        <title>CADASTRO METAS</title>
        
    </head>  
    <body>
    <section style="margin-top: 75px; ">
        <div class="middle-cadastra">
                <div class="middlecenter-cadastra text-center">
                    <form action = "cadastrar" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                            <li>Objetivo</li>
                            <input type="text" name="OBJETIVO"></input><br>
                            <li>Resumo</li>
                            <input type="text" name="RESUMO"></input><br>
                            <li>Descrição</li>
                            <input type="text" name="DESCRICAO"></input><br>
                            <li>ID Pop Beneficiada</li>
                            <select name="ID_POP_BENEFICIADA">
                                @foreach ($popbeneficiada as $aux) 
                                    <option value='{{ $aux->ID_POP_BENEFICIADA }}'>{{ $aux->TITULO }}</option>
                                @endforeach
                            </select>
                            <li>Data Início</li>
                            <input type="text" name="DATA_INICIO"></input><br>
                            <li>Data Fim</li>
                            <input type="text" name="DATA_FIM"></input><br>
                            <li>Status Meta</li>
                            <input type="text" name="STATUS_META"></input><br>
                            <li>ID Gestão</li>
                            <input type="text" name="ID_GESTAO"></input><br>
                            <li>ID Tema</li>
                            <input type="text" name="ID_TEMA"></input><br><br>
                            <input type="submit" value="Cadastrar" class="btn btn-success btn-lg"></input><br><br>
                            </form>
                            <input type="submit" value="Voltar" class="btn btn-success btn-lg" onclick="location.href= '/promessometro/public/meta'"> 
                </div>
            </div>
        </section>
    </body>
</html>
