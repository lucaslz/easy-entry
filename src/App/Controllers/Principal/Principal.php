<?php

/**
 * @copyright Copyright (c) 2018 Lucas Lima
 */
namespace App\Controllers\Principal;

use App\Models\TipoPessoa;

/**
 * Controle do sistema principal
 */
class Principal
{
	/**
	 * variavel de controle de erro
	 *
	 * @var mixed
	 */
	public $msgError = [];

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
				'Pessoa Fisica',
				'Pessoa Juridica'
			],
			'tipoUsuario' => [
				'Comum',
				'Administrador'
			]
		];
		return view($response, 'pagina-principal/cadastro/cadastro.twig', $dados);
    }
}