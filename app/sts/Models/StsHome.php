<?php


namespace Sts\Models;

//Mata o processamento caso o usuário tente acessar pela URL.
if (!defined('C7E3L8K9E5')) {
    die("Erro: Página não encontrada");
}

class StsHome
{
    private array|null $data;

    public function index(): array|null
    {
        $this->data = [
            "title" => "Topo da página",
            "descricao" => "Descrição do serviço"
        ];
        $viewHome = new \Sts\Models\helper\StsRead();
        $viewHome->exeRead("sts_homes_tops", "WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $viewHome->fullRead("SELECT id, title_top, description_top, link_btn_top, txt_btn_top, image FROM sts_homes_tops WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $this->data = $viewHome->getResult();
        
        return $this->data;
    }
}
