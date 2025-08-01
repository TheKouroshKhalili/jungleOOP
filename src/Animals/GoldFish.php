<?php

namespace Jungle\Animals;

use Jungle\Core\Animal;
use Jungle\Enums\AnimalClass;
use Jungle\Interfaces\MovementStrategyInterface;
use Jungle\Movements\SwimmingMovement;
use Jungle\Traits\HerbivoreTrait;

class GoldFish extends Animal implements \Jungle\Interfaces\oceanFriendly
{
    use HerbivoreTrait;
          public MovementStrategyInterface $movement;

    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age, AnimalClass::FISH);
        $this->movement = new SwimmingMovement();
    }

    public function makeSound(): string
    {
        return "Blub";
    }

    public function getSpecies(): string
    {
        return "GoldFish";
    }
        public function move(): string
    {
        return $this->getName() . " : " . $this->movement->move();
    } 
}
