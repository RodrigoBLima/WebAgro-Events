<?php
//mensagem
include_once "layout/mensagem.php";

//fazendo a requisição do cabechalho html
@require_once 'layout/cabecalho.html';

//fazendo requisicao do banco de dados
require_once 'acoes/conexaobanco.php';

// criar conexao
$conn = mysqli_connect($servername, $username, $password, $database);


?>

    <div class="container">
        <div class="col s12 m6 push-m3">
            <table class="striped">
                <thead>
                    <tr>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Data</th>
                        <th>Editar</th>
                        <th>Excluir</th> 
                    </tr>
                </thead>

                <tbody>
                <?php 
                  
                    $query = "SELECT * FROM eventos";
                    $resultado = mysqli_query($conn, $query);
                    
                   

                    if(mysqli_num_rows($resultado)>0):
                    
                    while($dados = mysqli_fetch_array($resultado)):
                 ?>

                    <tr>
                        <td><?php echo $dados['cidade']; ?></td>
                        <td><?php echo $dados['estado']; ?></td>
                        <td><?php echo $dados['dataa']; ?></td>
                        <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></td>
                        
                        
                    </tr>
                    <?php 
                        endwhile;
                        else:
                    ?>
                     <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <?php
                         endif;
                     ?> 
                </tbody>
            </table>
        </div>  
    </div>
    
<?php
//fazendo a requisição do rodapé do meu projeto
@require_once 'layout/rodape.html';
?> 
