<?php


namespace Sts\Models;

//Mata o processamento caso o usuário tente acessar pela URL.
if (!defined('C7E3L8K9E5')) {
    die("Erro: Página não encontrada");
}

class StsFooter
{
    private array|null $data;

    public function index(): array|null
    {
        
        $viewFooter = new \Sts\Models\helper\StsRead();
        $viewFooter->exeRead("sts_footers", "WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $viewFooter->fullRead("SELECT footer_desc, footer_text_link, footer_link FROM sts_footers WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $this->data = $viewFooter->getResult();

        return $this->data;
    }
}
