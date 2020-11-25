<?php
/**
 * @package    ucbUniverse
 * @copyright  2019 Rodrigo Antunes
 * @license    Software Proprietário
 */
session_start();
if(!isset($_SESSION['matricula'])){
    header('Location: ../index.php');
}

$matricula = $_SESSION['matricula'];

define('__ROOT__', dirname(dirname(__FILE__)));
require_once (__ROOT__.'/class/controller/questoesController.php');

$quest = new QuestoesController();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>UCB UNIVERSE</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P|Russo+One&display=swap" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>
            <body class="background">
            <div class="font-main">
                <div class="container">

                    <div class="row justify-content-between">
                        <div class="col-2">
                            <div class="btn-back mt-3">
                                <img src="../pix/back.png" class="img-fluid" onclick="history.back()">
                            </div>
                        </div>

                        <div class="col-4">

                            <!--<h1 class="mt-6">UCB <p>UNIVERSE</p></h1>-->
                            <p class="num-pts">  <img src="../pix/star.gif" width="20x" style="vertical-align:sub;">  <?php echo $quest->consultaCoin($quest->userQuest($matricula)); ?>  </p>

                        </div>
                        <div class="col-1">
                            <img src="../pix/coin.png" class="img-fluid star-pts">
                        </div>

                        <div class="col-3">
                            <p class="num-pts2">  <?php echo $quest->consultaPonto($quest->userQuest($matricula)); ?>  </p>
                        </div>

            <div class="col-2">
                <a href="../class/sair.php">
                    <img src="../pix/menu/power-off.png" class="img-fluid sair">
                </a>
            </div>
        </div>

        <div class="main-title">
            MAPA
        </div>

        <center> <img src="../pix/title.png" width="250px" height="70px">  <a href="../class/sair.php"></center>

        <!--Planeta 1-->
        <?php if($quest->liberaPlaneta(1, $quest->userQuest($matricula)) != true) { ?>

            <div class="col-md planetBiblioteca-position">
                <img src="../pix/planets/planetaBibliotecalock.png" class="img-fluid clearfix">
            </div>
            <div class="col-md"> </div>
            <div class="col-md"> </div>
            <?php
        } else if($quest->liberaPlaneta(1, $quest->userQuest($matricula)) == true) {
            ?>

            <div class="col-md planetBiblioteca-position">
                <a href="planetaBiblioteca.php"><img src="../pix/planets/planetaBiblioteca.gif" class="img-fluid clearfix"></a>
            </div>
            <div class="col-md"> </div>
            <div class="col-md"> </div>
            <div class="col-md"> </div>

        <?php } ?>

        <!--Planeta 2-->
        <?php if($quest->liberaPlaneta(2, $quest->userQuest($matricula)) != true) { ?>

            <div class="col-md planetK-position">
                <img src="../pix/planets/planetaKlock.png" class="img-fluid clearfix">
            </div>
            <div class="col-md"> </div>
            <div class="col-md"> </div>
            <div class="col-md"> </div>

            <?php
        } else if($quest->liberaPlaneta(2, $quest->userQuest($matricula)) == true) {
            ?>

            <div class="col-md"> </div>
            <div class="col-md planetK-position">

                <?php if($quest->liberaPlaneta(6, $quest->userQuest($matricula)) == true) {
                ?>
                    <a href="lua.php"><img src="../pix/planets/lua.gif" class="img-fluid clearfix" width="70%"></a>
                <?php } ?>

                <a href="planetaK.php"><img src="../pix/planets/planetaK.gif" class="img-fluid clearfix"></a>
            </div>
            <div class="col-md"> </div>

        <?php } ?>


        <!--Planeta 3-->
        <?php if($quest->liberaPlaneta(3, $quest->userQuest($matricula)) != true) { ?>

            <div class="col-md planetM-position">
                <img src="../pix/planets/planetaMlock.png" class="img-fluid clearfix">
            </div>
            <div class="col-md"> </div>
            <div class="col-md"> </div>
            <div class="col-md"> </div>

            <?php
        } else if($quest->liberaPlaneta(3, $quest->userQuest($matricula)) == true) {
            ?>

            <div class="col-md"> </div>
            <div class="col-md"> </div>
            <div class="col-md planetM-position">
                <a href="planetaM.php"><img src="../pix/planets/planetaM.gif" class="img-fluid clearfix"></a>
            </div>

        <?php } ?>

        <div class="col-md sun-position">
            <a href="planetaCentral.php"><img src="../pix/planets/sun.gif" class="img-fluid clearfix"></a>
        </div>
        <div class="col-md"> </div>
        <div class="col-md"> </div>

        <!--Planeta 4-->
        <?php if($quest->liberaPlaneta(4, $quest->userQuest($matricula)) != true) { ?>

            <div class="col-md planetS-position">
                <img src="../pix/planets/planetaSlock.png" class="img-fluid clearfix">
            </div>
            <div class="col-md"> </div>
            <div class="col-md"> </div>
            <div class="col-md"> </div>

            <?php
        } else if($quest->liberaPlaneta(4, $quest->userQuest($matricula)) == true) {
            ?>

            <div class="col-md planetS-position"><a href="planetaS.php"><img src="../pix/planets/planetaS.gif" class="img-fluid clearfix"></a></div>

        <?php } ?>


        <!--<div class="row">
            <div class="col-md"> </div>
            <div class="col-md"> </div>
            <div class="col-md"> </div>
            <div class="col-md astronauta-position">

                <div class="btn-group dropleft">
                    <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../pix/astronauta.png" class="img-fluid clearfix" width="40%">
                    </button>

                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="histCompra.php">Compras</a>
                        <a class="dropdown-item" href="loja.php">Loja</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Ajuda</a>
                        <a class="dropdown-item" href="../class/sair.php">Sair</a>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
</div>
<div class="margin-bar">

</div>
<footer>
    <div class="container">
        <div class="row">
            <ul class="nav justify-content-center fixed-bottom navbar-light footer" style="background-color: #121112">
                <div class="col-3">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="loja.php">
                            <img src="../pix/menu/store.png"  width="34px" height="34px"></br>
                            Loja
                        </a>
                    </li>
                </div>
                <div class="col-3">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="ranking.php">
                            <img src="../pix/menu/ranking.png" width="34px" height="34px"></br>
                            Ranking
                        </a>
                    </li>
                </div>
                <div class="col-3">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="regras.php">
                            <img src="../pix/menu/book.png" width="34px" height="34px"></br>
                            Regras
                        </a>
                    </li>
                </div>
                <div class="col-3">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="extras.php">
                            <img src="../pix/menu/question.png" width="34px" height="34px"></br>
                            Extras
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>

</body>
</html>