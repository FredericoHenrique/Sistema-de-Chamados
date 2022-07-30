<?php

session_start();

//  unset($_SESSION['x']); REMOVE SOMENTE A VARIAVEL DE SESSAO DE ACORDO COM O INDEX PASSADO
//  session_destroy(); REMOVE TODOS AS VARIAVEIS DE SESSÃO


session_destroy();
header('Location: index.php');


class Mensagem {

    private $para = null;
    private $assunto = null;
    private $mensagem = null;

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function mensagemValida()
    {
        //
    }
}
