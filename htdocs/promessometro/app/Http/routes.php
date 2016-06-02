<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro', 'NovoCadastroController@returnView1');
Route::post('/cadastro/envio', 'NovoCadastroController@cadastrar');
Route::get('/cadastro/envio', 'NovoCadastroController@cadastrar');

Route::get('/tema', function () {
    return view('temaPrincipal');
});

Route::get('/meta', function () {
    return view('metaPrincipal');
});

Route::get('/popbeneficiada', function () {
    return view('popBeneficiadaPrincipal');
});

Route::get('/equipegoverno', function () {
    return view('equipeGovernoPrincipal');
});

Route::get('/tema/cadastrar', function (){
	return view('temaCadastra');
});

Route::get('/metaindicador', function () {
    return view('metaIndicadorPrincipal');
});

Route::get('/prestaacao', function () {
    return view('prestaAcaoPrincipal');
});

Route::get('/responsavelindicador', function () {
    return view('responsavelIndicadorPrincipal');
});

Route::get('/prestacaoindicador', function () {
    return view('prestacaoIndicadorPrincipal');
});

Route::get('/prestacaoprojeto', function () {
    return view('prestacaoProjetoPrincipal');
});

Route::get('/usuariometa', function () {
    return view('usuarioMetaTemp');
});

Route::post('/tema/cadastrar', 'TemaController@cadastrar');
Route::get('/tema/consultar', 'TemaController@consultar');
Route::post('/tema/consultar', 'TemaController@atualizar');

Route::get('/meta/cadastrar', 'MetaController@carrega');
Route::post('/meta/cadastrar', 'MetaController@cadastrar');
Route::get('/meta/consultar', 'MetaController@consultar');
Route::post('/meta/consultar', 'MetaController@atualizar');

Route::get('/popbeneficiada/cadastrar', function (){
	return view('popBeneficiadaCadastra');
});
Route::post('/popbeneficiada/cadastrar', 'PopBeneficiadaController@cadastrar');
Route::get('/popbeneficiada/consultar', 'PopBeneficiadaController@consultar');
Route::post('/popbeneficiada/consultar', 'PopBeneficiadaController@atualizar');

Route::get('/equipegoverno/cadastrar', function (){
	return view('equipeGovernoCadastra');
});
Route::post('/equipegoverno/cadastrar', 'EquipeGovernoController@cadastrar');
Route::get('/equipegoverno/consultar', 'EquipeGovernoController@consultar');
Route::post('/equipegoverno/consultar', 'EquipeGovernoController@atualizar');

Route::get('/metaindicador/cadastrar', function (){
	return view('metaIndicadorCadastra');
});
Route::post('/metaindicador/cadastrar', 'MetaIndicadorController@cadastrar');
Route::get('/metaindicador/consultar', 'MetaIndicadorController@consultar');
Route::post('/metaindicador/consultar', 'MetaIndicadorController@atualizar');

Route::get('/prestaacao/cadastrar', function (){
	return view('prestaAcaoCadastra');
});
Route::post('/prestaacao/cadastrar', 'PrestaAcaoController@cadastrar');
Route::get('/prestaacao/consultar', 'PrestaAcaoController@consultar');
Route::post('/prestaacao/consultar', 'PrestaAcaoController@atualizar');

Route::get('/responsavelindicador/cadastrar', function (){
    return view('responsavelIndicadorCadastra');
});
Route::post('/responsavelindicador/cadastrar', 'ResponsavelIndicadorController@cadastrar');
Route::get('/responsavelindicador/consultar', 'ResponsavelIndicadorController@consultar');
Route::post('/responsavelindicador/consultar', 'ResponsavelIndicadorController@atualizar');

Route::get('/prestacaoindicador/cadastrar', function (){
    return view('prestacaoIndicadorCadastra');
});
Route::post('/prestacaoindicador/cadastrar', 'PrestacaoIndicadorController@cadastrar');
Route::get('/prestacaoindicador/consultar', 'PrestacaoIndicadorController@consultar');
Route::post('/prestacaoindicador/consultar', 'PrestacaoIndicadorController@atualizar');

Route::get('/prestacaoprojeto/cadastrar', function (){
    return view('prestacaoProjetoCadastra');
});
Route::post('/prestacaoprojeto/cadastrar', 'PrestacaoProjetoController@cadastrar');
Route::get('/prestacaoprojeto/consultar', 'PrestacaoProjetoController@consultar');
Route::post('/prestacaoprojeto/consultar', 'PrestacaoProjetoController@atualizar');