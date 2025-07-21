<?php

namespace Jungle\Animals;

use Jungle\Core\Animal;
use Jungle\Enums\AnimalClass;
use Jungle\Interfaces\CanFlyInterface;
use Jungle\Interfaces\MovementStrategyInterface;
use Jungle\Movements\FlyingMovement;
use Jungle\Traits\CarnivoreTrait;

class Eagle extends Animal implements \Jungle\Interfaces\forestFriendly
{
        use CarnivoreTrait;

        public MovementStrategyInterface $movement;


         public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age, AnimalClass::BIRD);
        $this->movement = new FlyingMovement();
    }

    public function makeSound(): string
    {
        return $this->getName() . ': Screech 🦅';
    }

    public function getSpecies(): string
    {
        return 'Eagle';
    }
   
    public function move(): string
    {
        return $this->getName() . " : " . $this->movement->move();
    }
}