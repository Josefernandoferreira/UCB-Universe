<?php
/**
 * @package    ucbUniverse
 * @copyright  2019 Rodrigo Antunes
 * @license    Software Proprietário
 */
session_start();
if(!isset($_SESSION['login'])){
    header('Location: ../admin/acesso.php');
}

$log = $_SESSION['login'];
define('__ROOT__', dirname(dirname(__DIR__)));
require_once (__ROOT__.'/class/controller/questoesController.php');
require_once (__ROOT__.'/class/controller/lojaController.php');

$quest = new QuestoesController();
$loja = new LojaController();

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
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P|Russo+One&display=swap" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body class="background-adm">
<div class="font-main">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-2">
                <div class="btn-back mt-3">
                    <img src="../../pix/back.png" class="img-fluid" onclick="history.back()">
                </div>
            </div>
            <div class="col-4">
                <!--<h1 class="mt-6">UCB <p>UNIVERSE</p></h1>-->
                <a href="../mapa.php"><img src="../../pix/title.png" class="img-fluid logo" alt="some text" width="100px" height="20%"></a>
                <p class="title-sub">Hist. de Compras</p>
            </div>
            <!--<div class="col-2">
                <img src="../pix/star.png" class="img-fluid star-pts" align="left">
            </div>
            <div class="col-2">
                <p class="num-pts"> = <?php /*echo $quest->consultaPonto($quest->userQuest($matricula)); */?>  </p>
            </div>-->
            <div class="col-2">
                <a href="../../class/sair.php">
                    <img src="../../pix/menu/power-off.png" class="img-fluid sair">
                </a>
            </div>
        </div>
        <div class="col-md-auto mt-3">
            <div class="card" style="width: 100%; height: 100%;">
                <div class="card-body letter-cap" id="">
                    <div class="table-responsive">
                        <!--<form action="" id="form" class="card-header form-group" method="POST" role="form" target="_self">
                        <input type="text" class="form-control" name="busca" placeholder="Digite sua busca">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                        </form>-->
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">Matricula</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Produto</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Código</th>
                                <th scope="col">Data Retirada</th>
                                <th scope="col">Data/Horário</th>
                                <th scope="col">Conf. Entrega</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $array = $loja->histComprasParceiro($loja->idParceiro($log));
                            $i=0;
                            $planeta = 1;
                            foreach ($array as $key => $value) {

                                $id = $value->id;
                                $users_id = $value->users_id;
                                $produtos_id = $value->produtos_id;
                                $parceiro_id = $value->parceiro_id;
                                $codigo = $value->codigo;
                                $hrCompra = $value->hrcompra;
                                $entrega = $value->entrega;

                                ?>
                            <form action="registraEntrega.php" id="form" class="card-header form-group" method="POST">
                            <tr>

                                    <th scope="row"><?php echo $loja->matriculaAluno($users_id); ?></th>
                                    <td id="nome<?php echo $i; ?>"><?php echo $loja->nomeAluno($users_id); ?></td>
                                    <td id="nomeProd<?php echo $i; ?>"><?php echo utf8_encode($loja->nomeProd($produtos_id)); ?></td>
                                    <td id="descProd<?php echo $i; ?>"><?php echo utf8_encode($loja->descProd($produtos_id)); ?></td>
                                    <td id="codigo<?php echo $i; ?>"><?php echo $codigo; ?></td>
                                    <td id="dataProd<?php echo $i; ?>"><?php echo $loja->dataProd($produtos_id); ?></td>
                                    <td id="data<?php echo $i; ?>"><?php echo date('d/m/Y H:i',  strtotime($hrCompra)); ?></td>
                                    <input type="hidden" name="key" value="<?php echo $key; ?>">
                                    <input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $id; ?>">
                                    <td><?php
                                        if($entrega == 0){ ?>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">Confirmar</button>
                                        <?php } else if($entrega == 1) { ?>
                                            <button type="button" class="btn btn-success" disabled>Confirmado</button>
                                            <?php
                                        }
                                        ?></td>
                                            <!-- The Modal -->
                                            <div class="modal fade" id="myModal<?php echo $i; ?>">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">

                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Confirmar Compra</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            Deseja confirmar a entrega do produto?
                                                        </div>
                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="button" id="submitForm" class="btn btn-secondary form-control" name="env" data-dismiss="modal<?php echo $i; ?>">Confirmar</button>

                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                </tr>
                            </form>
                                <?php
                                $i++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<footer>
    <div class="container">
        <div class="row">
            <ul class="nav justify-content-center fixed-bottom navbar-light footer" style="background-color: #121112">
                <div class="col-3">
                    <li class="nav-item">
                        <a class="nav-link" href="../loja.php">
                            <img src="../../pix/menu/store.png"  width="34px" height="34px"></br>
                            <p class="justify-content-between" style="color: white">Loja</p>
                        </a>
                    </li>
                </div>
                <div class="col-3">
                    <li class="nav-item">
                        <a class="nav-link" href="../ranking.php">
                            <img src="../../pix/menu/ranking.png" width="34px" height="34px"></br>
                            <p style="color: white">Ranking</p>
                        </a>
                    </li>
                </div>
                <div class="col-3">
                    <li class="nav-item">
                        <a class="nav-link" href="../regras.php">
                            <img src="../../pix/menu/book.png" width="34px" height="34px"></br>
                            <p style="color: white">Regras</p>
                        </a>
                    </li>
                </div>
                <div class="col-3">
                    <li class="nav-item">
                        <a class="nav-link" href="../extras.php">
                            <img src="../../pix/menu/question.png" width="34px" height="34px"></br>
                            <p style="color: white">Extras</p>
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</footer>-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../../js/bootstrap.bundle.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../js/bootstrap.min.js"></script>
<script>

    $("#submitForm").on('click', function() {
        $("#form").submit();
    });
</script>

</body>
</html>