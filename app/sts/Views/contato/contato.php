<?php
if (!defined('C7E3L8K9E5')) {
    // header("Location: /");
    #http://localhost/site_POO/app/sts/views/home/
    die("Erro: Pagina não encontrada!");
}
echo "<h1>Entre em contato.</h1>";
?>

<form action="" method="post">
    <label for="">Nome: </label>
    <input type="text" name="name" id="name" placeholder="Nome completo" /><br><br>
    <label for="">E-mail: </label>
    <input type="email" name="email" id="email" placeholder="Seu e-mail" /><br><br>
    <label for="">Assunto: </label>
    <input type="text" name="subject" id="subject" placeholder="Assunto da mensagem..." /><br><br>
    <label for="">Mensagem: </label>
    <textarea name="content" rows="6" cols="50" id="content" placeholder="Conteúdo da mensagem"></textarea><br><br>

    <input type="submit" name="AddContMsg" id="AddContMsg" value="Enviar"/>
</form>