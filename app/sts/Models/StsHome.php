<?php


namespace Sts\Models;
use PDO;
//Mata o processamento caso o usuário tente acessar pela URL.
if (!defined('C7E3L8K9E5')) {
    die("Erro: Página não encontrada");
}

class StsHome
{
    private array $data;
    private object $connection;

    public function index(): array
    {
        // $this->data = [
        //     "title" => "Topo da página",
        //     "descricao" => "Descrição do serviço"
        // ];

                // $connection = new \Sts\Models\helper\StsConn;
                // $this->connection = $connection->connectDb();

                // $sql_home = "SELECT id, title_top, description_top, link_btn_top, txt_btn_top, image FROM sts_homes_tops WHERE id=:id LIMIT :limit";
                // $result_sql_home = $this->connection->prepare($sql_home);
                // $result_sql_home->bindValue(':limit', 1, PDO::PARAM_INT);
                // $result_sql_home->bindValue(':id', 1, PDO::PARAM_INT);

                // $result_sql_home->execute();
                // $this->data = $result_sql_home->fetch();

        // var_dump($this->data);

        
        $viewHome = new \Sts\Models\helper\StsRead();
        $viewHome->exeRead("sts_homes_tops", "WHERE id=:id LIMIT :limit", "id=1&limit=1");
        $this->data = $viewHome->getResult();
        // var_dump($this->data);
        // $this->data = [];
        return $this->data;
    }
}
