<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
        <div class="form_cadastro">
          <form id="login_form" method="POST" action="inserir_produto.php">
            <h2>Cadastro de Produtos</h2></br></br>
            <div class="form-message"></div>

            Nome:</br>
            <input class="" type="text" name="nome" id="nome" placeholder="Informe o nome" required /></br></br>

            Cep:</br>
            <input class="" type="text" name="cep" id="cep" placeholder="Informe o cep" required /></br></br>

            Logradouro:</br>
            <input class="" type="text" name="logradouro:" id="logradouro:" placeholder="Informe o Logradouro:" required /></br></br>
            Logradouro: </br>
            <select id="categoria" name="categoria" class="ui dropdown" required>
              <?php
                foreach ($categorias as $k => $v) {
                    echo "<option value=\"" . $v->getId() . "\">" . utf8_encode($v->getNome()) . "</option>";
                }
              ?>
            </select>
            <br/><br/>

            Marca: </br>
            <select id="marca" name="marca" class="ui dropdown" required>
              <?php
                foreach ($marcas as $k => $v) {
                  echo "<option value=\"" . $v->getId() . "\">" . utf8_encode($v->getNome()) . "</option>";
                }
              ?>
            </select>
            <br/><br/>

            <input class="button" type="submit" name="btCadastrar" value="Cadastrar">
            </div>
          </form>
        </div>
      </div>

  </body>
</html>
