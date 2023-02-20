<?php

namespace Sts\Models\helper;

use PDOException;

if (!defined('C7E3L8K9E5')) {
    die("Erro: Página não encontrada");
}

class StsCreate extends StsConn
{
    /** @var string $table Recebe o nome da tabela */
    private string $table;

    /** @var array $data Recebe os dados que devem ser inseridos no BD */
    private array $data;

    /** @var string|null $result Retorna o status do cadastro */
    private string|null $result = null;

    /** @var object $insert Recebe a QUERY preparada */
    private object $insert;

    /** @var string $query Recebe a QUERY */
    private string $query;

    /** @var object $conn Recebe a conexão com o BD */
    private object $conn;

    /**
     * Retornar o status do cadastro, retorna o último id quando cadatrar com sucesso e null quando houver erro
     * @return string|null Retorna o último id inserido
     */
    function getResult(): string|null
    {
        return $this->result;
    }

    public function exeCreate(string $table, array $data): void
    {
        $this->table = $table;
        // var_dump($this->table);

        $this->data = $data;
        // var_dump($this->data);

        $this->exeReplaceValues();
    }

    /**
     * Cria a QUERY e os links da QUERY
     * 
     * @return void
     */
    private function exeReplaceValues(): void
    {
        $coluns = implode(', ', array_keys($this->data));
        // var_dump($coluns);

        $values = ':' . implode(', :', array_keys($this->data));
        // var_dump($values);

        $this->query = "INSERT INTO {$this->table} ($coluns) VALUES ($values)";
        // var_dump($this->query);

        $this->exeInstruction();
    }

    /**
     * Executa a QUERY. 
     * Quando executa a query com sucesso retorna o último id inserido, senão retorna null.
     * 
     * @return void
     */
    private function exeInstruction(): void
    {
        $this->connection();
        try {
            $this->insert->execute($this->data);
            $this->result = $this->conn->lastInsertId();
        } catch (PDOException $er) {
            $this->result = null;
        }
    }

    /**
     * Obtem a conexão com o banco de dados da classe pai "Conn".
     * Prepara uma instrução para execução e retorna um objeto de instrução.
     * 
     * @return void
     */
    private function connection(): void
    {
        $this->conn = $this->connectDb();
        $this->insert = $this->conn->prepare($this->query);
    }
}
