<?php

session_start();
if(!isset($_SESSION['login'])){
    header('Location: ../admin/acesso.php');
}

$log = $_SESSION['login'];
define('__ROOT__', dirname(dirname(__DIR__)));
require_once (__ROOT__.'/class/controller/questoesController.php');
require_once (__ROOT__.'/class/controller/lojaController.php');

$quest = new QuestoesController();
$loja = new LojaController();

$i = $_POST['key'];
$id = $_POST['id'.$i];

$array = $loja->buscaComprasPorID($id);
$i = 0;
$planeta = 1;
foreach ($array as $key => $value) {

    //$id = $value->id;
    $users_id = $value->users_id;
    $produtos_id = $value->produtos_id;
    $parceiro_id = $value->parceiro_id;
    $codigo = $value->codigo;
    $hrCompra = $value->hrcompra;
    $entrega = $value->entrega;


    //

    /*$nome = $_POST['nome'.$i];
    $valor = $_POST['valor'.$i];
    $quantidade = $_POST['quantidade'.$i];*/


    $loja->atualizaEntrega($id);

    header('Location: ../admin/compras.php?id='.$id);
    exit();
}