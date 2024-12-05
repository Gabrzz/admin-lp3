<?php

require_once "Conexao.php";
require_once "Filme.php";

class FilmeModel
{

    public $tabela = "filmes";

    public function create(Filme $c){
        try{
            $sql = "INSERT INTO $this->tabela (filme, genero, descricao, diretor, duracao, estudante) VALUES (?,?,?,?,?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getFilme());
            $stmt->bindValue(2, $c->getGenero());
            $stmt->bindValue(3, $c->getDescricao());
            $stmt->bindValue(4, $c->getDiretor());
            $stmt->bindValue(5, $c->getDuracao());
            $stmt->bindValue(6, $c->getEstudante());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Filme');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela WHERE id = ?");
        $stmt->bindParam(1,$id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Filme');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Filme $c){
        try{
            $sql = "UPDATE $this->tabela SET filme = ?, genero = ?, descricao = ?, diretor = ?, duracao = ?, estudante = ?  WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $c->getFilme());
            $stmt->bindValue(2, $c->getGenero());
            $stmt->bindValue(3, $c->getDescricao());
            $stmt->bindValue(4, $c->getDiretor());
            $stmt->bindValue(5, $c->getDuracao());
            $stmt->bindValue(6, $c->getEstudante());
            $stmt->bindValue(7, $c->getId());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function delete($id){
        try{
            $sql = "DELETE FROM $this->tabela WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $id);
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
}
