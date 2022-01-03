<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$vinicius = new Titular( "Kaio Alves", new CPF("161.378.077-03"));
$primeiraConta = new Conta($vinicius);

$primeiraConta->deposita(10000);
$primeiraConta->saca(300);

$wagner = new Titular( "Wagner Alves", new CPF("122.456.789-03"));
$segundaConta = new Conta($wagner);


$segundaConta->deposita(5000);
$segundaConta->saca(300);


echo $primeiraConta->recuperaNomeTitular(). PHP_EOL;
echo $primeiraConta->recuperaCpfTitular(). PHP_EOL;
echo $primeiraConta->recuperaSaldo(). PHP_EOL . PHP_EOL;

echo $segundaConta->recuperaNomeTitular(). PHP_EOL;
echo $segundaConta->recuperaCpfTitular(). PHP_EOL;
echo $segundaConta->recuperaSaldo(). PHP_EOL;


// var_dump($primeiraConta);

