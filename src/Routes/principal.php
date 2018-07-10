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
SApp::getApp()->post('/validaCadastro','App\Controllers\Principal\Principal:validaCadastro');