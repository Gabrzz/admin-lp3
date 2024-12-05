<?php
include "../includes/autoLoad.php";
//Security::verifyAuthentication();

if(isset($_GET['id']) && !empty($_GET['id'])) {
    // Requisito o controlador
    require_once '../../controllers/UsuarioController.php';
    // instancia classe
    $UsuarioController = new UsuarioController();
    // Remove dados
    $rs = $UsuarioController->remove($_GET['id']);

    if($rs) {
        header("location: ./");
        exit();
    }

}