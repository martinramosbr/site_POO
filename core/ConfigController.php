<?php

namespace Core;

class ConfigController
{
    private string $url;
    private array $urlArray;
    private string $urlController;
    private string $urlParameter;
    private string $urlSlugController;
    private array $format;


    public function __construct()
    {
        echo "Carregar a pagina<br><br>";
        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            var_dump($this->url);

            $this->urlArray = explode("/", $this->url);
            var_dump($this->urlArray);

            if (isset($this->urlArray[0])) {
                var_dump($this->urlArray[0]);
                $this->urlController = $this->urlArray[0];
            } else {
                $this->urlController = "Home";
            }
        } else {
            echo "Acessa a página inicial<br>";
            $this->urlController = "Home";
        }
        echo "Controller: {$this->urlController}<br>";
    }

    private function clearUrl()
    {
        #Eliminar as tags
        $this->url = strip_tags($this->url);
        #Eliminar espaços em branco
        $this->url = trim($this->url);
        #Eliminar /
        $this->url = rtrim($this->url, "/");
        #Eliminar caracteres
        $this->format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª ';
        $this->format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr-------------------------------------------------------------------------------------------------';

        var_dump($this->format);

    }
}
