<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Usuario;

class NovoCadastroController extends Controller
{
	function returnView1(){
		return view ('cadastroPassoUm');
	}
	function returnView2(){
		return view ('cadastroPassoDois');
	}
	function cadastrar(Request $request){
		$usuario = new Usuario();
		$usuario->NOME = $request->input('nome');
		$usuario->EMAIL = $request->input('email');
		$usuario->ID_CIDADE = $request->input('id_cidade');
		$usuario->ID_TIPO_USUARIO = $request->input('id_tipo_usuario');
		$usuario->ID_OSA = $request->input('id_osa');
		$usuario->CARGO = $request->input('cargo');
		$usuario->STATUS_ATIVIDADE = 1;
		$usuario->save();
		return redirect()-> action('NovoCadastroController@returnView2');
	}	
}