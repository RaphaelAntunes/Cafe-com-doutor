<?php

session_start();
include("../../conexao.php");





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
                    <a href="index.php" class="btn-link" type="submit">Artigos</a>
                </li>
                <li class="nav-item">
                    <a href="../youtube" class="btn-link ml-5" type="submit">Vídeos</a>
                </li>

            </ul>
        </div>
    </nav>



    <section class="artigos container d-flex justify-content-center align-items-center flex-column">
        <h1 class="mt-5">Você pode escolher até 5 destaques</h1>
        <h2>Esses são seus artigos em destaque!</h2>
        <div class="container justify-content-center align-items-center d-flex flex-lg-row flex-column ">

            <div class='d-flex flex-column justify-content-center '>
                <div clas="d-flex justify-content-between  ">
                    <h5><?php if (isset($_SESSION['statusupdate'])) {
                            echo $_SESSION['statusupdate'];
                            unset($_SESSION['statusupdate']);
                        } ?></h5>

                    <?php

                    $result_busca = "SELECT * FROM artigos where destaque like 1 ";
                    $resultado = mysqli_query($connect, $result_busca);
                    $con = $connect->query($result_busca) or die($mysqli->error);
                    /* LENDO DADOS DO BANCO DE DADOS */
                    while ($dado = $con->fetch_array()) { ?>
                        <div style="height: 30px;" class="d-flex justify-content-between align-flex-end">
                            <?php echo $dado['descricao'] ?> <br>
                            <a href="proc_rem_artigo.php?id=<?php echo $dado['id'] ?>"><button class="removerbutton ml-lg-5">Remover</button></a>
                        </div>
                    <?php }




                    ?>
                </div>


            </div>


        </div>

    </section>
    <section class="artigos container d-flex justify-content-center align-items-center flex-column">
        <h1 class="mt-5">Basta Clicar para destacar o artigo :)</h1>
        <div class="container justify-content-center align-items-center d-flex flex-lg-row flex-column ">



            <?php


            $result_busca = "SELECT * FROM artigos where destaque like 0 ";
            $resultado = mysqli_query($connect, $result_busca);
            $con = $connect->query($result_busca) or die($mysqli->error);
            /* LENDO DADOS DO BANCO DE DADOS */
            while ($dado = $con->fetch_array()) { ?>
                <?php $nome = $dado['descricao']; ?>
                <a href='proc_add_artigo.php?id=<?php echo $dado['id'] ?>'>
                    <div class='cardartigo d-flex flex-column justify-content-center align-items-center'>
                        <img width="174"src='../../artigos/<?php echo $dado['linkimg'] ?>'>
                        <p><?php echo $dado['descricao'] ?></p>
                    </div>
                </a>
            <?php }




            ?>




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