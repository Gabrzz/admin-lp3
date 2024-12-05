<?php
require_once "../../vendors/Security/Security.php";
require_once "../../vendors/Redirect/Redirect.php";
require_once "../../vendors/FlashMessage/FlashMessage.php";
require_once "../../models/UsuarioModel.php";


class LoginController {

    private $model;

    function __construct()
    {
        $this->model = new UsuarioModel();
    }

    public function login(Usuario $user) {
        $rs = $this->model->login($user);
        if($rs) {
            $_SESSION[SessionConf::$sessionObj] = serialize($rs);   
            Redirect::link(Security::path());
            exit();
        } else {
            FlashMessage::setMessage("Usuário ou senha inválido", 0);
        }
    }

}