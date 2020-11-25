<?php session_start();
if(isset($_SESSION['matricula'])){
    header('Location: start.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $matricula = strtoupper($_POST['matricula']);
    $senha = $_POST['senha'];
    require('db.php');
    $conexao = new DB();
    $consulta = $conexao->prepare('SELECT * FROM users WHERE matricula = :matricula and senha = :senha');
    $consulta->execute(array(':matricula'=>$matricula, ':senha'=>$senha));

    $resultado = $consulta->fetch();
    if($resultado!=false){
        $_SESSION['matricula']=$matricula;
        header('Location: ../view/start.php');
    } else {
        header('Location: ../index.php');
    }
}
