<?php
/**
 * @package    ucbUniverse
 * @copyright  2019 Rodrigo Antunes
 * @license    Software Proprietário
 */
session_start();
if(!isset($_SESSION['matricula'])){
    header('Location: ../../index.php');
}

$matricula = $_SESSION['matricula'];
define('__ROOT__', dirname(dirname(__DIR__)));
require_once (__ROOT__.'/class/controller/questoesController.php');

$quest = new QuestoesController();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>UCB UNIVERSE</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">

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
                    <img src="../../pix/back.png" class="img-fluid" onclick="history.back()">
                </div>
            </div>
            <div class="col-4">
                <!--<h1 class="mt-6">UCB <p>UNIVERSE</p></h1>-->
                <a href="../mapa.php"><img src="../../pix/title.png" class="img-fluid logo" alt="some text" width="100px" height="20%"></a>
            </div>

            <div class="col-2">
                <a href="../../class/sair.php">
                    <img src="../../pix/menu/power-off.png" class="img-fluid sair">
                </a>
            </div>
        </div>

        <div class="card text-center mt-5 f-black">
            <div class="card-header">
                <p>Redes Sociais UCB</p>
                <br>
                <p class="letter-cap">Siga os perfis da Universidade Católica de Brasília (UCB) nas redes sociais e garanta 100 pontos para cada follow realizado.</p><br>
                <div class="fora">
                <div class="row">
                    <div class="col-4">
                        <a href="https://www.facebook.com/catolicadebrasilia/">
                            <img id="1" src="../../pix/facebook.png">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="https://www.instagram.com/catolicadebrasilia/">
                            <img id="2" src="../../pix/instagram.png">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="https://twitter.com/catolica">
                            <img id="3" src="../../pix/twitter.png">
                        </a>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-4">
                        <a href="https://www.youtube.com/user/catolicadebrasilia">
                            <img id="4" src="../../pix/youtube.png">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="https://www.linkedin.com/company/universidade-catolica-de-brasilia">
                            <img id="5" src="../../pix/linkedin.png">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="https://www.google.com/url?sa=t&source=web&rct=j&url=https://open.spotify.com/user/catolicadebrasilia&ved=2ahUKEwivzq-Hpe3jAhWmKLkGHUvkCLQQFjAAegQIARAB&usg=AOvVaw1s_57WYWhtPPDnlkcC1SuN">
                            <img id="6" src="../../pix/spotify.png">
                        </a>
                    </div>
                </div>
                </div>
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
                        <a class="nav-link text-center" href="../loja.php">
                            <img src="../../pix/menu/store.png"  width="34px" height="34px"></br>
                            Loja
                        </a>
                    </li>
                </div>
                <div class="col-3">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="../ranking.php">
                            <img src="../../pix/menu/ranking.png" width="34px" height="34px"></br>
                            Ranking
                        </a>
                    </li>
                </div>
                <div class="col-3">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="../regras.php">
                            <img src="../../pix/menu/book.png" width="34px" height="34px"></br>
                            Regras
                        </a>
                    </li>
                </div>
                <div class="col-3">
                    <li class="nav-item">
                        <a class="nav-link text-center" href="../extras.php">
                            <img src="../../pix/menu/question.png" width="34px" height="34px"></br>
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
<script src="../../js/bootstrap.bundle.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../js/bootstrap.min.js"></script>
<script>

    $('.fora').click((e) => {
        var id = e.target.id;
        if(id === 1){
            <?php
            $quest->insertUsersQuest($quest->userQuest($matricula), 200, 6);
            $quest->atribuiPonto(100, $quest->userQuest($matricula));
            ?>
        } else if (id === 2){
            <?php
            $quest->insertUsersQuest($quest->userQuest($matricula), 201, 6);
            $quest->atribuiPonto(100, $quest->userQuest($matricula));
            ?>
        } else if (id === 3){
            <?php
            $quest->insertUsersQuest($quest->userQuest($matricula), 202, 6);
            $quest->atribuiPonto(100, $quest->userQuest($matricula));
            ?>
        } else if (id === 4){
            <?php
            $quest->insertUsersQuest($quest->userQuest($matricula), 203, 6);
            $quest->atribuiPonto(100, $quest->userQuest($matricula));
            ?>
        } else if (id === 5){
            <?php
            $quest->insertUsersQuest($quest->userQuest($matricula), 204, 6);
            $quest->atribuiPonto(100, $quest->userQuest($matricula));
            ?>
        } else if (id === 6){
            <?php
            $quest->insertUsersQuest($quest->userQuest($matricula), 205, 6);
            $quest->atribuiPonto(100, $quest->userQuest($matricula));
            ?>
        }
    });

    /*var count = 0;

    var el = document.getElementById('fora');
    el.addEventListener('click', function(e) {

        var idq = e.target.id;
        if (count == idq){
            alert(e.target.id);

            $quest->insertUsersQuest($quest->userQuest($matricula), 200, 6);
            $quest->atribuiPonto(5, $quest->userQuest($matricula));
            ?>
        } else if (count == idq){
            alert(e.target.id);


            $quest->insertUsersQuest($quest->userQuest($matricula), 201, 6);
            $quest->atribuiPonto(5, $quest->userQuest($matricula));
            ?>
        } else if (count == idq){
            alert(e.target.id);


            $quest->insertUsersQuest($quest->userQuest($matricula), 202, 6);
            $quest->atribuiPonto(5, $quest->userQuest($matricula));
            ?>
        }
        count++;
    });*/

</script>
</body>
</html>