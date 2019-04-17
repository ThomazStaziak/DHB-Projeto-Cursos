<?php 
    include "inc/head.php";

    if ($_FILES) {
        var_dump($_FILES["arquivo"]);
        exit;
        $nome = $_FILES["arquivo"]["name"];
        $nomeTemp = $_FILES["arquivo"]["tmp_name"];
        $erro = $_FILES["arquivo"]["error"];
        $pastaRaiz = dirname(__FILE__);
        $pasta = "/assets/img/";
        $caminhoCompleto = $pastaRaiz.$pasta.$nome;
        echo $caminhoCompleto;
        if ($erro == UPLOAD_ERR_OK) {
            move_uploaded_file($nomeTemp, $caminhoCompleto);
        }
    }
?>
    
    <div class="page-center">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="arquivo">
            <button type="submit">Enviar</button>
        </form>
    </div>

<?php 
    include "inc/footer.php";
?>