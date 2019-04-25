
<?php
        //mensagem
        include_once "layout/mensagem.php";

        include_once "layout/topo.php";

        //incluindo conexao com banco de dados
        include_once 'acoes/conexaobanco.php';
?>
<?php
          if(isset($_POST['botao'])){


            $senha=$_POST["senha"];
            $email=$_POST["email"];


            if($senha == "adminwebagro2019" && $email == "webagrotech@gmail.com" ){

                header('Location: formulario.php');
                $_SESSION['mensagem'] = "Olá, Seja bem vindo novamente.";

            }else{
                header('Location: index.php');
                $_SESSION['mensagem'] = "Credenciais inválidas";


            }

        }

?>
        <br><br><br><br>
        <div class="valign-wrapper row login-box">
                <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
                    <form class="" method="post" action="#">
                        <div>
                            <p class="align-center"></p>
                            <div class="row">
                                <div class="input-field col s12">
                                    <label for="email">Email </label>
                                    <input type="email" class="validate"  name="email" id="email" />
                                </div>
                                <div class="input-field col s12">
                                    <label for="password">Senha </label>
                                    <input type="password" class="validate"  name="senha" id="senha" />
                                </div>
                            </div>
                        </div>
                        <div class="card-action right-align">
                            <button type="submit" name="botao" class="btn green waves-effect waves-light">Entrar</button>
                        </div>
                    </form>
                 </div>
        </div>



<?php
//fazendo a requisição do rodapé do meu projeto
@require_once 'layout/rodape.php';
?>
