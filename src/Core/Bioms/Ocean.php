<?php

namespace Jungle\Core\Bioms;

use Exception;
use Jungle\Core\Biom;

use Jungle\Animals\{
    Bee, Eagle, Elephant, Frog, GoldFish, Lion, Snake, Sparrow, Spider,
    Octopus, Shark, Plankton, Camel, Scorpion, Jerboa
};
use Jungle\Interfaces\oceanFriendly;

class Ocean extends Biom
{
    protected string $name = 'Ocean';
 public function __construct(
        protected array $animals = [],
    ) {
        $this->animals = $this->Supports($this->animals);
    }


    public function hearAllSounds(): void
    {
        echo PHP_EOL . "-- Symphony of the waves: Listening to all ocean creatures --" . PHP_EOL;
        foreach ($this->animals as $animal) {
            if (!$animal instanceof \Jungle\Core\Animal) {
                throw new \InvalidArgumentException("All elements must be instances of Animal.");
            }
            echo $animal->makeSound() . PHP_EOL;
        }
    }

    public function feedAll(): void
    {
        echo PHP_EOL . "-- Feeding frenzy: Nourishing every ocean dweller --" . PHP_EOL;
        foreach ($this->animals as $animal) {
            if (!$animal instanceof \Jungle\Core\Animal) {
                throw new \InvalidArgumentException("All elements must be instances of Animal.");
            }
            if (method_exists($animal, 'eat')) {
                echo $animal->eat() . PHP_EOL;
            } else {
                echo "{$animal->getName()} doesn't eat in this ocean. Maybe it's just floating along!" . PHP_EOL;
            }
        }
    }

    public function watchAnimalMovement(): void
    {
        echo PHP_EOL . "-- Underwater ballet: Watching how ocean animals move --" . PHP_EOL;
        foreach ($this->animals as $animal) {
            if (!$animal instanceof \Jungle\Core\Animal) {
                throw new \InvalidArgumentException("All elements must be instances of Animal.");
            }
            if (method_exists($animal, 'move')) {
                echo $animal->move() . PHP_EOL;
            } else {
                echo "{$animal->getName()} prefers to drift with the current." . PHP_EOL;
            }
        }
    }
        protected function Supports(array $inputAnimals): array
    {
        $filtered = [];
        foreach ($inputAnimals as $animal) {
            if (! $animal instanceof oceanFriendly) {
                throw new Exception("این حیوون اقیانوسی نیست");
            }
            $filtered[] = $animal;
        }
        return $filtered;
    }
}
