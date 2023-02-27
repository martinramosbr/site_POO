<?php

namespace Sts\Models;

//Mata o processamento caso o usuário tente acessar pela URL.
if (!defined('C7E3L8K9E5')) {
    die("Erro: Página não encontrada");
}
/**
 * Classe responsável em cadastrar no DB*/
class StsContato
{
    private array $data;
    /**
     * Recebe os dados de um array no parametro $data, e executa o metodo create para salvar os dados no banco de dados.
     * @param array $data
     * @return boolean
     */
    public function create(array $data) :bool
    {
        $this->data = $data;
        $this->data['created'] = date("Y-m-d H:i:s");
        // var_dump($this->data);
        $createContatoMsg = new \Sts\Models\helper\StsCreate();
        $createContatoMsg->exeCreate("sts_contacts_msgs", $this->data);

        if($createContatoMsg->getResult()){
            // var_dump($createContatoMsg->getResult()); //retonar o ultimo id inserido da conexão do usuario atual, não de todos os usuarios
            $_SESSION['msg'] = "<p style='color: green;'>Enviado!</p>";
            return true;
        }else {
            $_SESSION['msg'] = "<p style='color: red;'>Erro: Não enviado!</p>";
            return false;
        }
    }
}
