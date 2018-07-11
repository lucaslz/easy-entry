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
class CadastroPessoaFisica
{
    /**
	 * Metodo que valida os dados vindo do formulario de cadastro
	 * 
	 * @param Object $request
	 * @param Object $response
	 * @param Object $args
	 */
	public function validaCadastro($request, $response, $args)
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
			'senha' =>  "Senha|validaString",
			'confirmar_senha' =>  "Confirmar Senha|validaString",
			'nome' =>  "Nome|validaString",
			'sobrenome' =>  "Sobrenome|validaString",
			'cpf' =>  "CPF|validaString",
			'rg' =>  "RG|validaString",
			'orgao_emissor' =>  "Orgão Emissor|validaString",
			'endereco' =>  "Endereço|validaString",
			'numero' =>  "Numero|validaString",
			'cep' =>  "CEP|validaString",
			'bairro' =>  "Bairro|validaString",
			'uf' =>  "UF|validaString",
			'cidade' =>  "Cidade|validaString",
			'estado' =>  "Estado|validaString"
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