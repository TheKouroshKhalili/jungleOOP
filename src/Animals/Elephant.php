<?php

namespace Jungle\Animals;

use Jungle\Core\Animal;
use Jungle\Enums\AnimalClass;
use Jungle\Interfaces\MovementStrategyInterface;
use Jungle\Movements\WalkingMovement;
use Jungle\Traits\HerbivoreTrait;

class Elephant extends Animal implements \Jungle\Interfaces\forestFriendly
{
    use HerbivoreTrait;


    public MovementStrategyInterface $movement;

    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age, AnimalClass::MAMMAL);
        $this->movement = new WalkingMovement();
    }

    public function makeSound(): string
    {
        return $this->getName() . ': vooooooo 🐦';
    }

    public function getSpecies(): string
    {
        return 'Proboscidea';
    }
       public function move(): string
    {
        return $this->getName() . " : " . $this->movement->move();
    }
}