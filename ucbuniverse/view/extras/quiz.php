<?php session_start();
if(!isset($_SESSION['matricula'])){
    header('Location: ../index.php');
}
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
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-xs-6 col-5">
                <div class="btn-back mt-3">
                    <img src="../../pix/back.png" class="img-fluid" onclick="history.back()">
                </div>
            </div>
            <div class="col-xs-3 col-3">
                <div class="star-pts">
                    <img src="../../pix/star.png" class="img-fluid" align="left">
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

                    <img src="../../pix/title.png" alt="some text" width="30%" height="15%">

                    <div class="title-sub, mt-2">
                        Quiz
                    </div>
                </div>
            </div>
        </div>

        <div class="card text-center mt-5">
            <div class="card-header">
                <div class="title-sub, f-black">
                    Quiz
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Pergunta #1
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse f-black" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="letter-cap">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua.
                                </div>
                                <div class="letter-cap">
                                    <div class="col-12">
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#lista-home" role="tab" aria-controls="home">Home</a>
                                            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Perfil</a>
                                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#lista-mensagens" role="tab" aria-controls="messages">Mensagens</a>
                                            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#lista-configuracoes" role="tab" aria-controls="settings">Configurações</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Pergunta #2
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse f-black" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="letter-cap">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua.
                                </div>
                                <div class="letter-cap">
                                    <input type="text" class="form-control mt-3" placeholder="Resposta" aria-label="Resposta" aria-describedby="basic-addon2">
                                    <button type="button" class="btn btn-primary mt-3">Enviar</button>
                                </div>
                            </div>
                        </div>
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
                        <img src="../../pix/astronauta.png" class="img-fluid clearfix" width="40%">
                    </button>

                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="#">Conquistas</a>
                        <a class="dropdown-item" href="../loja.php">Loja</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Ajuda</a>
                        <a class="dropdown-item" href="../../class/sair.php">Sair</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../../js/bootstrap.bundle.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../js/bootstrap.min.js"></script>

</body>
</html>