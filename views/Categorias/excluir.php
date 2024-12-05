<?php

if(isset($_GET['id']) && !empty($_GET['id'])){
    require_once "../../controllers/CategoriaController.php";

    $CategoriaController = new CategoriaController();

    $res = $CategoriaController->remove($_GET['id']);

    if($res){
        header("location: ./");
        exit();
    }
}