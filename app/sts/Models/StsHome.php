<?php

namespace Sts\Models;

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
        $this->data = [
            "title" => "Topo da página",
            "descricao" => "Descrição do serviço"
        ];

        $connection = new \Sts\Models\helper\StsConn;
        $this->connection = $connection->connectDb();

        var_dump($this->connection);

        // var_dump($this->data);

        return $this->data;
    }
}
