<?php

namespace Jungle\Animals;

use Jungle\Core\Animal;
use Jungle\Enums\AnimalClass;
use Jungle\Interfaces\MovementStrategyInterface;
use Jungle\Movements\FlyingMovement;
use Jungle\Traits\HerbivoreTrait;

class Sparrow extends Animal implements \Jungle\Interfaces\forestFriendly
{
    use HerbivoreTrait;

    /**
     * @var MovementStrategyInterface
     */
    private MovementStrategyInterface $movement;

    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age, AnimalClass::BIRD);
        $this->movement = new FlyingMovement();
    }

    public function makeSound(): string
    {
        return $this->getName() . ': Jik Jik 🐦';
    }

    public function getSpecies(): string
    {
        return 'Sparrow';
    }

    public function move(): string
    {
        return $this->getName() . " : " . $this->movement->move();
    }
}