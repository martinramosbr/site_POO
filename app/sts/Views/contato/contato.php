<?php
if (!defined('C7E3L8K9E5')) {
    // header("Location: /");
    #http://localhost/site_POO/app/sts/views/home/
    die("Erro: Pagina não encontrada!");
}
if (isset($this->data['form'])) {
    $valueForm = $this->data['form'];
    // var_dump($valueForm);
    extract($valueForm);
}
// var_dump($this->data);
echo "<h1>Entre em contato.</h1>";
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<form action="" method="post">
    <label for="">Nome: </label>
    <input type="text" name="name" id="name" placeholder="Nome completo" value="<?php if (isset($name)) {
                                                                                    echo $name;
                                                                                } ?>" /><br><br>
    <label for="">E-mail: </label>
    <input type="email" name="email" id="email" placeholder="Seu e-mail" value="<?php if (isset($email)) {
                                                                                    echo $email;
                                                                                } ?>" /><br><br>
    <label for="">Assunto: </label>
    <input type="text" name="subject" id="subject" placeholder="Assunto da mensagem..." value="<?php if (isset($subject)) {
                                                                                                    echo $subject;
                                                                                                } ?>" /><br><br>
    <label for="">Mensagem: </label>
    <textarea name="content" rows="6" cols="50" id="content" placeholder="Conteúdo da mensagem"><?php if (isset($content)) {
                                                                                                    echo $content;
                                                                                                } ?></textarea><br><br>

    <input type="submit" name="AddContMsg" id="AddContMsg" value="Enviar" />
</form>