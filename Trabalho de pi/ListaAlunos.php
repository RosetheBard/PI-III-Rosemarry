<?php
require_once('back/pushAlunos.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CIP">
    <!-- linkando com as folhas de estilo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">



    <title>Cadastros</title>
</head>

<body class="container-fluid">
    <header class="d-flex row p-1">
        <div class="col-12">
            <img src="assets/header-logo3c.png" alt="..." class="img-mid">

            <a href="index.php" class="btn btn-primary float-r m-3">Voltar</a>
        </div>
    </header>
    <main class="d-flex row justify-content-center">
        <div class="col-3"></div>
        <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-2 shadow-lg">
            <div class="flex-column">
                <?php
                for ($i = 1; $i <= $repeat; $i++) {
                    $query1 = "SELECT * FROM aluno WHERE ID = '$i'";
                    $puxa1 = $mysqli->query($query1);
                    $mostra = $puxa1->fetch_object();

                    if($mostra->SITUACAO == "on"){$ssitu="Matriculado";}else{$ssitu="Em Espera";}
                    $alunos = '
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="assets/usericon.jpg" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$mostra->NOME.'</h5>
                                        <p class="card-text">'.$mostra->CPF.'</p>
                                        <p class="card-text">'.$ssitu.'</p>
                                        <p class="card-text">'.$mostra->CURSO.'</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ';
                    echo $alunos;
                
                }
                ?>
            </div>
        </div>
        <div class="col-3"></div>
    </main>
    <footer class="d-flex row p-1">
        <small>Feito por <a href="#">Rosemarry</a></small>
    </footer>
</body>

</html>