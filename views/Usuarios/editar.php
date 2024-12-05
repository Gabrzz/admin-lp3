<?php
include "../includes/autoLoad.php";
//Security::verifyAuthentication();
// Requisita controlador
require_once "../../controllers/UsuarioController.php";
// Instacia o controlador
$UsuarioController = new UsuarioController();

// Verificações
if (isset($_POST) && count($_POST) > 0) {
    // Gravação dos dados
    $c = new Usuario();

    $c->setId(htmlspecialchars($_POST['campoId']));
    $c->setNome(htmlspecialchars($_POST['campoNome']));
    $c->setEmail(htmlspecialchars($_POST['campoEmail']));
    $c->setTelefone(htmlspecialchars($_POST['campoTelefone']));
    // Executa método EDIT
    $rs = $UsuarioController->edit($c);
    // Redireciona para a INDEX
    if ($rs) {
        header("location: ./");
        exit();
    }

} else if(isset($_GET['id']) && !empty($_GET['id'])) {
    $dado = $UsuarioController->findId($_GET['id']);
}


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
                <h3>Cadastro de usuário</h3>
                <form action="" method="post">
                    <input type="hidden" name="campoId" value="<?= $dado->getId(); ?>">
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="campoNome" 
                            id="idNome" placeholder="Seu nome completo"
                            value="<?= $dado->getNome(); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="idEmail" class="form-label">Email:</label>
                        <input type="email" class="form-control" name="campoEmail" 
                            id="idEmail" placeholder="Seu email"
                            value="<?= $dado->getEmail(); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="idTelefone" class="form-label">Telefone:</label>
                        <input type="text" class="form-control" name="campoTelefone" 
                            id="idTelefone" placeholder="Seu telefone"
                            value="<?= $dado->getTelefone(); ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Gravar</button>
                    <a href="./" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>