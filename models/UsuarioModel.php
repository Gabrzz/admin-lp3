<?php

require_once "Conexao.php";
require_once "Usuario.php";

class UsuarioModel
{

    private $tabela = "usuarios";

    public function create(Usuario $c)
    {
        try {
            // Cria string SQL
            $sql = "insert into $this->tabela 
                    (nome, email, senha, telefone) 
                    values (?,?,?,?)";
            // Prepara conexão com banco de dados
            $stmt = Conexao::getConn()->prepare($sql);
            // Insere dados na consulta
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getEmail());
            $stmt->bindValue(3, $c->getSenha());
            $stmt->bindValue(4, $c->getTelefone());

            // Executa código SQL no banco de dados
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo " Número: " . (int)$e->getCode();
        } 
    }
    public function read()
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela");
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findId($id)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where id=?");
        $stmt->bindValue(1, $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetch();
    }

    public function update(Usuario $c)
    {
        try {
            // Cria string SQL
            $sql = "update $this->tabela set nome=?, email=?, 
                    telefone=? where id=?";
            // Prepara conexão com banco de dados
            $stmt = Conexao::getConn()->prepare($sql);
            // Insere dados na consulta
            $stmt->bindValue(1, $c->getNome());
            $stmt->bindValue(2, $c->getEmail());
            $stmt->bindValue(3, $c->getTelefone());
            $stmt->bindValue(4, $c->getId());
            // Executa código SQL no banco de dados
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo " Número: " . (int)$e->getCode();
        }
    }

    public function delete($id)
    {
        try {
            // Cria string SQL
            $sql = "delete from $this->tabela where id=?";
            // Prepara conexão com banco de dados
            $stmt = Conexao::getConn()->prepare($sql);
            // Insere dados na consulta
            $stmt->bindValue(1, $id);
            // Executa código SQL no banco de dados
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo " Número: " . (int)$e->getCode();
        }
    }

    public function updatePassword(Usuario $c)
    {
        try {
            // Cria string SQL
            $sql = "update $this->tabela set senha=? where id=?";
            // Prepara conexão com banco de dados
            $stmt = Conexao::getConn()->prepare($sql);
            // Insere dados na consulta
            $stmt->bindValue(1, $c->getSenha());
            $stmt->bindValue(2, $c->getId());
            // Executa código SQL no banco de dados
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
            echo " Número: " . (int)$e->getCode();
        }
    }

    public function login(Usuario $c)
    {
        $stmt = Conexao::getConn()->prepare("select * from $this->tabela where email=? and senha=?");
        $stmt->bindValue(1, $c->getEmail());
        $stmt->bindValue(2, $c->getSenha());
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Usuario');
        $stmt->execute();
        return $stmt->fetch();
    }
}
