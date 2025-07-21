<?php

namespace Jungle\Animals;

use Jungle\Core\Animal;
use Jungle\Enums\AnimalClass;
use Jungle\Interfaces\MovementStrategyInterface;
use Jungle\Movements\CrawlingMovement;
use Jungle\Traits\CarnivoreTrait;

class Scorpion extends Animal implements \Jungle\Interfaces\desertFriendly
{
    use CarnivoreTrait;

    /**
     * @var MovementStrategyInterface
     */
    private MovementStrategyInterface $movement;

    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age, AnimalClass::ARACHNID);
        $this->movement = new CrawlingMovement();
    }

    public function makeSound(): string
    {
        return $this->getName() . ': Click Click 🦂';
    }

    public function getSpecies(): string
    {
        return 'Scorpion';
    }

    public function move(): string
    {
        return $this->getName() . " : " . $this->movement->move();
    }
}
