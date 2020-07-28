<?php
  require_once "Models/Locais.php";
  require_once "Models/LocaisDAO.php";
  require_once "Models/iModeloCrudDAO.php";

 ?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php include 'Views/modulos/header.php'?>
  </head>
  <body>


  <?php
    // $c1 = new Locais("Edson", "a", "as", "asd", "asdf", "asdfg" , "asdfgh", "asdfghj", "1997-07-12");
    // $locaisDAO = new LocaisDAO();
    // $locaisDAO->create($c1);
   ?>
<div class="conteiner">
  <h2>Locais</h2>
  <table>
    <thead>
      <tr>
        <th>Nome</th>
        <th>Data</th>
        <th>Editar</th>
        <th>Apagar</th>
      </tr>

    </thead>
    <tbody>

      <?php

          $locaisDAO2 = new LocaisDAO();
          $locais2 = $locaisDAO2->listarLocais();

          foreach ($locais2 as  $registro) {  $date = date_create($registro->getData()); ?>
<tr>

          <td><?= $registro->getNome() ?></td>
          <td><?=  date_format($date, 'd/m/Y')?></td>
          <td  data-id=<?= $registro->getId()?>> <button  type="button"  onclick="teste()">Editar</button> </td>
          <td data-bruno=<?= $registro->getId()?>> <button type="button"   onclick="teste()">Excluir</button> </td>
        </tr>

      <?php }?>
    </tbody>
  </table>

</div>
    <a href="novoLocal.php">
    <button class="btnForm" type="button" name="button">Criar novo local</button>
    </a>

  </body>
  <script src="http://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

  <script type="text/javascript">
    function teste(){
      console.log($(this).data("bruno"))
    }
  </script>
</html>
