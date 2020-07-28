
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include 'Views/modulos/header.php'?>
    <title></title>
  </head>
  <body>
    <div class="container">
        <div class="form_cadastro">
          <form id="local" method="POST" action="InserirLocais.php">
            <h2>Cadastro de Produtos</h2></br></br>
            <div class="form-message"></div>

            Nome:</br>
            <input class="" type="text" name="nome" id="nome" placeholder="Informe o nome" required /></br></br>

            Cep:</br>
            <input class="" type="text" name="cep" id="cep" placeholder="Informe o cep" required /></br></br>

            Logradouro:</br>
            <input class="" type="text" name="logradouro" id="logradouro" placeholder="Informe o Logradouro:" required /></br></br>

            Complemento:</br>
            <input class="" type="text" name="complemento" id="complemento" placeholder="Informe o complemento:" required /></br></br>

             Número:</br>
            <input class="" type="text" name="numero" id="numero" placeholder="Informe o número:" required /></br></br>

            Bairro:</br>
            <input class="" type="text" name="bairro" id="bairro" placeholder="Informe o bairro:" required /></br></br>
            UF: </br>
            <select id="uf" name="uf" id="uf" class="ui dropdown" required>
              <option value="AC">Acre</option>
            	<option value="AL">Alagoas</option>
            	<option value="AP">Amapá</option>
            	<option value="AM">Amazonas</option>
            	<option value="BA">Bahia</option>
            	<option value="CE">Ceará</option>
            	<option value="DF">Distrito Federal</option>
            	<option value="ES">Espírito Santo</option>
            	<option value="GO">Goiás</option>
            	<option value="MA">Maranhão</option>
            	<option value="MT">Mato Grosso</option>
            	<option value="MS">Mato Grosso do Sul</option>
            	<option value="MG">Minas Gerais</option>
            	<option value="PA">Pará</option>
            	<option value="PB">Paraíba</option>
            	<option value="PR">Paraná</option>
            	<option value="PE">Pernambuco</option>
            	<option value="PI">Piauí</option>
            	<option value="RJ">Rio de Janeiro</option>
            	<option value="RN">Rio Grande do Norte</option>
            	<option value="RS">Rio Grande do Sul</option>
            	<option value="RO">Rondônia</option>
            	<option value="RR">Roraima</option>
            	<option value="SC">Santa Catarina</option>
            	<option value="SP">São Paulo</option>
            	<option value="SE">Sergipe</option>
            	<option value="TO">Tocantins</option>
                <!-- foreach ($categorias as $k => $v) {
                    echo "<option value=\"" . $v->getId() . "\">" . utf8_encode($v->getNome()) . "</option>";
                } -->

            </select>
            <br/><br/>
            Cidade:</br>
            <input class="" type="text" name="cidade" id="cidade" placeholder="Informe a cidade:" required /><br/><br/>

            Data:</br>
            <input class="" type="date" name="data" id="data" placeholder="00-00-0000" required /><br/><br/>

            <input class="button btnForm" type="submit" name="btCadastrar" value="Cadastrar">
            </div>
          </form>

        </div>
      </div>

  </body>
</html>
