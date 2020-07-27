<?php
/**
 *
 */
class Locais {

  private $id = null;
  private $nome;
  private $cep;
  private $logradouro;
  private $complemento;
  private $numero;
  private $bairro;
  private $uf;
  private $cidade;
  private $data;

  public function __construct($nome, $data) {
        $this->nome = $nome;
        $this->cep = $cep;
        $this->logradouro = $logradouro;
        $this->complemento = $complemento;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->uf = $uf;
        $this->cidade = $cidade;
        $this->data = $data;
    }

  public function getNome() {
    return $this->nome;
  }

  public function setNome($nome) {
    $this->nome= $nome;
  }

  public function getCep() {
    return $this->cep;
  }

  public function setCep($cep) {
    $this->cep= $cep;
  }

  public function getLogradouro() {
    return $this->logradouro;
  }

  public function setLogradouro($logradouro) {
    $this->logradouro= $logradouro;
  }

  public function getComplemento() {
    return $this->complemento;
  }

  public function setComplemento($complemento) {
    $this->complemento= $complemento;
  }
  public function getNumero() {
    return $this->numero;
  }

  public function setNumero($numero) {
    $this->numero= $numero;
  }
  public function getBairro() {
    return $this->bairro;
  }

  public function setBairro($bairro) {
    $this->bairro= $bairro;
  }
  public function getUf() {
    return $this->uf;
  }

  public function setUf($uf) {
    $this->uf= $uf;
  }
  public function getCidade() {
    return $this->cidade;
  }

  public function setCidade($cidade) {
    $this->cidade= $cidade;
  }

  public function getData() {
    return $this->data;
  }

  public function setData($data) {
    $this->data= $data;
  }

}


?>
