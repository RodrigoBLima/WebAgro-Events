<?php
//mensagem
include_once "layout/mensagem.php";

//fazendo a requisição do cabechalho html
require_once 'layout/cabecalho.php';

//incluindo conexao com banco de dados
include_once 'acoes/conexaobanco.php';

?>


<div class="row">
    <div class="col s12 m6 push-m3">
        <h3>Cadastrar novo evento</h3>
        <!-- formulario para cadastro do evento ocorrido -->
        <form action="acoes/criar.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="cidade" pattern="^[( )a-zA-Z]+$"  class="validate" required="" aria-required="true">
                <label for="cidade" data-error="wrong" data-success="right"> Cidade</label>
            </div>
            <div class="input-field col s12">           
                <select name="estado" class="browser-default" required="" aria-required="true"  class="validate">
                    <option value="" disabled selected>Escolha o estado</option>

                    <option value="São Paulo">São Paulo</option>
                    <option value="Rio de Janeiro">Rio de Janeiro</option>
                    <option value="Minas Gerais">Minas Gerais</option>
                    <option value="Espírito Santo">Espírito Santo</option>
                    <option value="Acre">Acre</option>
                    <option value="Alagoas">Alagoas</option>
                    <option value="Amapá">Amapá</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Bahia">Bahia</option>
                    <option value="Ceará">Ceará</option>
                    <option value="Distrito Federal">Distrito Federal</option>
                    <option value="Goiás">Goiás</option>
                    <option value="Maranhão">Maranhão</option>
                    <option value="Mato Grosso">Mato Grosso</option>
                    <option value="Mato Grosso do Su">Mato Grosso do Sul</option>
                    <option value="Pará">Pará</option>
                    <option value="Paraíba">Paraíba</option>
                    <option value="Paraná">Paraná</option>
                    <option value="Pernambuco">Pernambuco</option>
                    <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                    <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                    <option value="Rondônia">Rondônia</option>
                    <option value="Roraíma">Roraíma</option>
                    <option value="Santa Catarina">Santa Catarina</option>
                    <option value="Sergipe">Sergipe</option>
                    <option value="Tocantins">Tocantins</option>


                </select>
            </div>
            <div class="input-field col s12">
                <input type="date" name="dataa" required="" aria-required="true" class="validate">
                <label for="">Data</label>
            </div>
            <!-- botao para cadastro do evento -->
            <button class=" btn teal lighten-2" type="submit" name="btn-cadastrar">Cadastrar</button><br>
        </form>       
    </div>
</div>




<?php
//fazendo a requisição do rodapé do meu projeto
@require_once 'layout/rodape.php';
?>


