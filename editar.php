<?php
//mensagem
include_once "layout/mensagem.php";

//fazendo a requisição do cabechalho html
require_once 'layout/cabecalho.php';

//chamando conexao com banco
include_once 'acoes/conexaobanco.php';


// adicionando conexao a variavel com os dados do banco 
$conn = mysqli_connect($servername, $username, $password, $database);

//verificando se realmente existe um id para ser editado
if(isset($_GET['id'])):
    $id = $_GET['id'];
    $recebe = "SELECT * FROM eventos WHERE id = '$id'";
    $resultado = mysqli_query($conn, $recebe);
    $dados = mysqli_fetch_array($resultado);
endif;  
?>


<div class="row">
    <div class="col s12 m6 push-m3">
        <h3>Editar evento</h3>
        <!-- formulario para cadastro do evento ocorrido -->
        <form action="acoes/atualiza.php" method="POST">
            <div class="input-field col s12">
                <input type="hidden" name="id" pattern="^[( )a-zA-Z]+$" value="<?php echo $dados['id']; ?>">
                <input type="text" name="cidade" value="<?php echo $dados['cidade']; ?>">
                <label for="cidade">Cidade</label>
            </div>
            <div class="input-field col s12" >           
                <select name="estado" class="browser-default" >
                    <option value="" disabled selected >Escolha o estado</option>

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
                <input type="date" name="dataa" value="<?php echo $dados['dataa']; ?>">
                <label for="">Data</label>
            </div>
            <!-- botao para cadastro do evento -->
            <button class="waves-effect waves-light btn teal lighten-2" type="submit" name="btn-atualizar">Atualizar</button><br>
        </form>       
    </div>
</div>




<?php
//fazendo a requisição do rodapé do meu projeto
@require_once 'layout/rodape.php';
?>


