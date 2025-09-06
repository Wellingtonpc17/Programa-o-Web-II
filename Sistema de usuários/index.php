<?php

require_once 'Cliente.php';
require_once 'Administrador.php';

$C1 = new Cliente("Wellington", "wellington123@gmail.com", "wellington123", "123.456.789-00");
$C1->exibirDados();
$C1->comprar();

$Admin = new Administrador("Lucas", "lucas123@gmail.com", "lucas123", "587.674.391-00", "adminLucas");
$Admin->cadastrarProdutos();
$Admin->dadosadm();

?>