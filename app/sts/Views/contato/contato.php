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

if (!empty($this->data['content'])) {
    $value_content = $this->data['content'][0];
    extract($value_content);
    // var_dump($value_content);
}


?>
<section class="contact">
    <div class="max-width">
        <h2 class="title"><?php echo $title_contact;?></h2>
        <div class="contact-content">
            <div class="column left">
                <p><?php echo $desc_contact;?></p>
                <div class="icons">
                    <div class="row">
                        <i class="<?php echo $icon_company;?>"></i>
                        <div class="info">
                            <div class="head">
                            <?php echo $title_company;?>
                            </div>
                            <div class="sub-title">
                            <?php echo $desc_company;?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <i class="<?php echo $icon_address;?>"></i>
                        <div class="info">
                            <div class="head">
                            <?php echo $title_address;?>
                            </div>
                            <div class="sub-title">
                            <?php echo $desc_address;?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <i class="<?php echo $icon_email;?>"></i>
                        <div class="info">
                            <div class="head">
                            <?php echo $title_email;?>
                            </div>
                            <div class="sub-title">
                            <?php echo $desc_email;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column right">
                <div class="text">
                <?php echo $title_form;?>
                </div>
               
                <form action="" method="post">
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
                    <div class="fields">
                        <div class="field name">
                            <input type="text" name="name" id="name" placeholder="Digite o nome" value="<?php if (isset($name)) {
                                                                                                            echo $name;
                                                                                                        } ?>" required>
                        </div>
                        <div class="field email">
                            <input type="email" name="email" id="email" placeholder="Digite o e-mail" value="<?php if (isset($email)) {
                                                                                                                    echo $email;
                                                                                                                } ?>" required>
                        </div>
                    </div>

                    <div class="field">
                        <input type="text" name="subject" id="subject" placeholder="Digite o assunto" value="<?php if (isset($subject)) {
                                                                                                                    echo $subject;
                                                                                                                } ?>" required>
                    </div>

                    <div class="field textarea">
                        <textarea name="content" rows="6" cols="50" id="content" placeholder="Digite o conteúdo" required><?php if (isset($content)) {
                                                                                                                                echo $content;
                                                                                                                            } ?></textarea>
                    </div>

                    <div class="button-area">
                        <button type="submit" name="AddContMsg" id="AddContMsg" value="Enviar">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>