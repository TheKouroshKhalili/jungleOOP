<?php

namespace Jungle\Animals;

use Jungle\Core\Animal;
use Jungle\Enums\AnimalClass;
use Jungle\Interfaces\MovementStrategyInterface;
use Jungle\Movements\RunningMovement;
use Jungle\Traits\HerbivoreTrait;

class Jerboa extends Animal implements \Jungle\Interfaces\desertFriendly
{
    use HerbivoreTrait;

    /**
     * @var MovementStrategyInterface
     */
    public MovementStrategyInterface $movement;

    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age, AnimalClass::MAMMAL);
        $this->movement = new RunningMovement();
    }

    public function makeSound(): string
    {
        return $this->getName() . ': Squeak Squeak 🐭';
    }

    public function getSpecies(): string
    {
        return 'Jaculus';
    }

    public function move(): string
    {
        return $this->getName() . " : " . $this->movement->move();
    }
}
