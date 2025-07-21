<?php

namespace Jungle\Animals;

use Jungle\Core\Animal;
use Jungle\Enums\AnimalClass;
use Jungle\Interfaces\MovementStrategyInterface;
use Jungle\Movements\RunningMovement;
use Jungle\Traits\CarnivoreTrait;

class Lion extends Animal
{
    use CarnivoreTrait;

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
        return $this->getName() . ': Rour 🦁';
    }



    public function getSpecies(): string
    {
        return 'Felines';
    }

    public function move(): string
    {
        return $this->getName() . " : " . $this->movement->move();
    }
}