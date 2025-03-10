<?php

namespace App;

class OLEDScreenDecorator extends ComputerDecorator
{
    public function getPrice(): int
    {
        return $this->computer->getPrice() + 100; // Adding extra cost for OLED screen
    }

    public function getDescription(): string
    {
        return $this->computer->getDescription() . " with an OLED screen";
    }
}