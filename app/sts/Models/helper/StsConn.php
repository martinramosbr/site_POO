<?php

namespace Sts\Models\helper;

use PDO;
use PDOException;

//Mata o processamento caso o usuário tente acessar pela URL.
if (!defined('C7E3L8K9E5')) {
    die("Erro: Página não encontrada");
}

/**
 * Uma classe que instancia a conexão com o banco de dados.
 */
class StsConn
{
    private string $host = HOST;
    private string $user = USER;
    private string $pass = PASS;
    private string $dbname = DBNAME;
    private int|string $port = PORT;
    private object $connect;

    public function connectDb(): object
    {
        try {
            $this->connect = new PDO("mysql:host={$this->host};port={$this->port};dbname=" . $this->dbname, $this->user, $this->pass);

            return $this->connect;
        } catch (PDOException $err) {
            die("Erro: Por favor tente novamente, caso o problema percista entre em contato com o administrador. " . EMAILADM);
        }
    }
}
