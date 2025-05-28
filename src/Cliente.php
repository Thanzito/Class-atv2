<?php

class Cliente
{
    public $nome;
    public $idade;
    public $endereco;
    public $cidade;
    public $telefone;   
}
function__construct($nome, $idade, $endereco, $cidade, $telefone){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->endereco = $endereco;
    $this->cidade = $cidade;
    $this->telefone = $telefone;
}
function mostrarNome() {
    return "A idade é: ".$this->nome;
}
function mostrarNome() {
    return "A idade é: ".$this->idade;
}