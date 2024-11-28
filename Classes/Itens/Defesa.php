<?php

require_once 'Classes/Item.php';

class Defesa extends Item
{
    public function __construct($name)
    {
        parent::__construct($name, 4, "Defesa");
    }

    public function getName(): string
    {
        return parent::getName();
    }

    public function setName($name): void
    {
        parent::setName($name);
    }

    public function getTamanho(): int
    {
        return parent::getTamanho();
    }

    public function setTamanho($tamanho): void
    {
        parent::setTamanho($tamanho);
    }

    public function getClasse(): string
    {
        return parent::getClasse();
    }

    public function setClasse($classe): void
    {
        parent::setClasse($classe);
    }
}
?>