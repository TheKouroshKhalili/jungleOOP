<?php

namespace Jungle\Core\Bioms;

use Jungle\Animals\Camel;
use Jungle\Animals\Jerboa;
use Jungle\Animals\Scorpion;
use Jungle\Animals\Snake;
use Jungle\Core\Biom;

class Desert extends Biom
{
<<<<<<< Updated upstream
=======

    protected string $name = 'Desert';
    protected array $existingAnimals = [];
>>>>>>> Stashed changes
    /**
     * @param Animal[] $animals
     */
    public function __construct(
<<<<<<< Updated upstream
        private array $animals = [],
    ) {}
=======
        protected array $animals = [],
    ) {
        $this->existingAnimals = [
            new Snake('Sandy', 3),
            new Camel('Cammie', 7),
            new Scorpion('Sting', 2),
            new Jerboa('Jump', 1)
        ];

        $this->animals = $this->filterAllowedAnimals($this->animals, $this->existingAnimals);
    }
>>>>>>> Stashed changes

    public function hearAllSounds(): void
    {
        echo PHP_EOL . "-- Echoes of the wild: Listening to all desert creatures --" . PHP_EOL;
        foreach ($this->animals as $animal) {
            if (!$animal instanceof \Jungle\Core\Animal) {
                throw new \InvalidArgumentException("All elements must be instances of Animal.");
            }
            echo $animal->makeSound() . PHP_EOL;
        }
    }

    public function feedAll(): void
    {
        echo PHP_EOL . "-- Oasis time: Feeding every desert dweller --" . PHP_EOL;
        foreach ($this->animals as $animal) {
            if (!$animal instanceof \Jungle\Core\Animal) {
                throw new \InvalidArgumentException("All elements must be instances of Animal.");
            }
            if (method_exists($animal, 'eat')) {
                echo $animal->eat() . PHP_EOL;
            } else {
                echo "{$animal->getName()} doesn't eat in this desert. Maybe it's saving energy!" . PHP_EOL;
            }
        }
    }

    public function watchAnimalMovement(): void
    {
        echo PHP_EOL . "-- Sand dance: Watching how desert animals move --" . PHP_EOL;
        foreach ($this->animals as $animal) {
            if (!$animal instanceof \Jungle\Core\Animal) {
                throw new \InvalidArgumentException("All elements must be instances of Animal.");
            }
            if (method_exists($animal, 'move')) {
                echo $animal->move() . PHP_EOL;
            } else {
                echo "{$animal->getName()} prefers to stay still under the desert sun." . PHP_EOL;
            }
        }
    }
}