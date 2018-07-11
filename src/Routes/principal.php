<?php

use Slim\Http\Request;
use Slim\Http\Response;
use Core\SApp;

//Redirecionando aplicacao para a home
SApp::getApp()->redirect('/', '/home', 301);

//Rotas da aplicacao
SApp::getApp()->get('/home','App\Controllers\Principal\Principal:home');

//Rota para criar novos usuários
SApp::getApp()->get('/cadastro','App\Controllers\Principal\Principal:cadastro');
SApp::getApp()->post('/validaCadastroFisico','App\Controllers\Cadastro\CadastroPessoaFisica:validaCadastro');
SApp::getApp()->post('/validaCadastroJuridico','App\Controllers\Cadastro\CadastroPessoaJuridica:validaCadastro');

//Rota para entrar no sistema
SApp::getApp()->get('/entrar','App\Controllers\Principal\Entrar:inicio');
SApp::getApp()->post('/entrarValidar','App\Controllers\Cadastro\Entrar:entrarValidar');

//Rota para contato no sistema
SApp::getApp()->get('/contato','App\Controllers\Principal\Contato:inicio');
SApp::getApp()->post('/contatoValidar','App\Controllers\Cadastro\Contato:contatoValidar');

//Rota para contato no sistema
SApp::getApp()->get('/sobre','App\Controllers\Principal\sobre:inicio');

//Rotas para controle de eventos
SApp::getApp()->get('/visualizar[/{id}]','App\Controllers\ControleEventos\Eventos:visualizar');
