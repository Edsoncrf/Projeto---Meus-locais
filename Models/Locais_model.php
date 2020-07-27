<?php
require_once '../Controllers/Conexao.php';

class Locais_model{
    function add($param){
        try {
            $conexao = Conexao::getInstance();
            $stmt = $conexao->prepare("INSERT INTO locais VALUES (:nome,:cep,:logradouro,:complemento,:numero,:bairro,:uf,:cidade,:data)");
            return $stmt->execute(array(
                ':nome' => $param['nome'],
                ':cep' => $param['cep'],
                ':logradouro' => $param['logradouro'],
                ':complemento' => $param['complemento'],
                ':numero' => $param['numero'],
                ':bairro' => $param['bairro'],
                ':uf' => $param['uf'],
                ':cidade' => $param['cidade'],
                ':data' => $param['data']
            ));
        } catch (PDOException $e) {
            $e->getMessage();
            $e->getFile();
        }
    }

    function remover($param){
        try {
            $conexao = Conexao::getInstance();
            $stmt = $conexao->prepare("DELETE FROM locais WHERE id = {$param['id']}");
            return $stmt->execute();
        } catch (PDOException $e) {
            $e->getMessage();
            $e->getFile();
        }
    }

    function editar($param){
        try {
            $conexao = Conexao::getInstance();
            $stmt = $conexao->prepare("UPDATE locais SET 'nome'= :nome,'cep' = :cep,'logradouro' = :logradouro,'complemento' = :complemento,'numero' = :numero,'bairro' = :bairro,'uf' = :uf,'cidade' = :cidade,'data' = :data WHERE id = :idInsti");
            $stmt->execute(array(
              ':nome' => $param['nome'],
              ':cep' => $param['cep'],
              ':logradouro' => $param['logradouro'],
              ':complemento' => $param['complemento'],
              ':numero' => $param['numero'],
              ':bairro' => $param['bairro'],
              ':uf' => $param['uf'],
              ':cidade' => $param['cidade'],
              ':data' => $param['data']
            ));
        } catch (PDOException $e) {
            $e->getMessage();
            $e->getFile();
        }
    }

    function listar(){
        try {
            $conexao = Conexao::getInstance();
            $stmt = $conexao->prepare("SELECT * FROM locais");
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
            $e->getFile();
        }
    }

}
