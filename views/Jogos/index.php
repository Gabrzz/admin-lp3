<?php 
   require_once "../../controllers/JogoController.php";
   $JogoController = new JogoController();
   $resultData = $JogoController->read();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../includes/head.php"; ?>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <?php include "../includes/menu.php"; ?>
            <div class="col-9">
                <h3>Cadastro de jogos</h3>
                <a href="adicionar.php" class="btn btn-success">Adicionar</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Jogo</th>
                            <th scope="col">Numero de integrantes</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php foreach($resultData as $data){ ?>
                                <tr>
                                    <th><?= $data->getId() ?></th>
                                    <th><?= $data->getJogo() ?></th>
                                    <th><?= $data->getNumerointegrantes() ?></th>
                                    <th>
                                        <a class='btn btn-info' href="editar.php?id=<?= $data->getId() ?>">Editar</a>
                                        <button class='btn btn-danger' onClick='excluir(<?= $data->getId() ?>)'>Excluir</button>
                                    </th>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
    <script>
        function excluir(id) {
            if(confirm("Tem certeza?")) {
                window.location = "excluir.php?id=" + id;
            }
        }
    </script>
</body>

</html>