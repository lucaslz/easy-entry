<?php

// Condifucação do DIC
$container = $app->getContainer();

//Redenrizacao de views
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// Register Twig View helper
$container['view'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    $view = new \Slim\Views\Twig($settings['template_path'], [
        'cache' => $settings['template_path_cache']
    ]);
    
    // Instantiate and add Slim specific extension
    $router = $c->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));

    return $view;
};

//Dependencias do banco de dados
$container['db'] = function($c) {
	$manager = new \Illuminate\Database\Capsule\Manager;
	$manager->addConnection($c->get('settings')['db']);
	$manager->setAsGlobal();
	$manager->bootEloquent();
	return $manager->getConnection('default');
};

//Inicializando o banco de dados da aplicacao
$container['db'];