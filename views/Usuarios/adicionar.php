<?php
include "../includes/autoLoad.php";
//Security::verifyAuthentication();

if(isset($_POST) && count($_POST) > 0) {
    // Faz requisição do controlador
    require_once "../../controllers/UsuarioController.php";
    // Instancia o objeto
    $c = new Usuario();
    // Monta objeto usuário
    $c->setNome(htmlspecialchars($_POST['campoNome']));
    $c->setEmail(htmlspecialchars($_POST['campoEmail']));
    $c->setSenha(md5($_POST['campoSenha']));
    $c->setTelefone(htmlspecialchars($_POST['campoTelefone']));
    // Instacia o Controlador
    $UsuarioController = new UsuarioController();
    // Executa método ADD
    $rs = $UsuarioController->add($c);
    // Redireciona para a INDEX
    if ($rs) {
        header("location: ./");
        exit();
    }
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
                <h3>Cadastro de Usuários</h3>
                <form action="" method="post">
                    <!-- Input nome -->
                    <div class="mb-3">
                        <label for="idNome" class="form-label">Nome:</label>
                        <input type="text" class="form-control" name="campoNome" 
                            id="idNome" placeholder="Informe a nome">
                    </div>
                    <!-- Input e-mail -->
                    <div class="mb-3">
                        <label for="idEmail" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" name="campoEmail" 
                            id="idEmail" placeholder="Informe a e-mail">
                    </div>
                    <!-- Input senha -->
                    <div class="mb-3">
                        <label for="idSenha" class="form-label">Senha:</label>
                        <input type="password" class="form-control" name="campoSenha" 
                            id="idSenha" placeholder="Informe a senha">
                    </div>
                    <!-- Input telefone -->
                    <div class="mb-3">
                        <label for="idTelefone" class="form-label">Telefone:</label>
                        <input type="text" class="form-control" name="campoTelefone" 
                            id="idTelefone" placeholder="Informe a nome">
                    </div>
                    <!-- Botão de envio -->
                    <button type="submit" class="btn btn-success">Gravar</button>
                    <a href="./" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>