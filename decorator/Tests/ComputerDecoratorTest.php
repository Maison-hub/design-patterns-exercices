<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\GPUDecorator;
use App\OLEDScreenDecorator;


use App\Laptop;

class ComputerDecoratorTest extends TestCase
{
    public function testBasicLaptop()
    {
        $laptop = new Laptop();
        
        $this->assertSame(400, $laptop->getPrice());
        $this->assertSame("A laptop computer", $laptop->getDescription());
    }

    public function laptopWithGPU()
    {
        $laptop = new Laptop();
        $laptopWithGPU = new GPUDecorator($laptop);

        $this->assertSame(550, $laptopWithGPU->getPrice());
        $this->assertSame("A laptop computer with a GPU", $laptopWithGPU->getDescription());
    }

    public function laptopWithOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopWithOLEDScreen = new OLEDScreenDecorator($laptop);

        $this->assertSame(500, $laptopWithOLEDScreen->getPrice());
        $this->assertSame("A laptop computer with an OLED screen", $laptopWithOLEDScreen->getDescription());
    }

    public function laptopWithGPUAndOLEDScreen()
    {
        $laptop = new Laptop();
        $laptopWithGPU = new GPUDecorator($laptop);
        $laptopWithGPUAndOLEDScreen = new OLEDScreenDecorator($laptopWithGPU);

        $this->assertSame(650, $laptopWithGPUAndOLEDScreen->getPrice());
        $this->assertSame("A laptop computer with a GPU with an OLED screen", $laptopWithGPUAndOLEDScreen->getDescription());
    }
}