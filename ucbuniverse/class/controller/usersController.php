<?php

require_once '../model/usersModel.php';

class UsersController extends UsersModel {

    protected $table = 'users';

    public function getDados($matricula){

        $sql = "SELECT * FROM $this->table where matricula = :matricula";
        $stm = DB::prepare($sql);
        $stm->bindValue(':matricula', $matricula);
        $stm->execute();
        $result = $stm->fetch();

        foreach ($result as $value){
            $nomeAluno = $value->nome;
            $emailAluno = $value->email;
        }

        return array($nomeAluno, $emailAluno);
    }

}