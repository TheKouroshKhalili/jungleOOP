<?php

namespace Jungle\Core\Bioms;

 use Jungle\Core\Biom;
 use Jungle\Core\Animal;

 class Forest extends Biom
{
    protected string $name = 'Forest';
    /**
     * @param Animal[] $animals
     */
    public function __construct(
        protected array $animals = [],
    ) {}

    public function hearAllSounds(): void
    {
        echo PHP_EOL . "-- Hearing all animal sounds in the forest --" . PHP_EOL;
        foreach ($this->animals as $animal) {
            if (!$animal instanceof Animal) {
                throw new \InvalidArgumentException("All elements must be instances of Animal.");
            }
            echo $animal->makeSound() . PHP_EOL;
        }
    }

    public function feedAll(): void
    {
        echo PHP_EOL . "-- Feeding all animals in the forest --" . PHP_EOL;

        foreach ($this->animals as $animal) {
            if (!$animal instanceof Animal) {
                throw new \InvalidArgumentException("All elements must be instances of Animal.");
            }
            if (method_exists($animal, 'eat')) {
                echo $animal->eat() . PHP_EOL;
            } else {
                echo "{$animal->getName()} does not eat in this forest." . PHP_EOL;
            }
        }
    }

    public function watchAnimalMovement(): void
    {
        echo PHP_EOL . "-- Watching animal movements in the forest --" . PHP_EOL;

        foreach ($this->animals as $animal) {
            if (!$animal instanceof Animal) {
                throw new \InvalidArgumentException("All elements must be instances of Animal.");
            }
            if (method_exists($animal, 'move')) {
                echo $animal->move() . PHP_EOL;
            } else {
                echo "{$animal->getName()} does not move in this forest." . PHP_EOL;
            }
        }
    }
}
