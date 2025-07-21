<?php

namespace Jungle\Animals;

use Jungle\Core\Animal;
use Jungle\Enums\AnimalClass;
use Jungle\Interfaces\MovementStrategyInterface;
use Jungle\Movements\WalkingMovement;
use Jungle\Traits\HerbivoreTrait;

class Camel extends Animal implements \Jungle\Interfaces\desertFriendly
{
    use HerbivoreTrait;

    /**
     * @var MovementStrategyInterface
     */
    public MovementStrategyInterface $movement;

    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age, AnimalClass::MAMMAL);
        $this->movement = new WalkingMovement();
    }

    public function makeSound(): string
    {
        return $this->getName() . ': Grunt Grunt 🐪';
    }

    public function getSpecies(): string
    {
        return 'Camelus';
    }

    public function move(): string
    {
        return $this->getName() . " : " . $this->movement->move();
    }
}
