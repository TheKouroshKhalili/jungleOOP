<?php

namespace Jungle\Animals;

use Jungle\Core\Animal;
use Jungle\Enums\AnimalClass;
use Jungle\Interfaces\MovementStrategyInterface;
use Jungle\Movements\FlyingMovement;
use Jungle\Traits\CarnivoreTrait;
use Jungle\Traits\HerbivoreTrait;

class Bee extends Animal implements \Jungle\Interfaces\forestFriendly
{
    use HerbivoreTrait;

    private MovementStrategyInterface $movement;
    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age, AnimalClass::INSECT);
        $this->movement = new FlyingMovement();
    }

    public function makeSound(): string
    {
        return "Buzz";
    }

    public function getSpecies(): string
    {
        return "Bee";
    }
        public function move(): string
    {
        return $this->getName() . " : " . $this->movement->move();
    }
}
