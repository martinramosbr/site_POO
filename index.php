<?php
session_start(); //inicia a sessão.
ob_start(); //limpa o buffer de saida de memoria para nao apresentar erro ao fazer redirecionamento.


define('C7E3L8K9E5', true); //Constante que define que o usuário está acessando páginas internas através da página "index.php".

require './vendor/autoload.php'; //Carregar o composer


$url = new Core\ConfigController(); //Instancia a classe ConfigController, responsável em tratar a URL


$url->loadPage();//Instancia o método para carregar a página/controller
