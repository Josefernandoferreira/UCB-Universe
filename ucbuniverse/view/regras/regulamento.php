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
                    <p style="margin-bottom: .0001pt; text-align: center; line-height: 150%;"><strong><span style="font-size: 16.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">REGULAMENTO</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">SORTEIO</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">1 &ndash; DA PARTICIPAÇÃO</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">1.1. Esta é uma promoção com caráter integrativo entre estudantes calouros regularmente matriculados, que ser&aacute; realizada pela Universidade Cat&oacute;lica de Brasília (UCB), nos C&acirc;mpus Taguatinga.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">1.2. A promoção é aberta somente aos estudantes calouros regularmente matriculados em cursos presenciais da Cat&oacute;lica. Será obrigatória a apresentação de documento de identidade para a retirada do prêmio. Portanto, colaboradores da Universidade Cat&oacute;lica de Bras&iacute;lia (UCB), n&atilde;o poder&atilde;o participar do game, e consequentemente, do sorteio.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">1.3. Para concorrer ao pr&ecirc;mio, o interessado deverá, no per&iacute;odo de 6 a 8 de agosto, participar e concluir as etapas obrigat&oacute;rias do Game UCB Universe, atrav&eacute;s do link disponibilizado em nosso portal, hotsite da Acolhida 2019.2 e nas redes sociais da UCB.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">O sorteio ser&aacute; feito no dia 9 de agosto, &agrave;s 15h, com transmiss&atilde;o ao vivo pelo Youtube. Ap&oacute;s o sorteio, o nome do ganhador ser&aacute; divulgado em nossas redes sociais.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">2 &ndash; DA PREMIAÇÃO</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">2.1. Al&eacute;m dos itens que poder&atilde;o ser adquiridos na loja virtual, haver&aacute; dentre os participantes, o sorteio de <strong>1</strong> </span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">2.2. Todos os participantes afirmam estar de acordo e com pleno conhecimento do regulamento.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">2.3. É proibida, em qualquer hip&oacute;tese, a troca do pr&ecirc;mio, que é pessoal e intransfer&iacute;vel. Colaboradores da UCB n&atilde;o podem participar do game e consequentemente, do sorteio.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">2.4. Assim que o sorteio for realizado, o ganhador receber&aacute; nosso contato informando o dia, o local e o hor&aacute;rio para retirada do pr&ecirc;mio.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">2.5. A n&atilde;o retirada do pr&ecirc;mio na data agendada implica na autom&aacute;tica perda de direito por parte do ganhador. O prêmio, ent&atilde;o, passará a ter nova destina&ccedil;&atilde;o, com novo sorteio.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">3 &ndash; OUTROS</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">3.1. O vencedor do sorteio, automaticamente, autoriza a divulga&ccedil;&atilde;o e uso do seu nome e imagem em qualquer tipo de mídia, para a divulgação da premiação ou do projeto.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">3.2. A UCB reserva-se o direito de alterar este Regulamento quanto à participação, ao prazo ou a qualquer outro item que julgue necessário, sem prejuízo às partes e sem a necessidade de informação prévia.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">4 &ndash; CONDIÇÕES GERAIS</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">Serão automaticamente excluídos os participantes que tentarem fraudar ou burlar as regras estabelecidas neste Regulamento, o qual poderá ser alterado por motivo de força maior.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">O prêmio não poderá ser convertido em dinheiro, em sua totalidade ou em parte.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">A participação neste sorteio, que não tem por objetivo a formação de cadastro do tipo mailing list para comercializa&ccedil;&atilde;o com terceiros, implica a aceitação irrestrita deste Regulamento.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">LOJA VIRTUAL</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">1 &ndash; DA PARTICIPAÇÃO</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">1.1. A UCB disponibilizar&aacute; em suas redes sociais, portal, e hotsite da Acolhida 2019.2, um link de acesso para o Game UCB Universe, em que os estudantes, mediante um login e senha, far&atilde;o parte da plataforma integrando o jogo.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">1.2. A partir do seu login, o estudante passar&aacute; a ter acesso &agrave;s fases do Game UCB Universe, em que far&aacute; a pontua&ccedil;&atilde;o conforme seu desempenho no jogo.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">1.3. A loja consiste em oferecer itens que podem ser trocados mediante pontua&ccedil;&atilde;o recebida durante o Game UCB Universe. Essa a&ccedil;&atilde;o será realizada pela Universidade Cat&oacute;lica de Brasília (UCB) no C&acirc;mpus Taguatinga.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">1.4. Os produtos ser&atilde;o oferecidos conforme disponibilidade em estoque e com pontua&ccedil;&atilde;o informada na plataforma do Game UCB Universe.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">1.5. Ap&oacute;s a troca dos pontos pelo item de interesse, &eacute; preciso comparecer na Administra&ccedil;&atilde;o do C&acirc;mpus Taguatinga, no Bloco M, Sala M004, no balc&atilde;o de atendimento, no per&iacute;odo de 6 a 8 de agosto, das 9h &agrave;s 12h e das 14h &agrave;s 20h, ou enquanto durarem os estoques, para a retirada do voucher e orienta&ccedil;&atilde;o quanto ao acesso ao produto.</span><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;"> Ser&aacute; obrigat&oacute;ria a apresenta&ccedil;&atilde;o do c&oacute;digo recebido no momento da compra para a retirada do voucher do produto.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">2 &ndash; CONDIÇÕES GERAIS</span></strong></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">2.1. Os pontos gerados ao longo das diversas fases e a&ccedil;&otilde;es do Game UCB Universe poder&atilde;o ser trocados dentro da loja virtual disponibilizada na plataforma.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">2.2. O produto adquirido somente poder&aacute; ser trocado uma &uacute;nica vez. Em caso de pontos remanescentes, estes poder&atilde;o ser acumulados para novas trocas, desde que sejam produtos diferentes da troca anterior.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">2.3. A compra dos itens da Loja do UCB Universe, s&oacute; ser&aacute; confirmada mediante disponibilidade do item na loja e se houver o d&eacute;bito da pontua&ccedil;&atilde;o do jogador. N&atilde;o havendo d&eacute;bito da pontua&ccedil;&atilde;o do jogador, a a&ccedil;&atilde;o n&atilde;o ser&aacute; configurada como compra realizada.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">2.4. Os itens cedidos para a Loja do UCB Universe s&atilde;o de parceiros da institui&ccedil;&atilde;o. Diante disso, a Universidade Cat&oacute;lica de Bras&iacute;lia n&atilde;o se responsabiliza pela qualidade dos produtos ofertados no game, exceto o pr&ecirc;mio do sorteio final.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">2.5. Caso o estudante decida realizar a devolu&ccedil;&atilde;o de algum item comprado na Loja do UCB Universe, n&atilde;o haver&aacute; estorno da pontua&ccedil;&atilde;o debitada no momento da compra.</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                    <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">UCB &ndash; Universidade Cat&oacute;lica de Bras&iacute;lia</span></p>
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