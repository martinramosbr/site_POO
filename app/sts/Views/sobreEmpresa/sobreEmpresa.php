<?php
if (!defined('C7E3L8K9E5')) {
    // header("Location: /");
    #http://localhost/site_POO/app/sts/views/home/
    die("Erro: Pagina não encontrada!");
}
echo "<h1>Sobre Empresa</h1>";

// var_dump($this->data['about-company']);

//Acessa o IF quando encontrou algum registro no banco de dados.
if(!empty($this->data['about-company'])) {
    foreach($this->data['about-company'] as $about_company){
        // var_dump($about_company);
        extract($about_company);
        echo "ID: $id <br>";
        echo "Titulo: $title <br>";
        echo "Descrição: $description <br>";
        echo "Status: $sts_situation_id <br>";
        echo "Imagem: $image <br>";
        echo "Data de Cadastro: $created <br>";
        echo "<hr>";
    }

}else {
    echo "<p style='color: #f00;'>Erro, nenhum registro encontrado.</p>";
}