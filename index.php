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
    $c1 = new Locais("Edson", "a", "as", "asd", "asdf", "asdfg" , "asdfgh", "asdfghj", "12/07/1997");
    $locaisDAO = new LocaisDAO();
    $locaisDAO->create($c1);
   ?>
<div class="conteiner">
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

          $locais = new Locais();
          $locaisDAO = new LocaisDAO();

          foreach ( $locais as $k => $v ) {


          echo "<tr> <td>". utf8_encode($objP->getNome())  . "</td>".
          "<td>" 	.  utf8_encode($v->getData()) . "</td>".
          "<td> e </td>"." <td> x </td>"."</tr>";

        }
      ?>
    </tbody>
  </table>

</div>
    <h2>Locais</h2>
    <table>
      <tr>
        <th>Nome</th>
        <th>Data</th>
        <th>Editar</th>
        <th>Apagar</th>
      </tr>
        <tr>
        <td>Uruana</td>
        <td>12/07/1997</td>
        <td>e</td>
        <td>x</td>
      </tr>

    </table>
    <a href="#">
    <button type="button" name="button">Criar novo local</button>
    </a>

  </body>
</html>
