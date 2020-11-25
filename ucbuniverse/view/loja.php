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
$loja = new LojaController();
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
        <div class="row">
            <div class="col-6">
        <div class="main-title">
            Loja
        </div>
            </div>
            <div class="col-6">
        <div class="hist-compras">
            <a href="histCompra.php"><img src="../pix/bag.png" class="img-fluid"></a>
        </div>
            </div>
        </div>
        <?php

        $array = $loja->buscaProdutos();
        $i=0;
        $planeta = 1;
        foreach ($array as $key => $value){


            $id = $value->id;
            $nome = $value->nome;
            $valor = $value->valor;
            $descricao = $value->descricao;
            $quantidade = $value->quantidade;
            $logo = $value->logo;
            $retirada = $value->retirada;

            ?>
            <form action="registraCompra.php" id="form" class="card-header form-group" method="POST" onsubmit="this.env.disabled=true">
                <div class="row justify-content-center mt-3">
                    <div class="col-md-auto">
                        <div class="card" style="width: 100%;">
                            <div class="card-body letter-cap" id="id<?php echo $id; ?>">
                                <div class="logo-loja">
                                    <img src="<?php echo $logo; ?>" class="img-fluid mb-1">
                                </div>
                                <h5 class="card-title" id="nome<?php echo $i; ?>"><?php echo utf8_encode($nome); ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted" id="valor<?php echo $i; ?>">Valor: <?php echo $valor; ?>pts</h6>
                                <p class="card-text" id=""><?php echo utf8_encode($descricao); ?></p>
                                <p class="card-text" id="">Voucher disponível dia: <?php echo utf8_encode($retirada); ?></p>

                                <input type="hidden" name="key" value="<?php echo $key; ?>">
                                <input type="hidden" name="id<?php echo $i; ?>" value="<?php echo $id; ?>">
                                <!-- <input type="hidden" name="nome<?php /*echo $i; */?>" value="<?php /*echo $nome; */?>">
                                <input type="hidden" name="valor<?php /*echo $i; */?>" value="<?php /*echo $valor; */?>">
                                <input type="hidden" name="quantidade<?php /*echo $i; */?>" value="<?php /*echo $quantidade; */?>">-->
                                <?php  if($quest->consultaPonto($quest->userQuest($matricula)) < $valor && $quantidade > 0){ ?>
                                    <p style="color: red">Saldo Insuficiente!</p>
                                <?php } else if ($quantidade <= 0){?>
                                    <p style="color: red">Produto indisponível no estoque.</p>
                                <?php } else if ($quest->consultaPonto($quest->userQuest($matricula)) >= $valor) { ?>
                                    <button type="button" id="comprar" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
                                        Comprar
                                    </button>
                                    <?php
                                }
                                ?>

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
                                                Deseja confirmar a compra do produto <?php echo $nome; ?>?
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="submit" id="submitForm" class="btn btn-success form-control" name="env" data-dismiss="modal<?php echo $i; ?>">Confirmar</button>
                                                <button type="button" class="btn btn-danger"
                                                        data-dismiss="modal">Close
                                                </button>

                                                <span id="MsgAguarde" style="display:none; font-size:11px;">
                                                <img src="../pix/wait.gif" alt="Aguarde.." /><br />
                                                    Aguarde...
                                                </span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <?php
            $i++;
        }
        ?>
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
<script>

    $("#submitForm").on('click', function() {
        $("#form").submit();
    });


</script>
<script type="text/javascript">
    $().ready(function () {
        $('#submitForm').show();
        $('[id$=submitForm]').click(function () {
            $('#submitForm').hide();
        });
    });
</script>
<script></script>

</body>
</html>
