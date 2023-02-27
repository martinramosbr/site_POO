<?php


namespace Sts\Models;

//Mata o processamento caso o usuário tente acessar pela URL.
if (!defined('C7E3L8K9E5')) {
    die("Erro: Página não encontrada");
}
/**
 * Models responsável por buscar dados da página Sobre Empresa.
 * @author Martinho <contato@email.com>
 */
class StsSobreEmpresa
{
    /** @var array $data Recebe os registros do bando de dados */
    private array|null $data;
    /**
     * Instancia a classe genérica no helper responsável em buscar os registros no banco de dados.
     * Pssui a QUERY responável em buscar os registro no BD.
     * @return array Retorna registro do banco de dados com informações para página sobre empresa.
     */
    public function index(): array|null
    {
        $viewSobreEmpresa = new \Sts\Models\helper\StsRead();

        $viewSobreEmpresa->fullRead("SELECT id, title, description, image, sts_situation_id, created FROM 	sts_abouts_companies WHERE sts_situation_id=:sts_situation_id ORDER BY id DESC LIMIT :limit", "sts_situation_id=1&limit=10");
        $this->data = $viewSobreEmpresa->getResult();

        return $this->data;
    }
}
