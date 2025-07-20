<?php

namespace Jungle\Animals;

use Jungle\Core\Animal;
use Jungle\Enums\AnimalClass;
use Jungle\Interfaces\MovementStrategyInterface;
use Jungle\Movements\DriftMovement;
use Jungle\Traits\HerbivoreTrait;

class Plankton extends Animal
{
    use HerbivoreTrait;
    
    private MovementStrategyInterface $movement;

    public function __construct(string $name , int $age)
    {
        parent::__construct($name, $age, AnimalClass::FISH);
        $this->movement = new DriftMovement();
    }

    public function makeSound(): string
    {
        return $this->getName() . ': *microscopic hum*';
    }

    public function eat(): string
    {
        return $this->getName() . ' absorbs sunlight and nutrients.';
    }

    public function move(): string
    {
        return $this->getName() . ' : ' . $this->movement->move();
    }

    public function getSpecies(): string
    {
        return 'Plankton';
    }
}
