<?php
    include "inc/head.php";
    include "inc/header.php";

    $cursos = [
        "Full Stack" => ["Curso de desenvolvimento web", 1000.99, "full.jpeg", "fullstack"],
        "Marketing Digital" => ["Curso de Marketing", 1000.98, "marketing.jpg", "marketing"],
        "UX" => ["Curso de User Experience", 9000.98, "ux.jpg", "ux"],
        "Mobile Android" => ["Curso de apps", 1000.97, "android.png", "android"]
    ];

    
?>

   

    <div class="container">
        <div class="row">
            <?php foreach ($cursos as $nomeCurso => $infosCurso) : ?>
                <div class="col-sm-6 col-md-6">
                    <div class="thumbnail">
                    <!-- imagem curso -->
                    <img src="<?php echo "assets/img/$infosCurso[2]"; ?>" alt="<?php echo "Foto curso $nomeCurso"; ?>">
                    <div class="caption">
                        <h3><?php echo $nomeCurso; ?></h3>
                        <!-- descrição curso -->
                        <p><?php echo $infosCurso[0]; ?></p>
                        <!-- valor curso -->
                        <p><?php echo $infosCurso[1]; ?></p>
                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="<?php echo "#$infosCurso[3]"; ?>" role="button">Comprar</a>
                    </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php foreach ($cursos as $nomeCurso => $infosCurso) : ?>
                <div class="modal fade" id="<?php echo $infosCurso[3]; ?>" role="dialog">
                    <div class="modal-dialog">
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Preencha o seus dados</h4>
                        </div>
                        <div class="modal-body">
                            <h4> Curso de: <?php echo $nomeCurso; ?> </h4>
                            <h4> Preço: R$ <?php echo $infosCurso[1]; ?> </h4>
                            <form action="validarCompra.php" method="post">
                                <input type="hidden" name="nomeCurso" value="<?php echo $nomeCurso; ?>">
                                <input type="hidden" name="precoCurso" value="<?php echo $infosCurso[1]; ?>">
                                <div class="input-group col-md-5">
                                    <label for="nomeCompleto">Nome Completo</label>
                                    <input id="nomeCompleto" name="nomeCompleto" type="text" class="form-control">
                                </div>
                                <div class="input-group col-md-5">
                                    <label for="cpf">CPF</label>
                                    <input id="cpf" name="cpf" type="number" class="form-control">
                                </div>
                                <div class="input-group col-md-5">
                                    <label for="nroCartao">Número do Cartão</label>
                                    <input id="nroCartao" name="nroCartao" type="number" class="form-control">
                                </div>
                                <div class="input-group col-md-5">
                                    <label for="validade">Validade</label>
                                    <input id="validade" name="validade" type="month" class="form-control">
                                </div>
                                <div class="input-group col-md-5">
                                    <label for="cvv">CVV</label>
                                    <input id="cvv" name="cvv" type="number" class="form-control">
                                </div>
                                <button class="btn btn-primary" type="submit">Comprar</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php include "inc/footer.php"; ?>