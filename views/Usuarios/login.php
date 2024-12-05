<?php
include "../includes/autoLoad.php";

if(isset($_POST) && count($_POST) > 0) {

    // Faz requisição do controlador
    require_once "../../controllers/LoginController.php";
    // Instancia o objeto
    $user = new Usuario();
    // Monta objeto usuário
    $user->setEmail(htmlspecialchars($_POST['campoEmail']));
    $user->setSenha(md5($_POST['campoSenha']));
    // Instacia o Controlador
    $LoginController = new LoginController();
    // Executa método ADD
    $rs = $LoginController->login($user);
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
    <title>Login</title>
    
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css"> 
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4" style="width: 24rem;">
            <?php FlashMessage::getMessage(); ?>
            <div class="card-body">
                <h5 class="card-title text-center mb-4">Login</h5>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="email" placeholder="Informe seu e-mail" name="campoEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="password" placeholder="Informe sua senha" name="campoSenha" required>
                    </div>
            
                    <button type="submit" class="btn btn-primary w-100">Entrar</button>
                </form>

            </div>
        </div>
    </div>
    <script src="views/assets/js/bootstrap.js"></script>
</body>
</html>
