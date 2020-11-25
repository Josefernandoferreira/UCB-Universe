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
                    <p style="margin-bottom: .0001pt; text-align: center; line-height: 150%; background: white;"><strong><span style="font-size: 16.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">POL&Iacute;TICA DE PRIVACIDADE</span></strong></p>
                    <p style="text-align: justify;"><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">O game UCB UNIVERSE pode ser acessado a partir da URL </span><a href="http://www.ucbuniverse.com.br"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">www.ucbuniverse.com.br</span></a><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">N&oacute;s podemos ser contatados pelo e-mail: </span><a href="mailto:suporte@ucbuniverse.com.br"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">suporte@ucbuniverse.com.br</span></a></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">A UCB respeita o direito &agrave; privacidade e zela pela seguran&ccedil;a dos dados pessoais de seus usu&aacute;rios. Esta Pol&iacute;tica de Privacidade tem objetivo de esclarecer como coletamos e utilizamos as informa&ccedil;&otilde;es, para que os usu&aacute;rios se sintam seguros ao navegar e utilizar o UCB UNIVERSE.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">A fim de proporcionar maior seguran&ccedil;a e transpar&ecirc;ncia, esta pol&iacute;tica poder&aacute; ser alterada periodicamente. Por isso, aconselhamos a peri&oacute;dica consulta desta Pol&iacute;tica de Privacidade, especialmente antes do fornecimento de qualquer dado pessoal.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">A utiliza&ccedil;&atilde;o deste aplicativo significa a concord&acirc;ncia com os termos da presente Pol&iacute;tica de Privacidade.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">Informa&ccedil;&otilde;es coletadas:</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">O servidor n&atilde;o coleta automaticamente nenhuma informa&ccedil;&atilde;o sobre o dom&iacute;nio ou endere&ccedil;o de e-mail dos visitantes, exceto o nome, sobrenome, c&acirc;mpus, curso, n&uacute;mero da matr&iacute;cula, endere&ccedil;o de e-mail, celular e data de nascimento dos usu&aacute;rios do UCB UNIVERSE, mediante pr&eacute;via solicita&ccedil;&atilde;o</span><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">. Al&eacute;m disso, agregamos informa&ccedil;&otilde;es sobre quais funcionalidades os usu&aacute;rios mais acessam, informa&ccedil;&otilde;es fornecidas voluntariamente pelos usu&aacute;rios, como as coletadas em pesquisas e no momento do registro no site.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">O fornecimento de informa&ccedil;&otilde;es por meio do UCB UNIVERSE resulta no consentimento com a coleta, uso e divulga&ccedil;&atilde;o de informa&ccedil;&otilde;es, de acordo com esta Pol&iacute;tica de Privacidade.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">Uso das informa&ccedil;&otilde;es coletadas:</span></strong></p>
                    <p style="text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">As informa&ccedil;&otilde;es coletadas s&atilde;o usadas com o objetivo de melhorar o conte&uacute;do da plataforma, notificar os usu&aacute;rios sobre as atualiza&ccedil;&otilde;es dispon&iacute;veis, e para ofertas, promo&ccedil;&otilde;es e campanhas de publicidade da UCB.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">Informa&ccedil;&otilde;es gerais dos usu&aacute;rios, sem identifica&ccedil;&atilde;o, tais como dados geogr&aacute;ficos, demogr&aacute;ficos e de perfil de consumo poder&atilde;o ser divulgados, com objetivos estat&iacute;sticos e finalidades comerciais, a parceiros, patrocinadores, anunciantes ou a outras organiza&ccedil;&otilde;es, sem que sejam revelados nomes ou outros dados pessoais.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">A UCB n&atilde;o disponibiliza e-mails e demais informa&ccedil;&otilde;es pessoais de usu&aacute;rios cadastrados a outras organiza&ccedil;&otilde;es e/ou parceiros, salvo quando expressamente autorizado ou em circunst&acirc;ncias previstas nesta Pol&iacute;tica.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">Os n&uacute;meros de telefone fornecidos poder&atilde;o ser contatados pela UCB UNIVERSE, com informa&ccedil;&otilde;es a respeito de novos produtos, eservi&ccedil;os ou eventos pr&oacute;ximos. Caso n&atilde;o desejar receber essas liga&ccedil;&otilde;es, por favor, entre em contato conosco.</span></p>
                    <p style="text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></strong></p>
                    <p style="text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">Links para outros sites:</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">Este aplicativo poder&aacute; conter links para outros sites externos, parceiros e/ou patrocinadores, que podem ter pol&iacute;ticas de privacidade diferentes das aqui praticadas, estando assim sujeitas &agrave;s suas pr&oacute;prias pr&aacute;ticas de obten&ccedil;&atilde;o e uso de dados. Lembre-se que informa&ccedil;&otilde;es pessoais fornecidas a outros sites, f&oacute;runs ou chats poder&atilde;o ser recolhidas e utilizadas indevidamente por terceiros.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">A UCB n&atilde;o se responsabiliza pelo conte&uacute;do de tais sites nem pelo manuseio das informa&ccedil;&otilde;es por terceiros. Por isso, recomendamos que os usu&aacute;rios sempre leiam as normas de relacionamento e pol&iacute;tica de privacidade espec&iacute;ficas dentro do pr&oacute;prio site do parceiro ou patrocinador que colete suas informa&ccedil;&otilde;es.</span></p>
                    <p style="text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">A Pol&iacute;tica de Privacidade da UCB Universe se aplica unicamente &agrave;s informa&ccedil;&otilde;es coletadas pela UCB Universe, por meio do aplicativo.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">Seguran&ccedil;a:</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">O game UCB UNIVERSE utiliza medidas de seguran&ccedil;a comercialmente razo&aacute;veis para proteger as informa&ccedil;&otilde;es contidas nos servidores e banco de dados. Contudo, sabe-se que nenhum sistema de seguran&ccedil;a &eacute; 100% infal&iacute;vel. Desse modo, ainda que a UCB sempre fa&ccedil;a o poss&iacute;vel para proteger suas informa&ccedil;&otilde;es pessoais, n&atilde;o temos como garantir a absoluta seguran&ccedil;a dos servidores. &Eacute; poss&iacute;vel que os dados fornecidos sejam interceptados por terceiros durante a transmiss&atilde;o. Portanto, &eacute; uma decis&atilde;o pessoal a utiliza&ccedil;&atilde;o do servi&ccedil;o nessas condi&ccedil;&otilde;es.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">ATEN&Ccedil;&Atilde;O:</span></strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;"> sua senha &eacute; pessoal e intransfer&iacute;vel, procure n&atilde;o divulg&aacute;-la.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="text-decoration: line-through;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">Caso esque&ccedil;a sua senha, basta criar uma nova a partir da funcionalidade esqueci minha senha, e ser&aacute; enviado para a sua conta de e-mail um c&oacute;digo para permitir a altera&ccedil;&atilde;o. Sugerimos que escolha uma senha n&atilde;o &oacute;bvia, misturando letras e n&uacute;meros. Lembre-se de manter o sigilo de suas senhas e qualquer informa&ccedil;&atilde;o da sua conta da UCB UNIVERSE.</span></span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="text-decoration: line-through;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;"><span style="text-decoration: none;">&nbsp;</span></span></span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="text-decoration: line-through;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">N&atilde;o solicitaremos, em nenhuma hip&oacute;tese, seja por e-mail ou telefone, sua senha pessoal.</span></span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">Quando concluir sua navega&ccedil;&atilde;o no game, desconecte sua conta do UCB UNIVERSE, esse procedimento evita que terceiros tenham acesso aos seus dados pessoais, em casos de compartilhamento de computador ou seu uso em local p&uacute;blico.</span></p>
                    <p style="text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">Como atualizar, corrigir ou excluir suas informa&ccedil;&otilde;es:</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">Procure manter suas informa&ccedil;&otilde;es de registro completas e atualizadas. Para atualizar os dados de registro, acesse a sua conta da UCB UNIVERSE e fa&ccedil;a a altera&ccedil;&atilde;o desejada para alterar as suas prefer&ecirc;ncias de usu&aacute;rio.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">Disposi&ccedil;&otilde;es gerais:</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">A utiliza&ccedil;&atilde;o do UCB UNIVERSE manifesta total concord&acirc;ncia com os termos desta Pol&iacute;tica de Privacidade, que poder&aacute; ser alterada periodicamente. Caso n&atilde;o concorde com esta Pol&iacute;tica, n&atilde;o utilize o website nem os servi&ccedil;os nele oferecidos.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">Caso esta Pol&iacute;tica de Privacidade seja alterada, a UCB enviar&aacute; avisos aos usu&aacute;rios, para o endere&ccedil;o de e-mail informado e/ou publicando a notifica&ccedil;&atilde;o e a pol&iacute;tica alterada no UCB UNIVERSE.</span></p>
                    <p style="text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">A continua&ccedil;&atilde;o do uso dos servi&ccedil;os e do website ap&oacute;s as altera&ccedil;&otilde;es da Pol&iacute;tica de Privacidade significa a aceita&ccedil;&atilde;o e concord&acirc;ncia com as mudan&ccedil;as realizadas. As informa&ccedil;&otilde;es coletadas ou fornecidas depois da atualiza&ccedil;&atilde;o da Pol&iacute;tica de Privacidade ser&atilde;o regidas por esta &uacute;ltima.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">Entre em contato:</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">Coment&aacute;rios s&atilde;o bem-vindos. Caso tenha d&uacute;vidas ou reclama&ccedil;&otilde;es sobre esta Pol&iacute;tica de Privacidade, entre em contato pelo e-mail </span><a href="mailto:suporte@ucbuniverse.com.br"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">suporte@ucbuniverse.com.br</span></a><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">Caso entenda que o UCB UNIVERSE n&atilde;o est&aacute; seguindo a pol&iacute;tica informada, por favor, entre em contato por meio do e-mail informado acima.</span></p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>

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