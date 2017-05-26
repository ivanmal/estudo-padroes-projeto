<?php
require '../../autoload.php';

use padroesphp\criacao\singleton\JogadorDeXadrez as Jogador;

$jogador1 = Jogador::getJogador1();
$jogador2 = Jogador::getJogador2();
$jogador3 = Jogador::getJogador1();

echo $jogador1->getId();
echo $jogador2->getId();
echo $jogador3->getId();


print_r($jogador1);
print_r($jogador2);
print_r($jogador3);


