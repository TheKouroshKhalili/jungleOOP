<?php

namespace Jungle\Animals;

use Jungle\Core\Animal;
use Jungle\Enums\AnimalClass;
use Jungle\Interfaces\MovementStrategyInterface;
use Jungle\Movements\WebCrawlingMovement;
use Jungle\Traits\CarnivoreTrait;

class Spider extends Animal implements \Jungle\Interfaces\forestFriendly
{
    use CarnivoreTrait;
    private MovementStrategyInterface $movement;

    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age, AnimalClass::INSECT);
        $this->movement = new WebCrawlingMovement();
    }

    public function makeSound(): string
    {
        return "...";
    }

    public function getSpecies(): string
    {
        return "Spider";
    }

    public function move(): string
    {
        return $this->getName() . " : " . $this->movement->move();
    }
}
