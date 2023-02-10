<?php

namespace Sts\Controllers;

if (!defined('C7E3L8K9E5')) {
    // header("Location: /");
    #http://localhost/site_POO/app/sts/views/home/
    die("Erro: Pagina não encontrada!");
}
/**
 * Carrega a página da Home
 * 
 * @author Martinho <contatomartin@outlook.com>
 */

class Contato
{
    /** @var array|null $dados Recebe os dados que devem ser enviados para o VIEW */
    private array|string|null $data;
    /** @var array|null $dadosForm Recebe os dados do formulario que devem ser enviados para o VIEW*/
    private array|null $dataForm;

    /**
     * Instancia a classe responsável em carregar a View
     *
     * @return void
     */
    public function index(): void
    {
        $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($this->dataForm['AddContMsg'])) {
            var_dump($this->dataForm);
            $createContactMsg = new \Sts\Models\StsContato();
            if($createContactMsg->create($this->dataForm)){
                echo $_SESSION['msg']."Cadastrou com sucesso!";
            } else{
                echo $_SESSION['msg']."Não cadastrado!";
            }
        }

        $this->data = "Menssagem enciada com sucesso!<br>";
        $loadView = new \Core\ConfigView("sts/Views/contato/contato", $this->data);
        $loadView->loadView();
    }
}
