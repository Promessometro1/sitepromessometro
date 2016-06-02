<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Usuario;
use App\Meta;
use App\Cidade;

class NovoCadastroController extends Controller
{
	function returnView1(){
		return view ('cadastroPassoUm');
	}
	function returnView2(){
		return view ('confirmaCadastro');
	}
	function cadastrar(Request $request){
		$cidade = new Cidade();
		$cidade->ID_ESTADO = $request->input('ID_ESTADO');
		$cidade->NOME = $request->input('NOMECIDADE');
		$cidade->AREAM2 = $request->input('AREAM2');
		$cidade->POPULACAO = $request->input('POPULACAO');
		$cidade->END_PORTAL = $request->input('END_PORTAL');
		$cidade->save();

		$usuario = new Usuario();
		$usuario->NOME = $request->input('NOME');
		$usuario->EMAIL = $request->input('EMAIL');
		$usuario->SENHA = $request->input('SENHA');
		$usuario->ID_CIDADE = $request->input('ID_CIDADEUSER');
		$usuario->ID_TIPO_USUARIO = 1;
		$usuario->ID_OSA = $request->input('ID_OSA');
		$usuario->CARGO = $request->input('CARGO');
		$usuario->STATUS_ATIVIDADE = 1;
		$usuario->save();		

		$meta = new Meta();
		$meta->ID_TEMA = $request->input('ID_TEMA');
		$meta->OBJETIVO = $request->input('OBJETIVO');
		$meta->RESUMO = $request->input('RESUMO');
		$meta->DESCRICAO = $request->input('DESCRICAO');
		$meta->DATA_INICIO = $request->input('DATA_INICIO');
		$meta->DATA_FIM = $request->input('DATA_FIM');
		$meta->STATUS_META = $request->input('STATUS_META');
		$meta->ID_GESTAO = $request->input('ID_GESTAO');
		$meta->ID_POP_BENEFICIADA = $request->input('ID_POP_BENEFICIADA');
		$meta->save();

		return view ('confirmaCadastro');
	}	
}