<?php

namespace Sts\Controllers;

if (!defined('C7E3L8K9E5')) {
    // header("Location: /");
    #http://localhost/site_POO/app/sts/views/home/
    die("Erro: Pagina não encontrada!");
}
/**
 * Carrega a página da Home
 * 
 * @author Martinho <contatomartin@outlook.com>
 */

class Home
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
        $home = new \Sts\Models\StsHome();
        $this->data = $home->index();
        var_dump($this->data); 
        $loadView = new \Core\ConfigView("sts/Views/home/home", $this->data);
        $loadView->loadView();
    }
}
