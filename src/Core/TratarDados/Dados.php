<?php

/**
 * @copyright Copyright (c) 2018 Lucas Lima
 */
namespace Core\TratarDados;

use App\Models\TipoPessoa;

/**
 * Trait para validação de dados
 */
trait Dados
{   
    /**
     * Validacao de email
     *
     * @param string $str
     * @param string $nomeCampo
     * @return void
     */
    public function validaEmail($email, $nomeCampo)
    {
        $array = [];

		if (
            filter_var($email, FILTER_VALIDATE_EMAIL) == false
        ) $array [] = "Campo ". $nomeCampo ." não é válido.";
        
        if (is_null($email)) $array [] = "Campo ". $nomeCampo ." não foi informado.";

        return $array;
    }

    /**
     * Validacao de numero
     *
     * @param string $str
     * @param string $nomeCampo
     * @return void
     */
    public function validarNumeroInteiro($num, $nomeCampo)
    {
        $array = [];

		if (
            is_null($num)
        ) $array [] = "Campo " . $nomeCampo . " inválido.";
        
        if (
			filter_var($num, FILTER_VALIDATE_INT) == false 
        ) $array [] = "Campo " . $nomeCampo . " tem que ser inteiro.";

        return $array;   
    }

    /**
     * Valida a string
     *
     * @param string $str
     * @param string $nomeCampo
     * @return void
     */
    public function validaString($str, $nomeCampo)
    {
        $array = [];

        if (is_null($str)) $array[] = "Campo " . $nomeCampo . " não foi informado.";
        if (is_string($str) == false) $array[] = "Campo " . $nomeCampo . " não é válido.";
        
        return $array;
    }

    /**
     * Valida os dados
     *
     * @param array $regras
     * @param array $dados
     * @return void
     */
    public function validarDados($regras, $dados)
    {
        $erros = [];
        $nomeCampo = "";
  
        foreach ($regras as $key => $value) {
            $stringArray = explode("|", $value);
            foreach ($stringArray as $k => $v) {
                if ($k === 0) {
                    $nomeCampo = $v;
                }else {
                    array_push($erros, $this->$v($dados['dados'][$key], $nomeCampo));
                }
            }
        }

        //Verificando se o array esta vazio
        foreach ($erros as $key => $value) {
            if (empty($value)) {
                unset($erros[$key]);
            }
        }
        return $erros;
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
		unset($dados['estadoj']);
		
		return $dados;
	}
}
}