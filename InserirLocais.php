<?php
require_once "Models/Locais.php";
require_once "Models/LocaisDAO.php";
// include_once "novoLocal.php";

$nome = $_POST["nome"];
$cep = $_POST["cep"];
$logradouro = $_POST["logradouro"];
$complemento = $_POST["complemento"];
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$uf = $_POST["uf"];
$cidade = $_POST["cidade"];
$data = $_POST["data"];

$locais = new Locais($nome, $cep, $logradouro, $complemento, $numero, $bairro, $uf, $cidade, $data);
$locaisDAO = new LocaisDAO();
// $locaisDAO->create($locais);

if($locaisDAO->create($locais)){
    echo "Locais cadastrado com sucesso";
  } else {
    echo "Falha de cadastro!";
  }

 ?>
