<?php
    if(isset($_POST) && count($_POST)){
        require_once "../../controllers/FilmeController.php";

        $c = new Filme();
        $c->setFilme(htmlspecialchars($_POST['campoFilme']));
        $c->setGenero(htmlspecialchars($_POST['campoGenero']));
        $c->setDescricao(htmlspecialchars($_POST['campoDescricao']));
        $c->setDiretor(htmlspecialchars($_POST['campoDiretor']));
        $c->setDuracao(htmlspecialchars($_POST['campoDuracao']));
        $c->setEstudante(htmlspecialchars($_POST['campoEstudante']));

        $FilmeController = new FilmeController();
        $res = $FilmeController->add($c);

        if($res){
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
                <h3>Cadastro de jogos</h3>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="idFilme" class="form-label">Filme:</label>
                        <input type="text" class="form-control" name="campoFilme" id="idFilme" placeholder="Informe o filme"/>
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="idGenero" class="form-label">Gênero:</label>
                        <input type="text" class="form-control" id="idGenero" name="campoGenero" placeholder="Insira o gênero"/>
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="idDiretor" class="form-label">Diretor:</label>
                        <input type="text" class="form-control" id="idDiretor" name="campoDiretor" placeholder="Insira o diretor"/>
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="idDuracao" class="form-label">Duração:</label>
                        <input type="time" class="form-control" id="idDuracao" name="campoDuracao"/>
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="idEstudante" class="form-label">Estudante:</label>
                        <input type="text" class="form-control" id="idEstudante" name="campoEstudante" placeholder="Insira o estudante"/>
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="idDescricao" class="form-label">Gênero:</label>
                        <textarea class="form-control" id="idDescricao" name="campoDescricao"/></textarea>
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