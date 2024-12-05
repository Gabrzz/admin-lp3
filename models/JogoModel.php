<?php

require_once "Conexao.php";
require_once "Jogo.php";

class JogoModel
{

    public $tabela = "jogos";

    public function create(Jogo $j){
        try{
            $sql = "INSERT INTO $this->tabela (jogo, numero_integrantes) VALUES (?,?)";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $j->getJogo());
            $stmt->bindValue(2, $j->getNumerointegrantes());
            return $stmt->execute();
        }
        catch(PDOException $e){
            echo "Erro: " . $e->getMessage();
            echo "Número: " . (int)$e->getCode();
        }
    }
    public function read(){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Jogo');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id){
        $stmt = Conexao::getConn()->prepare("SELECT * FROM $this->tabela WHERE id = ?");
        $stmt->bindParam(1,$id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Jogo');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Jogo $j){
        try{
            $sql = "UPDATE $this->tabela SET jogo = ?, numero_integrantes = ? WHERE id = ?";
            $stmt = Conexao::getConn()->prepare($sql);
            $stmt->bindValue(1, $j->getJogo());
            $stmt->bindValue(2, $j->getNumerointegrantes());
            $stmt->bindValue(3, $j->getId());
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
