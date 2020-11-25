<?php session_start();
if(!isset($_SESSION['matricula'])){
    header('Location: ../index.php');
}

$matricula = $_SESSION['matricula'];

define('__ROOT__', dirname(dirname(__FILE__)));
require_once (__ROOT__.'/class/controller/questoesController.php');
require_once (__ROOT__.'/class/controller/lojaController.php');

$quest = new QuestoesController();
$loja = new LojaController();

$i = $_POST['key'];
$id = $_POST['id'.$i];

$array = $loja->buscaProdutosPorID($id);
$i = 0;
$planeta = 1;
foreach ($array as $key => $value) {

    //$id = $value->id;
    $nome = $value->nome;
    $valor = $value->valor;
    $descricao = $value->descricao;
    $quantidade = $value->quantidade;
    $parceiro_id = $value->parceiro_id;


    //

    /*$nome = $_POST['nome'.$i];
    $valor = $_POST['valor'.$i];
    $quantidade = $_POST['quantidade'.$i];*/


    $loja->compra($id, $quest->userQuest($matricula), $quest->consultaPonto($quest->userQuest($matricula)), $valor, $quantidade, $parceiro_id);

    header('Location: ../view/confirmacaoCompra.php?id=' . $id);
    exit();
}