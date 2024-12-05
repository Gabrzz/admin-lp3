<?php

require_once "../../models/FilmeModel.php";

class FilmeController {

    private $model;

    function __construct()
    {
        $this->model = new FilmeModel();
    }

    public function read() {
        return $this->model->read();
    }

    public function add(Filme $c) {
        return $this->model->create($c);
    }

    public function edit(Filme $c) {
        return $this->model->update($c);
    }

    public function findId($id) {
        return $this->model->findId($id);
    }

    public function remove($id) {
        return $this->model->delete($id);
    }

}