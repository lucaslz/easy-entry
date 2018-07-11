<?php

/**
 * @copyright Copyright (c) 2018 Lucas Lima
 */
namespace App\Controllers\Principal;

use App\Models\TipoPessoa;

/**
 * Controle do sistema principal
 */
class Sobre
{
	/**
	 * Tela principal do site
	 * 
	 * @param Object $request
	 * @param Object $response
	 * @param Object $args
	 */
	public function inicio($request, $response, $args)
	{
		$dados = [
			'nomeTela' => 'Easy Entry'
		];

		return view($response, 'pagina-principal/sobre.twig', $dados);
    }
}