<?php

require_once 'Classes/Item.php';

class Ataque extends Item
{
    public function __construct(string $name)
    {
        parent::__construct($name, 7, "Ataque");
    }


    public function getName(): string
    {
        return parent::getName();
    }

    public function setName(string $name): void
    {
        parent::setName($name);
    }

    public function getTamanho(): int
    {
        return parent::getTamanho();
    }

    public function setTamanho(int $tamanho): void
    {
        parent::setTamanho($tamanho);
    }

    public function getClasse(): string
    {
        return parent::getClasse();
    }

    public function setClasse(string $classe): void
    {
        parent::setClasse($classe);
    }
}
?>