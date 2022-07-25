<?php

include("../../conexao.php");
session_start();


$id = $_GET['id'];


?>
    <?php


$result_busca = "SELECT * FROM artigos where id like $id ";
$resultado = mysqli_query($connect, $result_busca);
$con = $connect->query($result_busca) or die($mysqli->error);
/* LENDO DADOS DO BANCO DE DADOS */
while ($dado = $con->fetch_array()) { ?>
    <?php $visibilidade = $dado['visibilidade']; ?>
    
<?php }




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
                    <a href="artigos.php" class="btn-link" type="submit">Artigos</a>
                </li>
                <li class="nav-item">
                    <a href="videos.php" class="btn-link ml-5" type="submit">Vídeos</a>
                </li>

            </ul>
        </div>
    </nav>



    <section class="artigos container d-flex justify-content-center align-items-center flex-column">
        <h1 class="mt-5">Você tem certeza que quer remover o artigo ?</h1>

    </section>

    <section class="d-flex justify-content-center align-items-center text-center"><h1 class="mt-5"> <?php if(isset($_SESSION['statuslogo'])){echo $_SESSION['statuslogo']; unset($_SESSION['statuslogo']);}?></h1>
</section>

    <section class="controles container d-flex justify-content-center align-items-center flex-lg-row flex-column">

        
        <div class="d-flex inserirartigo justify-content-center align-items-center flex-column ">
         
            <a style="justify-content: center;
    align-items: center;
    display: flex;"class="btn-enviar mt-3"href="proc_del_art.php?id=<?php echo $id?>">Excluir Artigo</a>           
            


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