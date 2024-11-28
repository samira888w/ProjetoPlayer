<?php

require_once 'Inventario.php';

class Player
{
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(string $nickname)
    {
        $this->setNickname($nickname);
        $this->setNivel(1);
        $this->inventario = new Inventario();
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function setNickname(string $nickname): void
    {
        if (empty($nickname)) {
            $this->nickname = "Informe o nickname do seu player";
        } else {
            $this->nickname = $nickname;
        }
    }

    public function getNivel(): int
    {
        return $this->nivel;
    }

    public function setNivel(int $nivel): void
    {
        $this->nivel = $nivel;
    }
    public function getInventario(): Inventario
    {
        return $this->inventario;
    }

    public function setInventario(Inventario $inventario): void
    {
        $this->inventario = $inventario;
    }

    public function subirNivel(): void
    {
        $this->nivel++;
        $incrementar = $this->nivel * 3;
        $this->inventario->aumentarCapacidade($incrementar);
        echo "{$this->getNickname()} subiu para o nível {$this->getNivel()}. <br> Nova capacidade do inventário: {$this->inventario->getCapacidadeMaxima()}<br><hr>";
    }

    public function coletarItem(Item $item)
    {
        if ($this->inventario->adicionar($item)) {
            echo "{$this->getNickname()} coletou o item: <i>{$item->getName()}</i><br>";
        } else {
            echo "Inventário cheio! Não foi possível coletar {$item->getName()}<br>";
        }
    }

    public function soltarItem(Item $item): void
    {
        if ($this->inventario->remover($item)) {
            echo "{$this->getNickname()} soltou o item: {$item->getName()}<br> <hr>";
        } else {
            echo "{$item->getName()} não está no inventário!<br>";
        }
    }

    public function listarInventario(): void
    {
        echo "<b>Inventário de {$this->getNickname()}</b>:<br>";
        $this->inventario->listarItens();
    }
}
