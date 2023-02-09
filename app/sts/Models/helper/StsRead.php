<?php

namespace Sts\Models\helper;
//Mata o processamento caso o usuário tente acessar pela URL.
if (!defined('C7E3L8K9E5')) {
    die("Erro: Página não encontrada");
}

use PDO;
use PDOException;

class StsRead extends StsConn
{
    private string $select;
    private null|array $result = [];
    private object $conn;
    private object $query;

    function getResult(): array|null
    {
        return $this->result;
    }

    public function exeRead(string $table, $termos = null, $parseString = null)
    {
        // var_dump($table);
        $this->select = "SELECT * FROM {$table} WHERE id=1 LIMIT 1";
        // var_dump($this->select);
        $this->exeInstruction();
    }

    private function exeInstruction()
    {
        $this->connection();
        try {
            $this->query->execute();
            $this->result = $this->query->fetchAll();
            // var_dump($this->result);
        } catch (PDOException $err) {
            $this->result = null;
        }
    }

    private function connection()
    {
        $this->conn = $this->connectDb();
        $this->query = $this->conn->prepare($this->select);
        $this->query->setFetchMode(PDO::FETCH_ASSOC);
    }
}
