<?php

require_once 'src/cliente.php';

$cliente1 = new Cliente("Nathan Cavalcante", 17, "Rua A, 123", "Paraná", "41 98813590");

$cliente1->exibirDados();

$cliente1->atualizarEndereco("Av. Paulista, 1000");
$cliente1->atualizarTelefone("41 99998888");
$cliente1->mudarCidade("São Paulo");

$cliente1->fazerAniversario();

$cliente1->exibirDados();