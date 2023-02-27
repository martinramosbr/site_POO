<?php


namespace Sts\Models;

//Mata o processamento caso o usuário tente acessar pela URL.
if (!defined('C7E3L8K9E5')) {
    die("Erro: Página não encontrada");
}

class StsContentContato
{
    private array|null $data;

    public function index(): array|null
    {

        $viewContentContato = new \Sts\Models\helper\StsRead();
        $viewContentContato->exeRead("sts_content_contacts", "WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $viewContentContato->fullRead("SELECT title_contact, desc_contact, icon_company, title_company, desc_company, icon_address, title_address, desc_address, icon_email, title_email, desc_email, title_form FROM sts_content_contacts WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $this->data = $viewContentContato->getResult();
        // var_dump($this->data);
        return $this->data;
    }
}
