<?php

namespace App\Classes;

class Lampe
{
    private bool $allumee = false;

    public function __toString(): string
    {
        return "La lampe";
    }

    public function allumer(): void
    {
        $this->allumee = true;
        echo "{$this} est allumée<br>";
    }

    public function eteindre(): void
    {
        $this->allumee = false;
        echo "{$this} est éteinte<br>";
    }

    public function interrupteur(): void
    {
        if ($this->allumee) {
            $this->eteindre();
        } else {
            $this->allumer();
        }
    }
}
