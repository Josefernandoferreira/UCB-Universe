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
require_once (__ROOT__.'/class/controller/lojaController.php');

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
                <a href="mapa.php"><img src="../pix/title.png" class="img-fluid logo" alt="some text" width="100px" height="20%"></a>
            </div>
            <div class="col-1">
                <img src="../pix/star.gif" class="img-fluid star-pts">
            </div>
            <div class="col-3">
                <p class="num-pts"> = <?php echo $quest->consultaPonto($quest->userQuest($matricula)); ?>  </p>
            </div>
            <div class="col-2">
                <a href="../class/sair.php">
                    <img src="../pix/menu/power-off.png" class="img-fluid sair">
                </a>
            </div>
        </div>
        <div class="main-title">
            Extras
        </div>

        <div class="row justify-content-md-center mt-5">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="extras/desafioEdu.php">> DESAFIO EDUCONNECT</a></li>
                    </ol>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="extras/videos.php">> VÍDEOS</a></li>
                    </ol>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="extras/redeSocial.php">> REDES SOCIAIS</a></li>
                    </ol>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page"><a href="extras/tickets.php">> TICKETS SORTEIO</a></li>
                    </ol>
                </nav>
            </div>
        </div>
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