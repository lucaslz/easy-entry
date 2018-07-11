<?php

/**
 * @copyright Copyright (c) 2018 Lucas Lima
 */
namespace App\Controllers\Cadastro;

use App\Models\TipoPessoa;
use Core\TratarDados\Dados;

/**
 * Controle do sistema principal
 */
class CadastroPessoaJuridico
{
    /**
     * Metodo para cadastra pessoa juridica
     *
     * @param Object $request
     * @param Object $response
     * @param array $args
     * @return void
     */
	public function validaCadastroJuridico($request, $response, $args)
	{
		//Dados da tela
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

		//Pegando os dados
		$dados['dados'] = self::pegarDadosPessoais($request->getParsedBody());
		
		$regras = [
			'tipoCadastro' =>  "Tipo Cadastro|validarNumeroInteiro",
			'tipoUsuario' =>  "Tipo Usuário|validarNumeroInteiro",
			'senhaj' =>  "Senha|validaString",
			'confirmar_senhaj' =>  "Confirmar Senha|validaString",
			'cnpj' =>  "CNPJ|validaString",
			'razao_social' =>  "Razão Social|validaString",
			'inscricao_estadual' =>  "Inscricao Estadual|validaString",
			'enderecoj' =>  "Endereco|validaString",
			'numeroj' =>  "Numero|validaString",
			'cepj' =>  "CEP|validaString",
			'ufj' =>  "UF|validaString",
			'cidadej' =>  "Cidade|validaString",
			'estadoj' =>  "Estado|validaString"
		];

		$dados['errors'] = $this->validarDados($regras, $dados);
		
		//retornando dados para view
		if(empty($dados['errors'])) {
			unset($dados['errors']);
			$dados['success'] = "Dados inseridos com sucesso!!!";
			unset($dados['dados']);
			return view($response, 'pagina-principal/cadastro/cadastro.twig', $dados);
		} else {
			return view($response, 'pagina-principal/cadastro/cadastro.twig', $dados);
		}
	}
}