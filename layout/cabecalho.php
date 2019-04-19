<!DOCTYPE html>
  <html>
    <head>
      <!--Definindo o idioma padrao da aplicacao-->
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Javascript and Jquery -->
      <script type="text/javascript" src="../js/valida.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!--Import materialize.css-->
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
      <!--Titulo da aplicação-->
      <title>WebAgro</title>
    </head>

    <body>
    <!-- Navbar para melhor navegação na plataforma -->
    <nav class="teal lighten-2">
        <div class="container nav-wrapper">
             <a href="index.php" class="brand-logo">WebAgro</a>
               <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Cadastro</a></li>
                <li><a href="listagem.php">Listagem</a></li>
                <li><a href="sumario.php">Sumário</a></li>
        
            </ul>
        </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
                <li><a href="index.php">Cadastro</a></li>
                <li><a href="listagem.php">Listagem</a></li>
                <li><a href="sumario.php">Sumário</a></li>
    </ul>