<?php

namespace Jungle\Animals;

use Jungle\Core\Animal;
use Jungle\Enums\AnimalClass;
use Jungle\Interfaces\MovementStrategyInterface;
use Jungle\Movements\CrawlingMovement;
use Jungle\Traits\CarnivoreTrait;

class Frog extends Animal
{
    use CarnivoreTrait;
       private MovementStrategyInterface $movement;

    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age, AnimalClass::AMPHIBIAN);
        $this->movement = new CrawlingMovement();
    }

    public function makeSound(): string
    {
        return "Ribbit";
    }

    public function getSpecies(): string
    {
        return "Frog";
    }
        public function move(): string
    {
        return $this->getName() . " : " . $this->movement->move();
    }
}
