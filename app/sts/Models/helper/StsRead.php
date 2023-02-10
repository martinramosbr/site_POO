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
    private null|array $values;
    private string $select;
    private null|array $result = [];
    private object $conn;
    private object $query;

    function getResult(): array|null
    {
        return $this->result;
    }

    public function exeRead(string $table, string|null $terms = null, string|null $parseString = null)
    {
        if (!empty($parseString)) {
            parse_str($parseString, $this->values);
            // var_dump($this->values);
        }
        // var_dump($table);
        $this->select = "SELECT * FROM {$table} {$terms}";
        // var_dump($this->select);
        $this->exeInstruction();
    }

    public function fullRead(string $query, string|null $parseString = null)
    {
        $this->select = $query;
        // var_dump($this->select);

        if (!empty($parseString)) {
            parse_str($parseString, $this->values);
            // var_dump($this->values);
        }

        $this->exeInstruction();
    }

    private function exeInstruction()
    {
        $this->connection();

        try {
            $this->exeParameter();
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

    private function exeParameter()
    {
        if ($this->values) {
            // var_dump($this->values);
            foreach ($this->values as $link => $value) {
                // var_dump($link);
                // var_dump($value);
                if (($link == 'limit') || ($link == 'offset') || ($link == 'id')) {
                    $value = (int) $value;
                }

                $this->query->bindValue(":{$link}", $value, (is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR));
            }
        }
    }
}
