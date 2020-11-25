<?php session_start();
if(isset($_SESSION['login'])){
    header('Location: compras.php');
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
<body class="background-adm">
    <div class="font-main">
        <div class="container">

            <!--<h1 class="mt-6">UCB <p>UNIVERSE</p></h1>-->
            <div class="row justify-content-md-center">
                <div class="col-md-auto mt-6">
                    <img src="../../pix/title.png" alt="some text" width="100%" height="100%">
                </div>
            </div>

            <div class="row justify-content-md-center">
                <div class="col-md-auto mt-6">
                    <div class="f-black">
                        <div class="card">
                            <div class="card-header">
                                Acesse sua conta
                            </div>
                            <div class="card-body">
                                <!--Matrícula: <input type="text" class="form-control" placeholder="Matricula" aria-label="Matricula" aria-describedby="basic-addon2">
                                Senha: <input type="password" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon2">
                           <div class="mt-3">
                               <a href="view/abertura.php"><button type="button" class="btn btn-primary">Login</button></a>
                           </div>-->
                                <form action="../../class/loginAdmin.php" method="post">
                                    <div class="form-group">
                                        <label for="labelLogin">Login</label>
                                        <input type="text" class="form-control" name="login" placeholder="Digite seu login">
                                    </div>
                                    <div class="form-group">
                                        <label for="labelSenha">Senha</label>
                                        <input type="password" class="form-control" name="senha" placeholder="Digite sua senha">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>