<?php

namespace Jungle\Core;

use Jungle\Animals\{
    Bee, Eagle, Elephant, Frog, GoldFish, Lion, Snake, Sparrow, Spider,
    Octopus, Shark, Plankton, Camel, Scorpion, Jerboa
};
use Jungle\Core\Bioms\Forest;
use Jungle\Core\Bioms\Desert;
use Jungle\Core\Bioms\Ocean;
use Jungle\Enums\AnimalClass;
class ZOO
{


    protected Forest $forest;
    protected Desert $desert;
    protected Ocean $ocean;
    protected array $animals = [];

    public function __construct() {
        $this->addAnimal();
    }

private function addAnimal() {

        $this->forest = new Forest([
            $this->putAnimalInForestCage(new Lion('Simba', 5)),
            $this->putAnimalInForestCage(new Elephant('Dumbo', 10)),
            $this->putAnimalInForestCage(new Eagle('Sky', 4)),
        ]);
        
        $this->desert = new Desert([
            $this->putAnimalInDesertCage(new Snake('Sandy', 3)),
            $this->putAnimalInDesertCage(new Camel('Cammie', 7)),
            $this->putAnimalInDesertCage(new Jerboa('Jump', 1))
        ]);

        $this->ocean = new Ocean([
            $this->putAnimalInOceanCage(new GoldFish('Goldie', 1)),
            $this->putAnimalInOceanCage(new Octopus('Inky', 2)),
            $this->putAnimalInOceanCage(new Shark('Jaws', 6)),
        ]);

    }


    public static function visitTheZoo() {
        echo "Visiting the zoo...\n";
       $zoo = new ZOO();
       $zoo->getAllAnimals();
        $zoo->forest->listAllAnimals();
        $zoo->forest->listAllAdultAnimals();
        $zoo->forest->hearAllSounds();
        $zoo->forest->feedAll();
        $zoo->forest->watchAnimalMovement();

        $zoo->desert->listAllAnimals();
        $zoo->desert->listAllAdultAnimals();
        $zoo->desert->hearAllSounds();
        $zoo->desert->feedAll();
        $zoo->desert->watchAnimalMovement();

        $zoo->ocean->listAllAnimals();
        $zoo->ocean->listAllAdultAnimals();
        $zoo->ocean->hearAllSounds();
        $zoo->ocean->feedAll();
        $zoo->ocean->watchAnimalMovement();
    }

    private function putAnimalInForestCage($animal)
    {
        $animal->movement = new \Jungle\Movements\ForestCageMovement();
        return $animal;
    }

    private function putAnimalInDesertCage($animal)
    {
        $animal->movement = new \Jungle\Movements\DesertCageMovement();
        return $animal;
    }

    private function putAnimalInOceanCage($animal)
    {
        $animal->movement = new \Jungle\Movements\OceanCageMovement();
        return $animal;
    }

    public function getAllAnimals()
    {
        echo PHP_EOL . "-- Listing all animals in the zoo --" . PHP_EOL;
        $this->animals = array_merge(
        $this->forest->getAllAnimals(),
        $this->desert->getAllAnimals(),
        $this->ocean->getAllAnimals()
    );
    foreach ($this->animals as $animal) {
        echo $animal->getName() . " (" . $animal->getSpecies() . ")\n";
    }
}
}