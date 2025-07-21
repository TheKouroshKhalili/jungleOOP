<?php

namespace Jungle\Core\Bioms;

 use Jungle\Core\Biom;
 use Jungle\Core\Animal;

use Jungle\Animals\{
    Bee, Eagle, Elephant, Frog, GoldFish, Lion, Snake, Sparrow, Spider,
    Octopus, Shark, Plankton, Camel, Scorpion, Jerboa
};
 class Forest extends Biom
{

    protected string $name = 'Forest';

    /**
     * @param Animal[] $animals
     */
    public function __construct(
        protected array $animals = [],
    ) {}

    protected string $name = 'Forest';
      protected array $existingAnimals = [];
    /**
     * @param Animal[] $animals
     */
 public function __construct(
        protected array $animals = [],
    ) {
        $this->existingAnimals = [
         new Lion('Simba', 5),
    new Sparrow('Jack', 2),
    new Elephant('Dumbo', 10),
    new Bee('Hach', 1),
    new Frog('Freddy', 2),
    new Eagle('Sky', 4),
    new Spider('Webby', 1)
        ];

        // Only keep animals that match existingAnimals by class and species
        $this->animals = $this->filterAllowedAnimals($this->animals, $this->existingAnimals);
    }

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
