<?php

require_once '../model/desafioModel.php';

class DesafioController extends DesafioModel
{

    protected $table = 'desafio';

    public function findAll(){
        $sql = "SELECT * FROM $this->table";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }


    public function insertDesafio(){
        $sql = "INSERT INTO $this->table (nome, descricao) VALUES (:name,:descricao)";
        $stmt= DB::prepare($sql);
        return $stmt->execute($this->nome, $this->descricao);

        if($stmt){

        }
    }
}