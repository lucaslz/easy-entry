<?php

/**
 * @copyright Copyright (c) 2018 Lucas Lima
 */
namespace App\Controllers;

use App\Models\TipoPessoa;

/**
 * Base de todos os controllers da aplicacao
 */
class ControlarEventos
{
	public function index($request, $response, $args)
	{
		$dados = [
			'nomeTela' => 'Easy Entry'
		];

		return view($response, 'pagina-principal/principal.twig', $dados);
	}
}