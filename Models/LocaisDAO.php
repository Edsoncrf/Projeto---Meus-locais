<?php
require_once "iModeloCrudDao.php"
require_once "../Controllers/ConexaoPdo.php";

class LocaisDAO implements iModeloCrudDao {
    private $instanciaConexaoPdo;
    private $tabela;

    public function __construct() {
        $this->instanciaConexaoPdo = ConexaoPdo::getInstancia();
        $this->tabela = "locais";
    }

    public function create($objeto) {
        $id = $this->getNovoIDLocal();
        $nome = $objeto->getNome();
        $cep = $objeto->getCep();
        $logradouro = $objeto->getLogradouro();
        $complemento = $objeto->getComplemento();
        $numero = $objeto->getNumero();
        $bairro = $objeto->getBairro();
        $uf = $objeto->getUf();
        $cidade = $objeto->getCidade();
        $data = $objeto->getData();
        $sqlStmt = "INSERT INTO {$this->tabela} VALUES (:id,:nome,:cep,:logradouro,:complemento,:numero,:bairro,:uf,:cidade,:data)";
        try {
            $operacao = $this->instanciaConexaoPdo->prepare($sqlStmt);
            $operacao->bindValue(":id", $id, PDO::PARAM_INT);
            $operacao->bindValue(":nome", $nome, PDO::PARAM_STR);
            $operacao->bindValue(":cep", $cep, PDO::PARAM_STR);
            $operacao->bindValue(":logradouro", $logradouro, PDO::PARAM_STR);
            $operacao->bindValue(":complemento", $complemento, PDO::PARAM_STR);
            $operacao->bindValue(":numero", $numero, PDO::PARAM_STR);
            $operacao->bindValue(":bairro", $bairro, PDO::PARAM_STR);
            $operacao->bindValue(":uf", $uf, PDO::PARAM_STR);
            $operacao->bindValue(":cidade", $cidade, PDO::PARAM_STR);
            $operacao->bindValue(":data", $data, PDO::PARAM_STR);
            if($operacao->execute()){
                if($operacao->rowCount() > 0) {
                    $objeto->setID($id);
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch(PDOException $excecao) {
            echo $excecao->getMessage();
        }
    }

    public function read($id) {
       $sqlStmt = "SELECT * FROM {$this->tabela} WHERE id=:id";
       try {
          $operacao = $this->instanciaConexaoPdo->prepare($sqlStmt);
          $operacao->bindValue(":id", $id, PDO::PARAM_INT);
          $operacao->execute();
          $getRow = $operacao->fetch(PDO::FETCH_OBJ);
          $nome = $getRow->nome;
          $data = $getRow->data;
          $objeto = new Local($nome, $data);
          $objeto->setId($id);
          return $objeto;
       } catch(PDOException $excecao){
          echo $excecao->getMessage();
       }
    }

    public function update($objeto) {
       $id = $objeto->getId();
       $nome = $objeto->getNome();
       $cep = $objeto->getCep();
       $logradouro = $objeto->getLogradouro();
       $complemento = $objeto->getComplemento();
       $numero = $objeto->getNumero();
       $bairro = $objeto->getBairro();
       $uf = $objeto->getUf();
       $cidade = $objeto->getCidade();
       $data = $objeto->getData();
       $sqlStmt = "UPDATE {$this->tabela} SET nome=:nome,cep=:cep,logradouro=:logradouro,complemento=:complemento,numero=:numero,bairro=:bairro,uf=:uf,cidade=:cidade,data=:data WHERE id=:id";
       try {
          $operacao = $this->instanciaConexaoPdo->prepare($sqlStmt);
          $operacao->bindValue(":id", $id, PDO::PARAM_INT);
          $operacao->bindValue(":nome", $nome, PDO::PARAM_STR);
          $operacao->bindValue(":cep", $cep, PDO::PARAM_STR);
          $operacao->bindValue(":logradouro", $logradouro, PDO::PARAM_STR);
          $operacao->bindValue(":complemento", $complemento, PDO::PARAM_STR);
          $operacao->bindValue(":numero", $numero, PDO::PARAM_STR);
          $operacao->bindValue(":bairro", $bairro, PDO::PARAM_STR);
          $operacao->bindValue(":uf", $uf, PDO::PARAM_STR);
          $operacao->bindValue(":cidade", $cidade, PDO::PARAM_STR);
          $operacao->bindValue(":data", $data, PDO::PARAM_STR);
          if($operacao->execute()){
             if($operacao->rowCount() > 0){
                return true;
             } else {
                return false;
             }
          } else {
             return false;
          }
       } catch (PDOException $excecao)  {
          echo $excecao->getMessage();
       }
    }

    public function delete( $id ) {
        $sqlStmt = "DELETE FROM {$this->tabela} WHERE id=:id";
       try {
          $operacao = $this->instanciaConexaoPdo->prepare($sqlStmt);
          $operacao->bindValue(":id", $id, PDO::PARAM_INT);
          if($operacao->execute()){
             if($operacao->rowCount() > 0) {
                   return true;
             } else {
                   return false;
             }
          } else {
             return false;
          }
       } catch (PDOException $excecao) {
          echo $excecao->getMessage();
       }
    }

    private function getNovoIDLocal(){
          $sqlStmt = "SELECT MAX(id) AS id FROM {$this->tabela}";
          try {
             $operacao = $this->instanciaConexaoPdo->prepare($sqlStmt);
             if($operacao->execute()) {
                if($operacao->rowCount() > 0){
                   $getRow = $operacao->fetch(PDO::FETCH_OBJ);
                   $idReturn = (int) $getRow->id + 1;
                   return $idReturn;
                } else {
                   throw new Exception("Ocorreu um problema com o banco de dados");
                   exit();
                }
             } else {
                throw new Exception("Ocorreu um problema com o banco de dados");
                exit();
              }
          } catch (PDOException $excecao) {
             echo $excecao->getMessage();
          }
       }
    }
?>
