<?php

/**
 * @copyright Copyright (c) 2018 Lucas Lima
 */
namespace App\Controllers\Principal;

use App\Models\TipoPessoa;
use Illuminate\Validation\Validator;
use Illuminate\Validation\Factory as ValidatorFactory;

/**
 * Base de todos os controllers da aplicacao
 */
class Principal
{
	/**
	 * Tela principal do site
	 * 
	 * @param Object $request
	 * @param Object $response
	 * @param Object $args
	 */
	public function home($request, $response, $args)
	{
		$dados = [
			'nomeTela' => 'Easy Entry'
		];

		return view($response, 'pagina-principal/principal.twig', $dados);
	}

	/**
	 * Tela de cadastro do sistema
	 * 
	 * @param Object $request
	 * @param Object $response
	 * @param Object $args
	 */
	public function cadastro($request, $response, $args)
	{
		$dados = [
			'nomeTela' => 'Easy Entry',
			'tipoPessoa' => [
				'Fisica',
				'Juridica'
			],
			'tipoUsuario' => [
				'Comum',
				'Administrador'
			]
		];

		return view($response, 'pagina-principal/cadastro/cadastro.twig', $dados);
	}

	/**
	 * Metodo que valida os dados vindo do formulario de cadastro
	 * 
	 * @param Object $request
	 * @param Object $response
	 * @param Object $args
	 */
	public function validaCadastro($request, $response, $args)
	{
		$dados = self::pegarDadosPessoais($request->getParsedBody());

        $validator = [
            'email' => 'required',
		];
		
		$factory = new ValidatorFactory();
        $v = $factory->make($data, $validator);
		var_dump($v);
		var_dump($dados); die();
	}

	/**
	 * Metodo que valida os dados vindo do formulario de cadastro
	 * 
	 * @param Object $request
	 * @param Object $response
	 * @param Object $args
	 */
	public function pegarDadosPessoais($dados)
	{
		//Removendo chaves desnecessarias
		unset($dados['emailj']);
		unset($dados['senhaj']);
		unset($dados['confirmar_senhaj']);
		unset($dados['razao_socialj']);
		unset($dados['inscricao_estadualj']);
		unset($dados['enderecoj']);
		unset($dados['numeroj']);
		unset($dados['cepj']);
		unset($dados['bairroj']);
		unset($dados['ufj']);	
		unset($dados['cidadej']);
		unset($dados['cnpjj']);
		
		return $dados;
	}
}