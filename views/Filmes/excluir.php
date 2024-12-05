<?php

if(isset($_GET['id']) && !empty($_GET['id'])){
    require_once "../../controllers/FilmeController.php";

    $FilmeController = new FilmeController();

    $res = $FilmeController->remove($_GET['id']);

    if($res){
        header("location: ./");
        exit();
    }
}