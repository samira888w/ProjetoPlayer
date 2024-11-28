<?php

require_once 'classes/Itens/Ataque.php';
require_once 'classes/Itens/Defesa.php';
require_once 'classes/Itens/Magia.php';
require_once 'classes/Player.php';

$player1 = new Player("Joana");
$player2 = new Player("Samira");

$espada = new Ataque("Espada Longa");
$machado = new Ataque("Machado de Batalha");

$escudo = new Defesa("Escudo de Ferro");
$armadura = new Defesa("Armadura Pesada");

$varinha = new Magia("Varinha de Fogo");
$grimorio = new Magia("Grimório das Sombras");


echo "Jogador: {$player1->getNickname()} <br> Nível: {$player1->getNivel()} = Capacidade Inicial: {$player1->getInventario()->getCapacidadeMaxima()}<br><hr>";

$player1->coletarItem($espada);
$player1->coletarItem($escudo);
$player1->coletarItem($varinha);
$player1->listarInventario();

$player1->subirNivel();

$player1->coletarItem($grimorio);

$player1->listarInventario();


echo "Jogador: {$player2->getNickname()} <br> Nível: {$player2->getNivel()} = Capacidade Inicial: {$player2->getInventario()->getCapacidadeMaxima()}<br><hr>";

$player2->coletarItem($machado);
$player2->coletarItem($armadura);
$player2->listarInventario();

$player2->subirNivel();
$player2->soltarItem($armadura);


$player2->listarInventario();
$player2->subirNivel();

