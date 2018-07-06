<?php

if (!function_exists("autoLoadRoutes")) {

	/**
	 * Helper responsavel por carregar todas as rotas da aplicacao
	 */
	function autoLoadRoutes()
	{
		$files = glob(__DIR__ . "/../Routes/*.php");
		foreach ($files as $file) {
    		require($file);   
		}
		unset($files);
	}
}


if (!function_exists("view")) {

	/**
	 * Helper responsavel por renderizar as views
	 */
	function view($response, $page, $args)
	{
		return Core\SApp::getApp()->getContainer()->view->render(
			$response,
			$page,
			$args
		);
	}
}

if (!function_exists("container")) {
	
	/**
	 * Helper responsavel por chamar o container
	 */
	function container($response, $page, $args)
	{
		return Core\SApp::getApp()->getContainer();
	}
}


if (!function_exists("getCss")) {
	
	/**
	 * Helper responsavel por chamar o css da pagina
	 */
	function getCss()
	{
		return \Core\SApp::getApp()->getContainer()['css']->dump();
	}
}

if (!function_exists("siteUrl")) {
	function siteUrl($url)
	{
		$req = \Core\SApp::getApp()->request();
		$uri = $req->getUrl() . $req->getRootUri();
		return $uri . '/' . ltrim($url, '/');
	}
}