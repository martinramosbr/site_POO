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
        
        $viewHomeTop = new \Sts\Models\helper\StsRead();
        $viewHomeTop->exeRead("sts_homes_tops", "WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $viewHomeTop->fullRead("SELECT title_one_top, title_two_top, title_three_top, link_btn_top, txt_btn_top, image_top FROM sts_homes_tops WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $this->data['top'] = $viewHomeTop->getResult();

        $viewHomeServ = new \Sts\Models\helper\StsRead();
        $viewHomeServ->exeRead("sts_homes_services", "WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $viewHomeServ->fullRead("SELECT serv_title, serv_icon_one, serv_title_one, serv_desc_one, serv_icon_two, serv_title_two, serv_desc_two, serv_icon_three, serv_title_three, serv_desc_three FROM sts_homes_services WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $this->data['serv'] = $viewHomeServ->getResult();
        
        $viewHomePrem = new \Sts\Models\helper\StsRead();
        $viewHomePrem->exeRead("sts_homes_premiums", "WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $viewHomePrem->fullRead("SELECT prem_title, prem_subtitle, prem_desc, prem_btn_text, prem_btn_link, prem_image FROM sts_homes_premiums WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $this->data['prem'] = $viewHomePrem->getResult();

        return $this->data;
    }
}
