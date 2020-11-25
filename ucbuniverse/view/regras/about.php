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
                <p style="margin-bottom: .0001pt; text-align: center; line-height: 150%; background: white;"><strong><span style="font-size: 16.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">UCB UNIVERSE</span></strong></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></strong></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">O UCB Universe &eacute; um game desenvolvido pela Universidade Cat&oacute;lica de Bras&iacute;lia (UCB), para que os estudantes calouros ingressantes do segundo semestre de 2019, da modalidade presencial dos cursos de gradua&ccedil;&atilde;o, conhe&ccedil;am o C&acirc;mpus Taguatinga, &nbsp;os servi&ccedil;os e projetos desenvolvidos na Universidade.</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">O game poder&aacute; ser acessado pelos estudantes calouros entre as 8h do dia 6 e 23h59 do dia 8 de agosto de 2019, pelo link </span><u><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: #0070c0;">ucbuniverse.com.br</span></u><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">. Para realizar o login no game, o estudante precisar&aacute; digitar seu n&uacute;mero de matr&iacute;cula na &aacute;rea de usu&aacute;rio e seu CPF no campo correspondente a senha. Lembrando que o game n&atilde;o poder&aacute; ser acessado pelos colaboradores da Universidade Cat&oacute;lica de Bras&iacute;lia (UCB).</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><u><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;"><span style="text-decoration: none;">&nbsp;</span></span></u></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">Ao participar do UCB Universe, o estudante poder&aacute; usar as pontua&ccedil;&otilde;es obtidas nos desafios para comprar os itens dispon&iacute;veis na Loja do game (Vouchers de Food Trucks diversos, Vouchers de Espet&aacute;culos do Teatro Cat&oacute;lica e muito mais). A participa&ccedil;&atilde;o e conclus&atilde;o dos desafios presentes no game tamb&eacute;m garantir&atilde;o c&oacute;digos aos participantes, que ser&atilde;o usados no sorteio de 1 Gear Fit2 Pro da Samsung (SM-R365).</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">O sorteio final acontecer&aacute; no &uacute;ltimo dia da Semana de Acolhida, 9 de agosto, &agrave;s 15h, com transmiss&atilde;o ao vivo pelo Youtube (o link da live ser&aacute; disponibilizado minutos antes do sorteio em todas as redes sociais da UCB). Boa sorte!</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">O GAME</span></strong></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">O game UCB Universe foi desenvolvido com o objetivo de auxiliar os estudantes calouros a conhecerem o C&acirc;mpus Taguatinga, &nbsp;os servi&ccedil;os e projetos desenvolvidos na Universidade.</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">Interativo e intuitivo, o UCB Universe prop&otilde;e uma forma diferente de conhecer a Universidade. Toda a interface do game foi projetada considerando o C&acirc;mpus como um Sistema Solar, onde os blocos s&atilde;o representados por planetas e estrelas. A din&acirc;mica do game inicia com as dicas e charadas presentes no Sol (Bloco Central), que precisar&atilde;o ser desvendadas para liberar os espa&ccedil;os bloqueados. </span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">Ap&oacute;s desvendar a dica ou charada, o participante precisar&aacute; ir ao local correspondente e digitar o c&oacute;digo correto, presente no cartaz afixado no ambiente. Ao digitar o c&oacute;digo que corresponde &agrave; dica ou charada desvendada, o participante ganhar&aacute; pontos que poder&atilde;o ser usados na loja do pr&oacute;prio game.</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">No game, al&eacute;m das dicas e charadas, os estudantes poder&atilde;o conquistar mais pontos por meio dos desafios extras, como: assistir a v&iacute;deos, seguir os perfis da Institui&ccedil;&atilde;o nas redes sociais, fazer o download e acessar o App do EduConnect.</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">Para acessar o game,&nbsp;</span></strong><strong><u><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: #0070c0;"><span style="color: #0070c0;">clique aqui</span></span></u></strong><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">!</span></strong></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">LOJA VIRTUAL E RETIRADA DOS PRODUTOS</span></strong></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">Compra</span></strong></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">A loja ficar&aacute; dispon&iacute;vel no pr&oacute;prio game, e o estudante poder&aacute; acess&aacute;-la a qualquer momento (durante o jogo). Para resgatar qualquer item da loja, o participante precisar&aacute; ter a pontua&ccedil;&atilde;o necess&aacute;ria para a &ldquo;compra&rdquo; do item desejado. O estudante poder&aacute; acessar a loja para fazer suas &ldquo;compras&rdquo; enquanto durarem os estoques.</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">Retirada</span></strong></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">A retirada dos itens na loja funcionar&aacute; da seguinte forma:</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">Ap&oacute;s a compra do item desejado, o estudante dever&aacute; comparecer na Administra&ccedil;&atilde;o do C&acirc;mpus Taguatinga, localizada no Bloco M, Sala M004, no balc&atilde;o de atendimento, no per&iacute;odo de 6 a 8 de agosto de 2019, das 9h &agrave;s 12h e das 14h &agrave;s 20h, para a retirada do voucher e orienta&ccedil;&atilde;o quanto ao acesso ao item comprado.</span><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;"> Ser&aacute;́ obrigat&oacute;ria a apresenta&ccedil;&atilde;o do c&oacute;digo que ser&aacute; gerado no momento da compra. Lembrando que a retirada do item deve ser realizada no mesmo dia da compra.</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">SORTEIO FINAL</span></strong></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">O sorteio final ser&aacute; realizado no dia 9 de agosto, &agrave;s 15h, com transmiss&atilde;o ao vivo pelo Youtube (o link da live ser&aacute; disponibilizado minutos antes do sorteio em todas as redes sociais da UCB). Ap&oacute;s a transmiss&atilde;o, os ganhadores ser&atilde;o divulgados em todas as redes sociais da UCB. Os ganhadores tamb&eacute;m receber&atilde;o nosso contato informando o dia, local e hor&aacute;rio para a entrega do pr&ecirc;mio.</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">PR&Ecirc;MIO</span></strong></p>
                <ul>
                    <li><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">1 Gear Fit2 Pro da Samsung (SM-R365)</span></strong>
                        <ul>
                            <li><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">Descri&ccedil;&atilde;o</span></strong></li>
                        </ul>
                    </li>
                </ul>
                <p style="text-align: justify; line-height: 150%; background: white; margin: 0cm 0cm .0001pt 70.9pt;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">O Gear Fit2 Pro tem o foco no suporte ao monitoramento e registro de seus exerc&iacute;cios, detecta automaticamente e registra a atividade f&iacute;sica, ele tamb&eacute;m mede continuamente sua frequ&ecirc;ncia card&iacute;aca ao longo do dia indicando zonas de taxa card&iacute;aca. O design do Gear Fit2 Pro conta com uma tela Super AMOLED de 1.5 polegadas curva, formato que se encaixa confortavelmente no pulso.</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                <ul>
                    <li><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">Caracter&iacute;sticas Gerais:</span></strong></li>
                </ul>
                <p style="text-align: justify; line-height: 150%; background: white; margin: 0cm 0cm .0001pt 70.9pt;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">- Sistema operacional: Tizen.</span></p>
                <p style="text-align: justify; line-height: 150%; background: white; margin: 0cm 0cm .0001pt 70.9pt;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">- Tela Super Amoled curva de 1,5".</span></p>
                <p style="text-align: justify; line-height: 150%; background: white; margin: 0cm 0cm .0001pt 70.9pt;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">- Resist&ecirc;ncia &agrave; &aacute;gua 5 ATM &ndash; at&eacute; 50 metros*.</span></p>
                <p style="text-align: justify; line-height: 150%; background: white; margin: 0cm 0cm .0001pt 70.9pt;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">- Sensor de frequ&ecirc;ncia card&iacute;aca.</span></p>
                <p style="text-align: justify; line-height: 150%; background: white; margin: 0cm 0cm .0001pt 70.9pt;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">- Sim Card: N&atilde;o.</span></p>
                <p style="text-align: justify; line-height: 150%; background: white; margin: 0cm 0cm .0001pt 70.9pt;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">- Bluetooth: Sim.</span></p>
                <p style="text-align: justify; line-height: 150%; background: white; margin: 0cm 0cm .0001pt 70.9pt;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">- Tamanho da tela: 1,5".</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                <ul>
                    <li><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">Especifica&ccedil;&otilde;es T&eacute;cnicas:</span></strong></li>
                </ul>
                <p style="text-align: justify; line-height: 150%; background: white; margin: 0cm 0cm .0001pt 70.9pt;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">- Mem&oacute;ria interna: 4 GB.</span></p>
                <p style="text-align: justify; line-height: 150%; background: white; margin: 0cm 0cm .0001pt 70.9pt;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">- Mem&oacute;ria de RAM: 0,5 GB.</span></p>
                <p style="text-align: justify; line-height: 150%; background: white; margin: 0cm 0cm .0001pt 70.9pt;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">- Bateria: 200mAh.</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                <ul>
                    <li><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">Compatibilidade: </span></strong></li>
                </ul>
                <p style="text-align: justify; line-height: 150%; background: white; margin: 0cm 0cm .0001pt 70.9pt;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">- Telefones com sistema operacional Android 4.4 ou superior com pelo menos 1,5 GB de espa&ccedil;o livre.</span></p>
                <p style="text-align: justify; line-height: 150%; background: white; margin: 0cm 0cm .0001pt 70.9pt;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">- Telefones iOS que executam o iOS 9.0 ou superior (iPhone 5 ou modelos mais recentes).</span></p>
                <p style="text-align: justify; line-height: 150%; background: white; margin: 0cm 0cm .0001pt 70.9pt;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">- Conectividade: A-GPS, Wi-Fi, Bluetooth.</span></p>
                <p style="text-align: justify; line-height: 150%; background: white; margin: 0cm 0cm .0001pt 70.9pt;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">- Garantia: 6 Meses.</span></p>
                <p style="text-align: justify; line-height: 150%; background: white; margin: 0cm 0cm .0001pt 70.9pt;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">- Conte&uacute;do da Embalagem: - Smartwatch Samsung Gear Fit2 Pro (SM-R365) e Base carregadora.</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif;">&nbsp;</span></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><strong><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">SUPORTE</span></strong></p>
                <p style="margin-bottom: .0001pt; text-align: justify; line-height: 150%; background: white;"><span style="font-size: 12.0pt; line-height: 150%; font-family: 'Calibri Light',sans-serif; color: black;">O suporte ao game ser&aacute; realizado somente via e-mail. N&atilde;o havendo&nbsp; suporte ao game em nenhum dos nossos perfis nas redes sociais.</span></p>
                <p style="text-align: justify;"><strong><span style="font-size: 12.0pt; line-height: 107%; font-family: 'Calibri Light',sans-serif;">E-mail de suporte: </span></strong></p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
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