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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="background">
    <div class="font-main">
        <div class="container">

            <!--<h1 class="mt-6">UCB <p>UNIVERSE</p></h1>-->
            <div class="row justify-content-md-center">
                <div class="col-md-auto mt-6">
                    <img src="../pix/title.png" alt="some text" width="100%" height="100%">
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-auto mt-6">
                    <div class="f-black">
                        <div>
                            <div class="card-body">
                                <h5 class="card-title"></h5>
                               <!-- <p class="card-text">Vamos decolar nessa aventura!</p>-->
                                <button type="button" class="flash button" data-toggle="modal" data-target="#exampleModalLong">JOGAR</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Instruções Básicas</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span
                                                </button>
                                            </div>
                                            <div class="modal-body letter-cap">
                                                <embed width="100%" height="300px" src="https://www.youtube.com/v/pkvudCohgng" >
                                            </div>
                                            <div class="modal-footer">
                                                <a href="../view/mapa.php"><button type="button" class="btn btn-primary">INICIAR!</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="margin-bar">
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>