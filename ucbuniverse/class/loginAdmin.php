<?php session_start();
if(isset($_SESSION['login'])){
    header('Location: compras.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $login = strtolower($_POST['login']);
    $senha = $_POST['senha'];
    require('db.php');
    $conexao = new DB();
    $consulta = $conexao->prepare('SELECT * FROM parceiros WHERE login = :login and senha = :senha');
    $consulta->execute(array(':login'=>$login, ':senha'=>$senha));

    $resultado = $consulta->fetch();
    if($resultado!=false){
        $_SESSION['login']=$login;
        header('Location: ../view/admin/compras.php');
    } else {
        header('Location: ../view/admin/acesso.php');
    }
}
