<?php
/**
 * Created by PhpStorm.
 * User: rodrigo.antunes
 * Date: 09/07/2019
 * Time: 16:51
 */

header('Content-Type: text/html; charset=utf-8');
define(__ROOT__, dirname(dirname(__FILE__)));
require_once (__ROOT__.'/class/model/questoesModel.php');

class QuestoesController extends QuestoesModel {

    protected  $table = 'questoes';

    public function buscaQuest($planetas_id){
        $sql = "SELECT * FROM $this->table WHERE planetas_id = :planetas_id";
        $stm = DB::prepare($sql);
        $stm->execute(['planetas_id' => $planetas_id]);
        return $stm->fetchAll();
    }

    public function insertUsersQuest($users_id, $questoes_id, $planetas_id){
        $sql = "INSERT INTO users_questoes (users_id, questoes_id, planetas_id) VALUES (:users_id, :questoes_id, :planetas_id)";
        $stm = DB::prepare($sql);
        return $stm->execute(['users_id' => $users_id, 'questoes_id' => $questoes_id, 'planetas_id' => $planetas_id]);
    }

    public function verificaInsert($users_id, $questoes_id){
        $sql = "SELECT * FROM users_questoes WHERE users_id = :users_id and questoes_id = :questoes_id";
        $stm = DB::prepare($sql);
        $stm->execute(['users_id' => $users_id, 'questoes_id' => $questoes_id]);
        $result = $stm->fetch();

        return $result;
    }

    public function confirmaAcerto($user, $quest, $pontuacao){
        $verifica = $this->txtDesabilitado($user, $quest);
        $correto = '<img src="../pix/correto.png" class="img-fluid correct"><p class="letter-cap">Correto!</p>'. '+' .$pontuacao;
        if($verifica == 1){
            return $correto;
        }
    }

    public function confirmaAcertoMini($user, $quest){
        $verifica = $this->txtDesabilitado($user, $quest);
        $correto = '<img src="../pix/correto.png" class="img-fluid correct">';
        if($verifica == 1){
            return $correto;
        }
    }

    public function confirmaErro($user, $quest){
        $verifica = $this->txtDesabilitado($user, $quest);
        $correto = '<img src="../pix/errado.png" class="img-fluid correct"><p class="letter-cap">Errado. Tente Novamente!</p>';
        if($verifica == 0){
            return $correto;
        }
    }

    public function confirmaErroMini($user, $quest){
        $verifica = $this->txtDesabilitado($user, $quest);
        $correto = '<img src="../pix/errado.png" class="img-fluid correct">';
        if($verifica == 0){
            return $correto;
        }
    }

    public function userQuest($matr) {
        $sql = "SELECT * FROM users where matricula = :matricula";
        $stm = DB::prepare($sql);
        $stm->execute(['matricula' => $matr]);
        $result = $stm->fetch();

        //$id = 0;
        //$matricula = null;
        $id = $result->id;
        $matricula = $result->matricula;

        if($matr == $matricula){
            return $id;
        }
    }

    public  function disabled(){
        $disabled = 'disabled';
        return $disabled;
    }

    public  function txtDesabilitado($user, $quest){
        $verifica = $this->verificaInsert($user, $quest);

        if ($verifica != null){
            return 1;
        } else {
            return 0;
        }
    }

    public function validaResp($post, $resposta, $matr, $quest, $planeta, $valor){
        $user = $this->userQuest($matr);
        $verifica = $this->verificaInsert($user, $quest);
        //$respostaUser = $_POST['resposta'];
        if ($post == $resposta && $verifica == null){
            $this->insertUsersQuest($user, $quest, $planeta);
            $this->atribuiPonto($valor, $user);
            echo '<meta http-equiv="refresh" content="0.1">';
            $this->confirmaAcertoMini($user, $quest);
            return $this->confirmaAcerto($user, $quest);
        } else if ($post != $resposta || $post != null && $verifica != null){
            $this->confirmaErroMini($user, $quest);
            return $this->confirmaErro($user, $quest);
        }
    }

    public function consultaPonto($users_id){
        //$users_id = $this->userQuest($matr);
        $sql = "SELECT * FROM pontos WHERE users_id = :users_id";
        $stm = DB::prepare($sql);
        $stm->execute(['users_id' => $users_id]);
        $result = $stm->fetch();

        $total = 0;
        $total = $result->total;
        if ($total == null){
            return 0;
        } else if ($total != null){
            return $total;
        }
        //return $total;

    }

    /*
    public function consultaCoin($users_id){
        //$users_id = $this->userQuest($matr);
        $sql = "SELECT * FROM pontos WHERE users_id = :users_id";
        $stm = DB::prepare($sql);
        $stm->execute(['users_id' => $users_id]);
        $result = $stm->fetch();

        $UCBCoins = 0;
        $UCBCoins = $result->UCBCoins;
        if ($UCBCoins == null){
            return 0;
        } else if ($UCBCoins != null){
            return $UCBCoins;
        }
        //return $total;
    }

    public function atualizaCoin($UCBCoins,$users_id){
        $sql = "UPDATE pontos SET UCBCoins = :UCBCoins, timeupdate = now() WHERE users_id = :users_id";
        $stm = DB::prepare($sql);

        $result = $stm->execute(['UCBCoins' => $UCBCoins, 'users_id' => $users_id]);

        return $result;
    }

    public function insereCoin($valor, $users_id){
        $sql = "INSERT INTO pontos (UCBCoins, timeupdate, users_id) VALUES (:UCBCoins, now(), :users_id)";
        $stm = DB::prepare($sql);
        $result = $stm->execute(['UCBCoins' => $valor, 'users_id' => $users_id]);

        return $result;
    }

    public function atribuiCoin($valor, $users_id){
        $consultar = $this->consultaCoin($users_id);
        //$inserir = $this->inserePonto($valor, $users_id);
        //$atualizar = $this->atualizaPonto($consultar, $users_id);

        if($consultar == null){
            return $this->inserePonto($valor, $users_id);
        } else if ($consultar != null){
            $consultar = $consultar + $valor;
            return $this->atualizaPonto($consultar, $users_id);
        }
    }
   */

    public function consultaCoin($users_id){
        //$users_id = $this->userQuest($matr);
        $sql = "SELECT * FROM pontos WHERE users_id = :users_id";
        $stm = DB::prepare($sql);
        $stm->execute(['users_id' => $users_id]);
        $result = $stm->fetch();

        $UCBCoins = 0;
        $UCBCoins = $result->UCBCoins;
        if ($UCBCoins == null){
            return 0;
        } else if ($UCBCoins != null){
            return $UCBCoins;
        }
        //return $total;
    }

    public function inserePonto($valor, $users_id){
        $sql = "INSERT INTO pontos (total,ucbcoins timeupdate, users_id) VALUES (:total, now(), :users_id)";
        $stm = DB::prepare($sql);
        $result = $stm->execute(['total' => $valor, 'users_id' => $users_id]);

        return $result;
    }

    public function atualizaPonto($total,$users_id){
        $sql = "UPDATE pontos SET total = :total,ucbcoins=:total, timeupdate = now() WHERE users_id = :users_id";
        $stm = DB::prepare($sql);
        $result = $stm->execute(['total' => $total, 'users_id' => $users_id]);

        return $result;
    }

    public function atribuiPonto($valor, $users_id){
        $consultar = $this->consultaPonto($users_id);
        //$inserir = $this->inserePonto($valor, $users_id);
        //$atualizar = $this->atualizaPonto($consultar, $users_id);

        if($consultar == null){
            return $this->inserePonto($valor, $users_id);
        } else if ($consultar != null){
            $consultar = $consultar + $valor;
            return $this->atualizaPonto($consultar, $users_id);
        }
    }

    public function contQuestoes($idPlaneta){
        $sql = "SELECT (SELECT COUNT(id) FROM questoes WHERE planetas_id = :planetas_id) as contador";
        $stm = DB::prepare($sql);
        $stm->execute(['planetas_id' => $idPlaneta]);
        $result = $stm->fetch();

        return $result;
    }

    public function contQuestoesResp($idPlaneta, $users_id){
        $sql = "SELECT (SELECT COUNT(questoes_id) FROM users_questoes WHERE planetas_id = :planetas_id and users_id = :users_id) as contador";
        $stm = DB::prepare($sql);
        $stm->execute(['planetas_id' => $idPlaneta, 'users_id' => $users_id]);
        $result = $stm->fetch();

        return $result;
    }

    public function insertTicket($users_id, $numero, $planetas_id){
        $sql = "INSERT INTO ticket (numero, users_id, planetas_id) VALUES (:numero, :users_id, :planetas_id)";
        $stm = DB::prepare($sql);
        return $stm->execute(['numero' => $numero, 'users_id'=> $users_id, 'planetas_id' => $planetas_id]);
    }

    public function verificaTicketPlaneta($planetas_id, $users_id){
        $sql = "SELECT * FROM ticket WHERE planetas_id = :planetas_id and users_id = :users_id";
        $stm = DB::prepare($sql);
        $stm->execute(['planetas_id' => $planetas_id, 'users_id' => $users_id]);
        $result = $stm->fetch();

        return $result;
    }

    public function buscaTicket($planetas_id, $users_id){
        $sql = "SELECT numero FROM ticket WHERE planetas_id = :planetas_id and users_id = :users_id";
        $stm = DB::prepare($sql);
        $stm->execute(['planetas_id' => $planetas_id, 'users_id' => $users_id]);
        $result = $stm->fetch();
        $numero = $result->numero;

        return $numero;
    }

    public function contagemQuest($idPlaneta, $idUsers){
        $verifica = $this->verificaTicketPlaneta($idPlaneta, $idUsers);
        $qtdQuest = $this->contQuestoes($idPlaneta);
        $qtdQuestResp = $this->contQuestoesResp($idPlaneta, $idUsers);

        if ($qtdQuest == $qtdQuestResp){
            $restultado_bytes = rand(1000, 9000);
            $var = '<br>
                    <p style="color: #000000;" class="letter-cap">Parabéns!!! Você desvendou todos os desafios por aqui e acaba de ganhar um cupom para o sorteio no dia 9/8. Você pode conferir seus cupons na opção extras Tickets Sorteio. <br> Seu novo cupom é:'.$this->buscaTicket($idPlaneta, $idUsers).'</p>
                    <br><a href="../view/mapa.php"><button class="flash button">Voltar ao Mapa!</button></a>';
            echo $var;
            if($verifica == null){
            $this->insertTicket($idUsers, $restultado_bytes, $idPlaneta);
            }
            return true;
        }
    }

    public function liberaPlaneta($idPlaneta, $idUsers){
        $qtdQuest = $this->contQuestoes($idPlaneta);
        $qtdQuestResp = $this->contQuestoesResp($idPlaneta, $idUsers);

        if ($qtdQuest == $qtdQuestResp){
            return true;
        }
    }

    public function nomePlaneta($idPlaneta){
        $sql = "SELECT nome FROM planetas WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->execute(['id' => $idPlaneta]);
        $result = $stm->fetch();

        $nome = $result->nome;

        return $nome;
    }

    public function ranking(){
        $sql = "SELECT u.nome, p.UCBCoins FROM users u INNER JOIN pontos p ON u.id = p.users_id ORDER BY p.UCBCoins DESC";
        $stm = DB::prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll();

        return $result;
    }

    public function listaTicket($users_id){
        $sql = "SELECT * FROM ticket WHERE users_id = :users_id";
        $stm = DB::prepare($sql);
        $stm->execute(['users_id' => $users_id]);
        $result = $stm->fetchAll();

        return $result;
    }

}