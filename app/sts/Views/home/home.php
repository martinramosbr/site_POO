<?php
//Para o processamento quando o usuário não acessa o arquivo index.php
if (!defined('C7E3L8K9E5')) {
    // header("Location: /");
    #http://localhost/site_POO/app/sts/views/home/
    die("Erro: Pagina não encontrada!");
}
echo "<h1>Página Inicial</h1>";
//  var_dump($this->data[0]);
extract($this->data[0]);


// extract($this->data);

// echo $id . "<br><br>";
echo $description_top . "<br><br>";
echo $link_btn_top . "<br><br>";
echo $txt_btn_top . "<br><br>";
echo $image . "<br><br>";
echo $created . "<br><br>";



//var_dump($this->$data);
