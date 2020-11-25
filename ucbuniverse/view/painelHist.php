<?php session_start();
if(!isset($_SESSION['matricula'])){
    header('Location: ../index.php');
}

$matricula = $_SESSION['matricula'];
require_once  '../class/controller/questoesController.php';

$quest = new QuestoesController();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
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
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-xs-6 col-5">
                <div class="btn-back mt-3">
                    <img src="../pix/back.png" class="img-fluid" onclick="history.go(-1)">
                </div>
            </div>
            <div class="col-xs-3 col-3">
                <div class="star-pts">
                    <img src="../pix/star.png" class="img-fluid" align="left">
                </div>
            </div>
            <div class="col-xs-3 col-4">
                <div id="refresh" class="num-pts">
                    <p> = <?php echo $quest->consultaPonto($quest->userQuest($matricula)); ?>  </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xs-12 col-12">
                <div class="text-center">
                    <!--<h1 class="mt-6">UCB <p>UNIVERSE</p></h1>-->

                    <img src="../pix/title.png" alt="some text" width="30%" height="15%">

                    <div class="title-sub, mt-2">
                        Estrela Central
                    </div>
                </div>
            </div>
        </div>

        <div class="card text-center mt-5">
            <div class="title-sub, f-black">
                Capítulos
            </div>
            <?php
            $planeta = 1;
            $array = $quest->buscaQuest($planeta);
            $i=0;
            $exe = null;
            $verifica = 0;

            foreach ($array as $key => $value){

                $id = $value->id;
                $titulo = $value->titulo;
                $enunciado = $value->enunciado;
                $resposta = $value->resposta;
                $capitulo = $value->capitulo;
                $pontuacao = $value->pontuacao;

                ?>
                <form action="" id="form<?php echo $i ?>" class="card-header form-group" method="POST" role="form" target="_self">

                    <div class="accordion" id="accordionExample">

                        <div class="card">

                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne_<?php echo $i ?>" href="data-target="#collapseOne_<?php echo $i ?> aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo $titulo; ?>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne_<?php echo $i ?>" class="collapse f-black" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="letter-cap">
                                        <p><?php echo $enunciado; ?></p><br>
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
                                        $resp[$i] = $_POST['resposta'.$i];
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

            <?php echo $quest->contagemQuest($planeta); ?>
            <div class="row">
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
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</body>
</html>