<?php session_start();
if(!isset($_SESSION['matricula'])){
    header('Location: ../index.php');
}

require_once '../class/controller/usersController.php';
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
                    <img src="../pix/back.png" class="img-fluid" onclick="history.back()">
                </div>
            </div>
            <div class="col-xs-3 col-3">
                <div class="star-pts">
                    <img src="../pix/star.png" class="img-fluid" align="left">
                </div>
            </div>
            <div class="col-xs-3 col-4">
                <div class="num-pts">
                    <p> = 1200 </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xs-12 col-12">
                <div class="text-center">
                    <!--<h1 class="mt-6">UCB <p>UNIVERSE</p></h1>-->

                    <img src="../pix/title.png" alt="some text" width="30%" height="15%">

                    <div class="title-sub, mt-2">
                        Ajuda
                    </div>
                </div>
            </div>
        </div>
        <?php
            $users = new UsersController();
            $dados = getDados();
            $nome = $dados[0];
            $email = $dados[1];
        ?>
        <div class="row justify-content-center mt-3">
            <div class="col-md-auto">
                <form action="../class/controller/desafioController.php">
                    <div class="card" style="width: 100%;">
                        <div class="card-body letter-cap">
                            <h5 class="card-title">Fale conosco</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Dúvidas ou Dificuldades?</h6>

                            <div class="form-group row">
                                <label for="nome" class="col-4 col-form-label">Nome</label>
                                <div class="col-8">
                                    <input id="nome" name="nome" type="text" value="<?php echo $nome ?>" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email</label>
                                <div class="col-8">
                                    <input id="email" name="email" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="assunto" class="col-4 col-form-label">Assunto</label>
                                <div class="col-8">
                                    <input id="assunto" name="assunto" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mensagem" class="col-4 col-form-label">Mensagem</label>
                                <div class="col-8">
                                    <textarea id="mensagem" name="mensagem" cols="40" rows="5" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


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
                <a class="dropdown-item" href="#">Conquistas</a>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>

</body>
</html>
