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

//func 1

function atualizarEndereco($novoEndereco) {
    $this->endereco = $novoEndereco;
    echo "Endereço de {$this->nome} atualizado para: {$this->endereco}<br>";
}

//func 2

function atualizarTelefone($novoTelefone) {
    $this->telefone = $novoTelefone;
    echo "Telefone de {$this->nome} atualizado para: {$this->telefone}";
}

//func 3

function mudarCidade($novaCidade) {
    $this->cidade = $novaCidade;
    echo "Cidade de {$this->nome} alterada para: {$this->cidade}<br>";
}

//func 4

function fazerAniversario() {
    $this->idade += 1;
    echo "{$this->nome} fez aniversário e agora tem {$this->idade} anos.<br>";
}

//func 5

function exibirDados() {
    echo "=============================<br>";
    echo "Nome: {$this->nome}<br>";
    echo "Idade: {$this->idade}<br>";
    echo "Endereço: {$this->endereco}<br>";
    echo "Cidade: {$this->cidade}<br>";
    echo "Telefone: {$this->telefone}<br>";
    echo "=============================<br>";
}