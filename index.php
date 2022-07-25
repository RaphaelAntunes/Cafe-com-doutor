<?php 

include("conexao.php");





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
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/hover.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>


<body>

    <!-- NAVBAR -->
    <nav class="navbar container navbar-expand-lg navbar-light bg-light">
        <a href="index.html" class="navbar-brand">Marco Aurélio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto d-flex align-items-center">
                <li class="nav-item active">
                    <a href="#home" class="btn-link" type="submit">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#videos" class="btn-link ml-5" type="submit">Vídeos</a>
                </li>
                <li class="nav-item">
                    <a href="" class="btn-link ml-5" type="submit"><img class="iconsnav" src="img/instagram.svg" alt=""></a>
                </li>
                <li class="nav-item">
                    <a href="" class="btn-link ml-5 mr-5" type="submit"><img class="iconsnav" src="img/facebook.svg" alt=""></a>
                </li>
                <li class="nav-item">
                    <a href="" class="btn-link" type="submit"><img class="iconsnav" src="img/youtube.svg" alt=""></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Hello -->

    <section class="start d-flex justify-content-center align-items-center flex-lg-row flex-column">

        <div class="d-flex flex-column align-items-start justify-content-center">
            <h1>Café com
                <BR> Doutor <img class="cafe" src="img/cafe.svg" alt=""></h1>
            <p>uma simples forma de<br> conhecer o jurídico.</p>
        </div>

        <img class="imgbanner" src="img/banner.svg" alt="">

    </section>

    <section class="advogado container">
        <div class="box d-flex flex-lg-row flex-column align-items-center justify-content-center">
            <div>
                <img src="img/marco.svg" alt="">
            </div>
            <div>
                <h1>O seu Advogado</h1>
                <p>MARCO AURELIO B. DE MORAES – Advogado, OAB/SP 213.256, atuante na Área Cível e empresarial. Graduado em 2002, pela Pontifícia Universidade Católica de Campinas, especialista em Direito Processual Civil, milita na advocacia desde 2.003.
                    Militante nas esferas do Direito Empresarial e Cível, incluídos contencioso e processual. Atendimento à clientes, elaboração e revisão de contratos nacionais e internacionais, transferência de tecnologia, adequação de Lei Geral de
                    Proteção de Dados (LGPD), licença de uso de nome, marca, patente e invenção, propositura de ações ou apresentação de defesa, confecção de recursos, atuação processual em geral.<br>
                    <button type="button" style="color:#0056B3;" data-toggle="modal" data-target="#exampleModal">
Ver mais.                      
</button>

                </p>
            </div>
        </div>
    </section>

    <section class="ajuda container d-flex justify-content-lg-around  flex-lg-row flex-column">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1>Eu posso te ajudar !</h1>
            <p>Com uma experiência de X<br> anos no mercado jurídico e<br> aptidão em (x área) posso<br> ajuda-lo a resolver seu<br> problema.<br><br>Vamos conversar um pouco ?</p>
            <a href="http://wa.me/5519998425678" target="_blank"><button class="btn-falecomigo mb-5">Fale comigo !</button></a>
        </div>

        <div class="boxform d-flex justify-content-center align-items-center flex-column">
            <div class="boxcontent">
                <h2 class="mb-5">Nos deixe uma dúvida</h2>
                <form action="">
                    <div>
                        <label for="">Nome</label>
                        <input class="nome" name="nome" type="text">
                    </div>
                    <div>
                        <label for="">WhatsApp</label>
                        <input class="WhatsApp" name="WhatsApp" type="text">
                    </div>
                    <div>
                        <label for="">Dúvida</label>
                        <input class="duvida" name="duvida" type="text">
                    </div>
                    <div class="justify-content-center d-flex align-items-center">
                        <button class="btn-enviar mb-5">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="equipe d-flex justify-content-center align-items-center text-center flex-column">
        <h1 class="mb-5">O segredo de um bom resultado, é a importância que bons profissionais poem nele.<br>E a gente se preocupa com você !</h1>
        <div class="d-flex flex-lg-row flex-column">

            <div class="caixa">
                <a href="" data-toggle="modal" data-target="#exampleModal2"> <img src="img/img1.png" alt=""></a>

                <h3>Nome 1</h3>
                <p>Especialização</p>
            </div>
            <div class="caixa">
                <a href="" data-toggle="modal" data-target="#exampleModal3"> <img src="img/img1.png" alt=""></a>
                <h3>Nome 1</h3>
                <p>Especialização</p>
            </div>
        </div>
    </section>
    <section class="artigos container d-flex justify-content-center align-items-center flex-column">
        <h1 class="mt-5">Você sabia ?</h1>
        <div class="container justify-content-center align-items-center d-flex flex-lg-row flex-column ">

 

        <?php 

    
$result_busca = "SELECT * FROM artigos where destaque like 1 ";
$resultado = mysqli_query($connect, $result_busca);
$con = $connect->query($result_busca) or die($mysqli->error);
/* LENDO DADOS DO BANCO DE DADOS */
  while($dado = $con->fetch_array()) { ?>
        <?php $nome = $dado['descricao']; ?>       
        <a target='_blank' href='<?php echo $dado['linkconteudo'] ?>'>
        <div class='cardartigo d-flex flex-column justify-content-center align-items-center'>
            <img width="174"src='artigos/<?php echo $dado['linkimg'] ?>'>
            <p><?php echo $dado['descricao'] ?></p>
        </div>
    </a>
    <?php } 

  


?>


   
           
        </div>          

         <!--  <span class="mt-5 mb-5"><a href=""> Ver mais <img class="ajst" src="img/arrow.svg" alt=""></a></span> -->
    </section>

    <section id="videos" class="video container d-flex flex-column">


        <h1>Acompanhe o nosso Canal</h1>

        <div class="d-flex flex-lg-row flex-column justify-content-around align-items-center">
        <?php 

    
$result_busca = "SELECT * FROM youtube where destaque like 1";
$resultado = mysqli_query($connect, $result_busca);
$con = $connect->query($result_busca) or die($mysqli->error);
/* LENDO DADOS DO BANCO DE DADOS */
  while($dado = $con->fetch_array()) { ?>
        <div class="cardvideo">
                <a target="_blank" href="<?php echo $dado['link'] ?>"> <img src="img/red.png" alt="">
                    <h2><?php echo $dado['titulo'] ?></h2>
                    <p><?php echo $dado['legenda'] ?></p>
                    <span><?php echo $dado['ddata'] ?></span></a>
            </div>
    <?php } 

  


?>


           
           
        </div>
        <div class="d-flex mb-5 justify-content-center align-items-center">
           <!-- <span class="mt-5"><a href=""> Ver mais <img class="ajst" src="img/arrow.svg" alt=""></a></span> -->
        </div>
    </section>
    <section class="footer d-flex justify-content-center align-items-center flex-column">
        <h1>2021- © All rights reserved.<br> BTI Technology Solutions</h1>
        <div class="icons-footer d-flex justify-content-around align-items-center ">
            <img src="img/1.svg" alt="">
            <img src="img/2.svg" alt="">
            <img src="img/3.svg" alt="">
        </div>

    </section>





</body>


<!-- Modal Marco -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informações Extras</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            </div>
            <div class="modal-body">
                <b>O profissional possui experiência diferenciada e acentuada no ramo bancário, empresas de franquias, especialmente no que tange à gestão e solução de conflitos, elaboração de contratos, negociação extrajudicial e judicial, repactuação de passivos, direito
                    de família e sucessão, societário e imobiliário.</b> <br><br>Abaixo seguem alguns nomes de clientes prestou e ainda presta serviços jurídicos especializados: <br><br>SANTANDER DO BRASIL<br> ECCO FIBRAS E DISPOSITIVOS
                OPTICOS
                <br> JGK TRANSPORTES
                <br> TEMPERO MANERO- UNIDADE CENTRO CAMPINAS<br> CACAU SHOW- UNIDADE INDAIATUBA<br> GLOBAL MÁRMORES<br> SOUSA RAMOS GROUP<br> TECFIBRAS PRODUTOS INDUSTRIAIS<br> STORM SOLUÇÕES DE INFORMÁTICA<br> EDUCA VIRTUAL<br> FR COMÉRCIO EXPORTAÇÃO
                E IMPORTAÇÃO LTDA.<br> STUDIO BETO SILVEIRA<br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Equipe 1 -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Info 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            </div>
            <div class="modal-body">
                Informações 1
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Equipe 2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Info 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            </div>
            <div class="modal-body">
                Informações 2
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Equipe 3 -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Info 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
            </div>
            <div class="modal-body">
                Informações 3
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap JS -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/meu.js"></script>
<script src="js/videomask.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>