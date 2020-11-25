<?php

require_once (__ROOT__.'/class/model/lojaModel.php');

class LojaController extends LojaModel {

    public function buscaProdutos()
    {
        $sql = "SELECT * FROM produtos order by retirada asc";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }

    public function buscaProdutosPorID($idProd)
    {
        $sql = "SELECT * FROM produtos WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->execute(['id' => $idProd]);
        return $stm->fetchAll();
    }

    public function atualizaPonto($total, $users_id){
        $sql = "UPDATE pontos SET total = :total, timeupdate = now() WHERE users_id = :users_id";
        $stm = DB::prepare($sql);
        $result = $stm->execute(['total' => $total, 'users_id' => $users_id]);
        return $result;
    }

    public function atualizaQtd($qtd, $id){
        $sql = "UPDATE produtos SET quantidade = :quantidade WHERE id = :id";
        $stm = DB::prepare($sql);
        $result = $stm->execute(['quantidade' => $qtd, 'id' => $id]);
        return $result;
    }

    public function insertCompra($users_id, $produtos_id, $parceiro_id, $codigo){
        $sql = "INSERT INTO compras (users_id, produtos_id, parceiro_id, codigo, hrcompra, entrega) VALUES (:users_id, :produtos_id, :parceiro_id, :codigo, now(), 0)";
        $stm = DB::prepare($sql);
        return $stm->execute(['users_id' => $users_id, 'produtos_id' => $produtos_id, 'parceiro_id' => $parceiro_id, 'codigo' => $codigo]);
    }

    public function compra($produto_id, $users_id, $saldo, $valor, $qtd, $parceiro_id){
        $saldo = $saldo - $valor;
        $this->atualizaPonto($saldo, $users_id);
        $qtd = $qtd - 1;
        $this->atualizaQtd($qtd, $produto_id);
        $numero_de_bytes = 6;
        $restultado_bytes = random_bytes($numero_de_bytes);
        $resultado_final = bin2hex($restultado_bytes);
        //echo '<meta http-equiv="refresh" content="0.1">';
        return $this->insertCompra($users_id, $produto_id, $parceiro_id, $resultado_final);
    }

    public function buscaCod($users_id, $produtos_id){
        $sql = "SELECT * FROM compras WHERE users_id = :users_id and produtos_id = :produtos_id";
        $stm = DB::prepare($sql);
        $stm->execute(['users_id' => $users_id, 'produtos_id' => $produtos_id]);
        $result = $stm->fetch();
        $codigo = 0;
        $codigo = $result->codigo;
        return $codigo;
    }

    public function histComprasAluno($users_id){
        $sql = "select p.nome, p.valor, p.retirada, c.codigo, c.hrcompra, c.users_id from produtos p 
        inner join compras c on p.id = c.produtos_id and users_id = :users_id order by c.hrcompra desc;";
        $stm = DB::prepare($sql);
        $stm->execute(['users_id' => $users_id]);
        $result = $stm->fetchAll();
        return $result;
    }

    public function histComprasParceiro($idParceiro){
        $sql = "select * from compras order by entrega = 1, hrcompra desc";
        $stm = DB::prepare($sql);
        $stm->execute(['parceiro_id' => $idParceiro]);
        $result = $stm->fetchAll();
        return $result;
    }

    public function idParceiro($login) {
        $sql = "SELECT * FROM parceiros where login = :login";
        $stm = DB::prepare($sql);
        $stm->execute(['login' => $login]);
        $result = $stm->fetch();
        //$id = 0;
        //$matricula = null;
        $id = $result->id;
        $log = $result->login;
        if($login == $log){
            return $id;
        }
    }

    public function buscaComprasPorID($idCompra){
        $sql = "SELECT * FROM compras WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->execute(['id' => $idCompra]);
        return $stm->fetchAll();
    }

    public function buscaParceiro($id) {
        $sql = "SELECT * FROM parceiros where id = :id";
        $stm = DB::prepare($sql);
        $stm->execute(['id' => $id]);
        $result = $stm->fetch();
        //$id = 0;
        //$matricula = null;
        $id = $result->id;
        return $id;
    }

    public function matriculaAluno($users_id){
        $sql = "SELECT matricula FROM users WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->execute(['id' => $users_id]);
        $result = $stm->fetch();
        $matricula = $result->matricula;
        return $matricula;
    }

    public function nomeAluno($users_id){
        $sql = "SELECT nome FROM users WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->execute(['id' => $users_id]);
        $result = $stm->fetch();
        $nome = $result->nome;
        return $nome;
    }

    public function nomeProd($produtos_id){
        $sql = "SELECT nome FROM produtos WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->execute(['id' => $produtos_id]);
        $result = $stm->fetch();
        $nome = $result->nome;
        return $nome;
    }

    public function dataProd($produtos_id){
        $sql = "SELECT retirada FROM produtos WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->execute(['id' => $produtos_id]);
        $result = $stm->fetch();
        $data = $result->retirada;
        return $data;
    }

    public function descProd($produtos_id){
        $sql = "SELECT descricao FROM produtos WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->execute(['id' => $produtos_id]);
        $result = $stm->fetch();
        $descricao = $result->descricao;
        return $descricao;
    }

    public function atualizaEntrega($id){
        $sql = "UPDATE compras SET entrega = 1 WHERE id = :id";
        $stm = DB::prepare($sql);
        $result = $stm->execute(['id' => $id]);
        return $result;
    }

}