<?php

namespace Sts\Models;

use PDO;
//Mata o processamento caso o usuário tente acessar pela URL.
if (!defined('C7E3L8K9E5')) {
    die("Erro: Página não encontrada");
}
/**
 * Classe responsável em cadastrar no DB*/
class StsContato
{
    private array $data;

    public function create(array $data) :bool
    {
        $this->data = $data;
        var_dump($this->data);
        $_SESSION['msg'] = "<p style='color: green;'>Salvar mensagem</p>";
        return false;

    }
}
