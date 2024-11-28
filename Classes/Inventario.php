<?php

class Inventario
{
    private int $capacidadeMaxima;
    private array $itens;

    public function __construct($capacidadeInicial = 20)
    {
        $this->setCapacidadeMaxima($capacidadeInicial);
        $this->itens = [];
    }

    public function getCapacidadeMaxima(): int
    {
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima(int $capacidade): void
    {
        $this->capacidadeMaxima = $capacidade;
    }

    public function getItens(): array{
        return $this->itens;
    }

    public function setItens(array $itens): void{
        if (empty($itens)) {
            $this->itens[] = "Informe o item que deseja adicionar no inventário";
        } else {
            $this->itens = $itens;
        }
    }

    public function adicionar(Item $item): bool
    {
        if ($this->capacidadeLivre() >= $item->getTamanho()) {
            $this->itens[] = $item;
            echo "Item {$item->getName()} adicionado no inventário!<br>";
            return true;
        }
        return false;
    }

    public function remover(Item $item): bool
    {
        foreach ($this->itens as $indice => $valor) {
            if ($valor === $item) {
                unset($this->itens[$indice]);
                // $this->itens = array_values($this->itens);
                echo "Item {$item->getName()} removido do inventário!<br>";
                return true;
            }
        }
        return false;
    }

    public function capacidadeLivre(): int
    {
        $ocupado = 0;
        foreach ($this->itens as $item) {
            $ocupado += $item->getTamanho();
        }
        return $this->capacidadeMaxima - $ocupado;
    }

    public function aumentarCapacidade($incrementar): void
    {
        $this->capacidadeMaxima += $incrementar;
    }

    public function listarItens(): void
    {
        if (empty($this->itens)) {
            echo "O inventário está vazio.<br>";
            return;
        }

        foreach ($this->itens as $item) {
            echo "Item: {$item->getName()} <br> Classe: {$item->getClasse()} <br> Tamanho: {$item->getTamanho()}<br> <hr>";
        }
    }
}
