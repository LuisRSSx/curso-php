<?php
require_once('pessoa.php');

class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login) {
        // $this->nome = $nome;
        // $this->idade = $idade;
        parent::__construct($nome, $idade);
        $this->login = $login;
    }

    function apresentar() {
        $login = "@{$this->login}: ";
        return $login . parent::apresentar();
    }
}