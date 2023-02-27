<?php
if (!defined('C7E3L8K9E5')) {
    // header("Location: /");
    #http://localhost/site_POO/app/sts/views/home/
    die("Erro: Pagina não encontrada!");
}
if (!empty($this->data['footer'][0])) {
    // var_dump($this->data['footer'][0]);
    extract($this->data['footer'][0]);
?>
    <footer>
        <span><?php echo $footer_desc; ?><a href="<?php echo $footer_link; ?> "> <?php echo $footer_text_link; ?></a></span>
    </footer>
<?php
} else {
    echo "<p style='color: red;'>Nenhum rodapé encontrado!</p>";
}
?>
<script src="<?php echo URL; ?>app/sts/assets/js/custom.js"></script>
</body>

</html>