<?php

include("../../conexao.php");
session_start();





?>

<head>
    <title>Café com Doutor</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/favicon.ico" rel="shortcut icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../css/themify-icons.css" />
    <link rel="stylesheet" href="../../css/animate.css" />
    <link rel="stylesheet" href="../../css/owl.carousel.css" />
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/hover.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>


<body>

    <!-- NAVBAR -->
    <nav class="navbar container navbar-expand-lg navbar-light bg-light">
        <a href="../../index.php" class="navbar-brand">Ir ao Site</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto d-flex align-items-center">
                <li class="nav-item active">
                    <a href="../artigos/" class="btn-link" type="submit">Artigos</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="btn-link ml-5" type="submit">Vídeos</a>
                </li>

            </ul>
        </div>
    </nav>



    <section class="artigos container d-flex justify-content-center align-items-center flex-column">
        <h1 class="mt-5">Adicione Vídeos</h1>

    </section>

    <section class="d-flex justify-content-center align-items-center text-center"><h1 class="mt-5"> <?php if(isset($_SESSION['statuslogo'])){echo $_SESSION['statuslogo']; unset($_SESSION['statuslogo']);}?></h1>
</section>

    <section class="controles container d-flex justify-content-center align-items-center flex-lg-row flex-column">

        <div>
            <img style="width: 100%; max-width:500px;" src="../../img/word.svg" alt="">
        </div>
        <div class="d-flex inserirartigo justify-content-center align-items-center flex-column ">
            <img src="../../img/img.svg" width="120" alt="">
            <form action="logo.php" method="POST" enctype="multipart/form-data">
                <div class="d-flex boxperfil justify-content-center flex-column align-items-center">
                    <div class="logoperfil">
                        <label class="labelmodify" for="selecao-arquivo">Clique e Insira sua Imagem</label>
                        <input id='selecao-arquivo' style="display: none;" name="arquivo" type='file'>
                    </div>
                    <div class="formitem">
                        <label for="">Titulo</label>
                        <input class="linkartigo" name="titulo" type="text">
                    </div>
                    <div class="formitem">
                        <label for="">Legenda</label>
                        <input class="descricao" name="legenda" type="text">
                    </div>
                  
                    <div class="formitem">
                        <label for="">Link</label>
                        <input class="descricao" name="link" type="text">
                    </div>
                    <div class="formitem">
                        <label for="">Data</label>
                        <input class="descricao" name="ddata" type="date">
                    </div>
                 
                  
                    <div style="color: green;" class="mt-3"></div>
                    <button name="enviar-formulario" type="submit" class="btn-enviar mt-4">Inserir Artigo</button>
            </form>
        </div>

    </section>





</body>




<!-- Bootstrap JS -->
<script src="../../js/jquery-3.2.1.min.js"></script>
<script src="../../js/meu.js"></script>
<script src="../../js/videomask.js"></script>
<script src="../../js/owl.carousel.min.js"></script>
<script src="../../js/main.js"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>