<?php 
    $nomeCurso1 = "Full Stack";
    $descricaoCurso1 = "Curso de desenvolvimento web";
    $valorCurso1 = 1000.99;
    $imagemCurso1 = "full.jpeg";

    $nomeCurso2 = "Marketing Digital";
    $descricaoCurso2 = "Curso de Marketing";
    $valorCurso2 = 1000.98;
    $imagemCurso2 = "marketing.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <span>Cursos</span>
            </a>
            </div>
            <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Pesquise Aqui">
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                <img src="<?php echo "assets/img/$imagemCurso1"; ?>" alt="<?php echo "Foto curso $nomeCurso1"; ?>">
                <div class="caption">
                    <h3><?php echo $nomeCurso1; ?></h3>
                    <p><?php echo $descricaoCurso1; ?></p>
                    <p><?php echo $valorCurso1; ?></p>
                    <a href="#" class="btn btn-primary" role="button">Comprar</a>
                </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                <img src="<?php echo "assets/img/$imagemCurso2"; ?>" alt="<?php echo "Foto curso $nomeCurso2"; ?>">
                <div class="caption">
                    <h3><?php echo $nomeCurso2; ?></h3>
                    <p><?php echo $descricaoCurso2; ?></p>
                    <p><?php echo $valorCurso2; ?></p>
                    <a href="#" class="btn btn-primary" role="button">Comprar</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>