<?php
/**
 * Created by PhpStorm.
 * User: rodrigo.antunes
 * Date: 09/07/2019
 * Time: 16:49
 */

header('Content-Type: text/html; charset=utf-8');

require_once (__ROOT__.'/class/db.php');


class QuestoesModel extends DB {

    protected $table;
    public $titulo;
    public $enunciado;
    public $resposta;
    public $capitulo;
    public $pontuacao;

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }



    /**
     * @return mixed
     */
    public function getEnunciado()
    {
        return $this->enunciado;
    }

    /**
     * @param mixed $enunciado
     */
    public function setEnunciado($enunciado)
    {
        $this->enunciado = $enunciado;
    }

    /**
     * @return mixed
     */
    public function getResposta()
    {
        return $this->resposta;
    }

    /**
     * @param mixed $resposta
     */
    public function setResposta($resposta)
    {
        $this->resposta = $resposta;
    }

    /**
     * @return mixed
     */
    public function getCapitulo()
    {
        return $this->capitulo;
    }

    /**
     * @param mixed $capitulo
     */
    public function setCapitulo($capitulo)
    {
        $this->capitulo = $capitulo;
    }

    /**
     * @return mixed
     */
    public function getPontuacao()
    {
        return $this->pontuacao;
    }

    /**
     * @param mixed $pontuacao
     */
    public function setPontuacao($pontuacao)
    {
        $this->pontuacao = $pontuacao;
    }


}