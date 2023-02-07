<?php

namespace Sts\Controllers;
if (!defined('C7E3L8K9E5')) {
    // header("Location: /");
    #http://localhost/site_POO/app/sts/views/home/
    die ("Erro: Pagina não encontrada!");
} 
/**
 * Carrega a página da Erro
 * 
 * @author Martinho <contatomartin@outlook.com>
 */

class Erro
{
    /** @var array|string|null $dados Recebe os dados que devem ser enviados para o VIEW */
    private array|string|null $data;

    /**
     * Instancia a classe responsável em carregar a View
     *
     * @return void
     */
    public function index()
    {
        //echo "Pagina inicial";
        $this->data = null;
        $loadView = new \Core\ConfigView("sts/Views/erro/erro", $this->data);
        $loadView->loadView();
    }
}
