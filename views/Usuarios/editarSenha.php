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
    $id = htmlspecialchars($_POST['campoId']);
    $senhaAtual = md5($_POST['campoSenhaAtual']);
    $senhaNova = md5($_POST['campoSenhaNova']);
    $senhaNovaConf = md5($_POST['campoSenhaNovaConf']);
    // Executa método EDIT
    $rs = $UsuarioController->editPass($senhaAtual, $senhaNova, $id, $senhaNovaConf);
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
                <?php FlashMessage::getMessage(); ?>
                <form action="" method="post">
                    <input type="hidden" name="campoId" value="<?= $dado->getId(); ?>">
                    <!-- Mostra nome do usuário -->
                    <div class="">
                        <label for="idNome" class="form-label">Nome:</label>
                        <?= $dado->getNome(); ?>
                    </div>
                    <!-- Mostra email de login -->
                    <div class="mb-3">
                        <label for="idEmail" class="form-label">Email de login:</label>
                        <?= $dado->getEmail(); ?>
                    </div>
                    <!-- Campo para senha atual -->
                    <div class="mb-3">
                        <label for="idSenha" class="form-label">Informe sua senha atual:</label>
                        <input type="password" class="form-control" name="campoSenhaAtual" 
                            id="idSenha" placeholder="Digite sua senha atual">
                    </div>
                    <!-- Campo para nova senha -->
                    <div class="mb-3">
                        <label for="idSenhaNova" class="form-label">Informe sua nova senha:</label>
                        <input type="password" class="form-control" name="campoSenhaNova" 
                            id="idSenhaNova" placeholder="Digite sua nova senha">
                    </div>
                    <!-- Campo para confirmar nova senha -->
                    <div class="mb-3">
                        <label for="idSenhaNovaConf" class="form-label">Confirme sua nova senha:</label>
                        <input type="password" class="form-control" name="campoSenhaNovaConf" 
                            id="idSenhaNovaConf" placeholder="Confirme sua nova senha">
                    </div>
                    <!--  Botão de envio dos dados -->
                    <button type="submit" class="btn btn-success">Gravar</button>
                    <a href="./" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>