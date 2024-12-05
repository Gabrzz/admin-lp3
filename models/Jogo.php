<?php

class Jogo{
    private int $id;
    private string $jogo;
    private int $numero_integrantes;
    private ?string $regras;

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setJogo($jogo){
        $this->jogo = $jogo;
    }

    public function getJogo(){
        return $this->jogo;
    }

    public function setNumerointegrantes($numero_integrantes){
        $this->numero_integrantes = $numero_integrantes;
    }

    public function getNumerointegrantes(){
        return $this->numero_integrantes;
    }

    public function setRegras($regras){
        $this->regras = $regras;
    }

    public function getRegras(){
        return $this->regras;
    }
}