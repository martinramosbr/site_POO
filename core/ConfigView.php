<?php

namespace Core;

if (!defined('C7E3L8K9E5')) {
    // header("Location: /");
    #http://localhost/site_POO/app/sts/views/home/
    die("Erro: Pagina não encontrada!");
}
/**
 * Carrega as páginas da View
 * 
 * @author Martinho <contatomartin@outlook.com>
 */

class ConfigView
{
    /**
     * Recebe o endereço da VIEW e os dados.
     * @param string $nameview Endereço da VIEW que deve ser carregada
     * @param  array|string|null $data Dados que a VIEW deve receber
     *
     * @param string $nameView
     * @param array|string|null $data
     */
    public function __construct(private string $nameView, private array|string|null $data)
    {
        // var_dump($this->nameView);
        // var_dump($this->data);
    }

    /**
     * Carrega a VIEW.
     * Verificar se o arquivo existe, e carregar caso exita, não existindo cancela o carregamento.
     * @return void
     */
    public function loadView(): void
    {
        if (file_exists('app/' . $this->nameView . '.php')) {
            include 'app/sts/Views/include/header.php';
            include 'app/' . $this->nameView . '.php';
            include 'app/sts/Views/include/footer.php';
        } else {
            die("Erro: Por favor tente novamente, se percistir entre em contaot com o administrador atraves do e-mail: " . EMAILADM);
        }
    }
}
