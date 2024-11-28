# Projeto Player - POO 🎮

## Introdução
Este projeto tem como objetivo implementar um sistema básico de RPG em PHP, utilizando os conceitos da programação orientada a objetos aprendidos em aula. O sistema gerencia jogadores, seus inventários e os itens que podem ser coletados.

## Diagrama UML
![Captura de tela 2024-11-28 185140](https://github.com/user-attachments/assets/a6e35e82-a385-40ab-a92a-19f90f0f7b6a)

## Classes e suas Responsabilidades
* *Player:* Representa um jogador, com atributos como nome, nível e um objeto do tipo Inventário.
    * Métodos: subirNivel(), coletarItem(), soltarItem()
* *Inventario:* Representa o inventário do jogador, com atributos como capacidade máxima e uma lista de itens.
    * Métodos: adicionarItem(), removerItem(), verificarCapacidade()
* *Item:* Classe pai para todos os *itens*.
    * Atributos: nome, tamanho
* *Ataque, Defesa, Magia:* Subclasses de Item, cada uma com suas especificidades (tamanho do espaço que ocupam no inventário).

## Funcionamento
1. *Criação de jogadores:* Instância objetos da classe Player.
2. *Criação de itens:* Instância objetos das classes Ataque, Defesa e Magia.
3. *Gerenciamento do inventário:* Adicionar e remover itens do inventário, verificando a capacidade máxima.
4. *Subir de nível:* Aumentar a capacidade do inventário ao subir de nível.

## Index.php
O arquivo index.php contém os testes para verificar o funcionamento das classes e métodos implementados. Os testes feitos no código incluem:
* Criar dois jogadores;
* Criar itens de cada tipo;
* Adicionar itens ao inventário;
* Fazer um jogador subir de nível e verificar o aumento da capacidade do inventário.

## Instalação e execução
1. *Instalação do xampp (ambiente virtual):* [Xampp](https://www.apachefriends.org/pt_br/index.html)
   
2. *Clone este repositório:* gh repo clone joanasouzaa/projeto_player
   
3. Após instalar o Xampp, a pasta insralação (conforme imagem abaixo)
![Captura de tela 2024-11-28 191747](https://github.com/user-attachments/assets/b81b06b2-beff-4cd7-aab8-27bcc0367d0d)
4. Localize a pasta htdocs

![Captura de tela 2024-11-28 191758](https://github.com/user-attachments/assets/430e4a00-7f1d-454d-9e77-2c8cbf9bb43b)

5. Insira o repositório clonado dentro de htdocs
   
6. Abra o software xampp em sua máquina e inicie apenas o `Apache` (conforme imagem abaixo)
   
![Captura de tela 2024-11-28 190836](https://github.com/user-attachments/assets/8bd72927-b3a9-4441-9d33-1776f681a219)

7. Em seu navegador digite na barra de pesquisa:localhost/index.php


## Autores
* Joana Amorim de Souza - RA 2018426
* Samira da Silva Luiz  - RA 2014162

## Data
28/11/2024
