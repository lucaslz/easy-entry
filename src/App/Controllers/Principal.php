<?php

/**
 * @copyright Copyright (c) 2018 Lucas Lima
 */
namespace App\Controllers;

use App\Models\TipoPessoa;

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
}