<?php

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
                        <th>Estados</th>
                        <th>Total de eventos</th>
                        
                    </tr>
                </thead>

                <tbody>
                    
                    <?php

                        //fazendo a contagem dos estados para poder contar
                        // e pegando a quantidade de cada um para poder listar o estado e 
                        // e a quantidade respectiva de eventos ocorridos em cada estado
                        $query = "SELECT eventos.estado, count(1) qtd  FROM eventos GROUP BY eventos.estado";

                        //recebendo a conexao e a minha query
                        $resultado = mysqli_query($conn, $query);

                        //se o meu numero de linhas for maior que zero
                        if(mysqli_num_rows($resultado)>0):

                        //enquanto for verdade que linhas for maior que 0    
                        while($dados = mysqli_fetch_array($resultado)):
                                            
                    ?>

                    <tr>
                        <td><?php echo $dados['estado']; ?></td>
                        <td><?php echo $dados['qtd']; ?></td>
                       
                    </tr>

                    <?php 
                        endwhile;
                        else:
                    ?>
                     <tr>

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


