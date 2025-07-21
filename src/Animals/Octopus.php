<?php

namespace Jungle\Animals;

use Jungle\Core\Animal;
use Jungle\Enums\AnimalClass;
use Jungle\Interfaces\MovementStrategyInterface;
use Jungle\Movements\InkJetMovement;
use Jungle\Traits\CarnivoreTrait;

class Octopus extends Animal
{

    use CarnivoreTrait;
    
    public MovementStrategyInterface $movement;

    public function __construct(string $name, int $age )
    {
        parent::__construct($name, $age, AnimalClass::FISH);
        $this->movement = new InkJetMovement();
    }

    public function makeSound(): string
    {
        return $this->getName() . ': *silent squirt*';
    }

    public function eat(): string
    {
        return $this->getName() . ' wraps its tentacles around a crab!';
    }

    public function move(): string
    {
        return $this->getName() . ' : ' . $this->movement->move();
    }

    public function getSpecies(): string
    {
        return 'Octopus';
    }
}
