<?php

namespace Core;

if (!defined('C7E3L8K9E5')) {
    // header("Location: /");
    #http://localhost/site_POO/app/sts/views/home/
    die("Erro: Pagina não encontrada!");
}

/**
 * Nesta classe configuramos o metodo config(), que é ondem definimos as constantes que serão usadas no projeto
 * @author Martinho <contatomartin@outlook.com>
 */
abstract class Config
{
    /**
     * Nessa function o metodo referencia a contante que pode ser usada em qualquer parte do projeto desde que seja uma classe filha da classe Config.
     *
     * @return void Retorna um valor vazio
     */
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
