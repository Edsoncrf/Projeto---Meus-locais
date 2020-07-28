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

          foreach ( $locais2 as $k => $v ) {

            $date = date_create($v->getData());
            $alterar = ($v->getId());
            // var_dump($alterar);
            echo "<tr> <td>". utf8_encode($v->getNome())  . "</td>".
            "<td>" 	.  date_format($date, 'd/m/Y') . "</td>". "<td>"
            . '<button id=',$alterar,' name=alterar tabindex="0" type="submit">Editar</button>' . "</td>".
              "<td>" 	. '<button class="ui red button" id=',$alterar," onclick=",
              ">Apagar</button>" . "</td>";
              // $locaisDAO2->delete($alterar),">Apagar</button>" . "</td>";
        }
      ?>
    </tbody>
  </table>

</div>
    <a href="novoLocal.php">
    <button class="btnForm" type="button" name="button">Criar novo local</button>
    </a>

  </body>
</html>
