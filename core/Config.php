<?php

namespace Core;

abstract class Config
{
    protected function config(): void
    {
        //echo "Classe de configuração<br>";
        //URL do projet
        define('URL', 'http://localhost/site_POO/');
        define('URLADM', 'http://localhost/site_POO/admin/');

        define('CONTROLLER', 'Iome');
        define('CONTROLLERERRO', 'Erro');

        //Credenciais do banco de dados

        define('EMAILADM', 'contatomartin@outlook.com');
    }
}