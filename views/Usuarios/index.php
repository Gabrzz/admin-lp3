<?php 
    include "../includes/autoLoad.php";
    //Security::verifyAuthentication();

    require_once "../../controllers/UsuarioController.php";
    $UsuarioController = new UsuarioController();
    $resultData = $UsuarioController->read();

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
                <h3>Cadastro de Usuários</h3>
                <?php FlashMessage::getMessage(); ?>
                <a href="adicionar.php" class="btn btn-success">Adicionar</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($resultData as $dado) { ?>
                            <tr>
                                <td><?= $dado->getId(); ?></td>
                                <td><?= $dado->getNome(); ?></td>
                                <td><?= $dado->getEmail(); ?></td>
                                <td><?= $dado->getTelefone(); ?></td>
                                <td>
                                    <a href="editar.php?id=<?= $dado->getId(); ?>"
                                        class="btn btn-sm btn-warning">Editar</a>
                                    <a href="editarSenha.php?id=<?= $dado->getId(); ?>"
                                        class="btn btn-sm btn-primary">Editar Senha</a>
                                    <a href="javascript:excluir(<?= $dado->getId(); ?>)"
                                        class="btn btn-sm btn-danger">Excluir</a>
                                </td>
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