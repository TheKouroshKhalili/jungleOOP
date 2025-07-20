<?php

namespace Jungle\Animals;

use Jungle\Core\Animal;
use Jungle\Enums\AnimalClass;
use Jungle\Interfaces\MovementStrategyInterface;
use Jungle\Movements\PredatorySwimMovement;
use Jungle\Traits\CarnivoreTrait;

class Shark extends Animal
{
    use CarnivoreTrait;
    
    private MovementStrategyInterface $movement;

    public function __construct(string $name , int $age )
    {
        parent::__construct($name, $age, AnimalClass::FISH);
        $this->movement = new PredatorySwimMovement();
    }

    public function makeSound(): string
    {
        return $this->getName() . ': *ominous silence*';
    }

    public function eat(): string
    {
        return $this->getName() . ' chomps down on a fish!';
    }

    public function move(): string
    {
        return $this->getName() . ' : ' . $this->movement->move();
    }

    public function getSpecies(): string
    {
        return 'Shark';
    }
}
