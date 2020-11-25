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

header('Content-Type: text/html; charset=utf-8');

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
            <?php echo $quest->nomePlaneta(5); ?>
        </div>

        <div class="card text-center mt-1">
            <div class="title-sub f-black">
                Desafios
            </div>
            <?php
            $planeta = 5;
            $array = $quest->buscaQuest($planeta);
            $i=0;
            $exe = null;
            $verifica = 0;

            foreach ($array as $key => $value){

                $id = $value->id;
                $titulo = $value->titulo;
                $enunciado = $value->enunciado;
                $resposta = $value->resposta;
                $pontuacao = $value->pontuacao;

                ?>
                <form action="" id="form<?php echo $i ?>" class="card-header form-group" method="POST" role="form" target="_self">

                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne_<?php echo $i ?>" href="data-target="#collapseOne_<?php echo $i ?> aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo utf8_encode($titulo) .'  '. $quest->confirmaAcertoMini($quest->userQuest($matricula), $id); ?>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne_<?php echo $i ?>" class="collapse f-black" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="letter-cap">
                                        <p style="text-align: left;"><?php echo nl2br(($enunciado)); ?></p><br>
                                    </div>
                                    <div class="letter-cap">
                                        <input type="text" class="form-control mt-3" placeholder="Resposta"
                                               id="resposta<?php echo $i ?>" name="resposta<?php echo $i ?>" aria-label="Resposta"
                                               aria-describedby="basic-addon2">
                                        <button id="env" type="submit" class="btn btn-primary mt-3 mb-3">
                                            Enviar
                                        </button><br/>
                                    </div>
                                    <?php

                                    if ($exe == 0 || $exe == null && $verifica == 0) {
                                        //echo $quest->confirmaQuest($id, $matricula);
                                        //var_dump($quest->userQuest($matricula));
                                        echo $quest->confirmaAcerto($quest->userQuest($matricula), $id, $pontuacao);
                                        if (isset($_POST['resposta'.$i]) && $key == $i) {
                                            $resp[$i] = strtoupper($_POST['resposta'.$i]);
                                            //   var_dump($resp);
                                            $exe = $quest->validaResp($resp[$i], $resposta, $matricula, $id, $planeta, $pontuacao);
                                            echo $exe;
                                            //   var_dump($exe);
                                            unset($resp);
                                            $verifica = $quest->txtDesabilitado($quest->userQuest($matricula), $id);
                                        }
                                        // var_dump($verifica);
                                        //var_dump($key);
                                        //var_dump($exe);

                                    }
                                    //var_dump($quest->contQuestoes($planeta));
                                    /*else if ($exe == 1 && $verifica == 1){ */?><!--
                                            <input type="text" class="form-control mt-3" placeholder="Resposta" id="resposta" name="resposta" aria-label="Resposta" aria-describedby="basic-addon2" disabled>
                                            --><?php
                                    /*                                            //echo $quest->confirmaAcerto($quest->userQuest($matricula), $id);
                                                                            }*/
                                    //unset($resp);
                                    //var_dump($quest->insertUsersQuest($quest->userQuest($matricula), $id));
                                    ?>

                                </div>
                            </div>

                        </div>

                    </div>

                </form>
                <?php
                $i++;
            }
            ?>

            <?php echo $quest->contagemQuest($planeta, $quest->userQuest($matricula)); ?>
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