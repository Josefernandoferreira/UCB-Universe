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
            <div class="col-1">
                <img src="../../pix/star.png" class="img-fluid star-pts">
            </div>
            <div class="col-3">
                <p class="num-pts"> = <?php echo $quest->consultaPonto($quest->userQuest($matricula)); ?>  </p>
            </div>
            <div class="col-2">
                <a href="../../class/sair.php">
                    <img src="../../pix/menu/power-off.png" class="img-fluid sair">
                </a>
            </div>
        </div>

        <div class="card mt-3">
            <div class="letter-cap">
                <div class="container">
                    <p>
                    <p style="margin-bottom: .0001pt; text-align: center;"><strong><span style="font-size: 16.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">POL&Iacute;TICA DE COOKIES</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">O que s&atilde;o cookies?</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Cookies s&atilde;o pequenos arquivos de texto que s&atilde;o enviados para o seu dispositivo quando voc&ecirc; visita um site. Os cookies ajudam os sites a armazenar e recuperar informa&ccedil;&otilde;es sobre seus h&aacute;bitos de navega&ccedil;&atilde;o, a fim de personalizar a navega&ccedil;&atilde;o de acordo com suas prefer&ecirc;ncias.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">O que n&atilde;o autoriza o uso de cookies?</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Se preferir n&atilde;o autorizar o uso de cookies, voc&ecirc; ter&aacute; a chance de desativar seu uso no navegador do seu dispositivo, mas deve ter em mente que isso pode impedir que algumas p&aacute;ginas do aplicativo tenham o desempenho esperado.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Como devo configurar pelo navegador?</span></strong></p>
                    <ul>
                        <li><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Google Chrome</span></strong></li>
                    </ul>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Clique no &iacute;cone do menu do Google Chrome.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Selecione "Configura&ccedil;&otilde;es".</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Na parte inferior da p&aacute;gina, selecione "Mostrar configura&ccedil;&otilde;es avan&ccedil;adas".</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Na se&ccedil;&atilde;o "Privacidade", selecione "Configura&ccedil;&otilde;es de conte&uacute;do".</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Para ativar os cookies, selecione "Permitir a configura&ccedil;&atilde;o de dados locais" (recomendado).</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Para desativar cookies, selecione "Bloquear configura&ccedil;&atilde;o de quaisquer dados por sites".</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <ul>
                        <li><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Internet Explorer</span></strong></li>
                    </ul>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Abra o Internet Explorer clicando no menu Iniciar e escolhendo o Internet Explorer.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Clique no bot&atilde;o "Ferramentas" e, em seguida, selecione a op&ccedil;&atilde;o "Op&ccedil;&otilde;es da Internet".</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Clique na aba &ldquo;Privacidade&rdquo; e em "Defini&ccedil;&otilde;es", mova o controle deslizante para o topo para bloquear todos os cookies ou no fundo para permitir todos os cookies.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Clique em &ldquo;OK&rdquo;.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <ul>
                        <li><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Firefox</span></strong></li>
                    </ul>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Selecione "Ferramentas"&gt; "Op&ccedil;&otilde;es" e acesse o painel Privacidade.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">No menu "Salvar at&eacute;", selecione a op&ccedil;&atilde;o "Fechar Firefox".</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Se voc&ecirc; deseja permitir que os sites em que voc&ecirc; confia armazenem cookies de forma permanente, selecione "Exce&ccedil;&otilde;es",</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">introduza o URL do site e selecione "Permitir".</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <ul>
                        <li><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Safari</span></strong></li>
                    </ul>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Clique em "Editar".</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Escolha "Prefer&ecirc;ncias";</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">No painel superior, selecione o &iacute;cone "Seguran&ccedil;a";</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Na se&ccedil;&atilde;o "Aceitar cookies", selecione "Nunca".</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <ul>
                        <li><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">&Oacute;pera</span></strong></li>
                    </ul>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Clique em "Configura&ccedil;&otilde;es";</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">Escolha &ldquo;Prefer&ecirc;ncias&rdquo;&gt; &ldquo;Avan&ccedil;adas&rdquo;&gt; &ldquo;Cookies&rdquo;&gt; &ldquo;Ativar&rdquo; ou &ldquo;desativar cookies&rdquo;.</span></p>

                    </p>
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
<script src="../js/bootstrap.bundle.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>

</body>
</html>