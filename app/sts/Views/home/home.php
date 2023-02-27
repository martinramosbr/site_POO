<?php
//Para o processamento quando o usuário não acessa o arquivo index.php
if (!defined('C7E3L8K9E5')) {
    // header("Location: /");
    #http://localhost/site_POO/app/sts/views/home/
    die("Erro: Pagina não encontrada!");
}
echo "<h1>Página Inicial</h1>";
//  var_dump($this->data[0]);
if (!empty($this->data['home']['top'][0])) {
    extract($this->data['home']['top'][0]);
} else {
    echo "<p style='color: red;'>Nenhum registro encontrado!</p>";
}
?>
<section class="top" style="background: linear-gradient(to right, var(--main-color) 25%, rgba(255, 255, 255, 0)), url('<?php echo URL; ?>app/sts/assets/images/home/<?php echo $image_top ?>'); background-size: cover; background-attachment: fixed;
    height: 100vh;">
    <div class="max-width">
        <div class="top-content">
            <div class="text-1"><?php echo $title_one_top; ?></div>
            <div class="text-2"><?php echo $title_two_top; ?></div>
            <div class="text-3"><?php echo $title_three_top; ?></div>
            <a href="<?php echo $link_btn_top; ?>"><?php echo $txt_btn_top; ?></a>
        </div>
    </div>
</section>

<?php
if (!empty($this->data['home']['serv'][0])) {
    extract($this->data['home']['serv'][0]);
} else {
    echo "<p style='color: red;'>Nenhum registro encontrado!</p>";
}
// var_dump($this->data['serv'][0]);
?>

<section class="services">
    <div class="max-width">
        <h2 class="title"><?php echo $serv_title ?></h2>
        <div class="serv-content">
            <div class="card">
                <div class="box">
                    <i class="<?php echo $serv_icon_one ?>"></i>
                    <div class="text"><?php echo $serv_title_one ?></div>
                    <p><?php echo $serv_desc_one ?></p>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <i class="<?php echo $serv_icon_two ?>"></i>
                    <div class="text"><?php echo $serv_title_two ?></div>
                    <p><?php echo $serv_desc_two ?></p>
                </div>
            </div>

            <div class="card">
                <div class="box">
                    <i class="<?php echo $serv_icon_three ?>"></i>
                    <div class="text"><?php echo $serv_title_three ?></div>
                    <p><?php echo $serv_desc_three ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
if (!empty($this->data['home']['prem'][0])) {
    extract($this->data['home']['prem'][0]);
    // var_dump($this->data['prem'][0]);
} else {
    echo "<p style='color: red;'>Nenhum registro encontrado!</p>";
}

?>

<section class="premium">
    <div class="max-width">
        <h2 class="title"><?php echo $prem_title ?></h2>
        <div class="premium-content">
            <div class="column left">
                <img src="<?php echo URL; ?>app/sts/assets/images/<?php echo $prem_image ?>" alt="<?php echo $prem_image ?>">
            </div>
            <div class="column right">
                <div class="text">
                    <?php echo $prem_subtitle ?>
                </div>
                <p><?php echo $prem_desc ?>
                </p>
                <a href="<?php echo $prem_btn_link ?>"><?php echo $prem_btn_text ?></a>
            </div>
        </div>
    </div>
</section>

