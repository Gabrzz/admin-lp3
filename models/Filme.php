<?php

class Filme{
    private int $id;
    private string $filme;
    private string $genero;
    private string $descricao;
    private string $diretor;
    private string $duracao;
    private string $estudante;

    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getFilme()
    {
        return $this->filme;
    }

    public function setFilme($filme)
    {
        $this->filme = $filme;

        return $this;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getDiretor()
    {
        return $this->diretor;
    }

    public function setDiretor($diretor)
    {
        $this->diretor = $diretor;

        return $this;
    }

    public function getDuracao()
    {
        return $this->duracao;
    }

    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;

        return $this;
    }

    public function getEstudante()
    {
        return $this->estudante;
    }

    public function setEstudante($estudante)
    {
        $this->estudante = $estudante;

        return $this;
    }
}