<?php

namespace Jungle\Core;

use Exception;
use Jungle\Animals\{
    Bee, Eagle, Elephant, Frog, GoldFish, Lion, Snake, Sparrow, Spider,
    Octopus, Shark, Plankton, Camel, Scorpion, Jerboa
};
use Jungle\Core\Bioms\Forest;
use Jungle\Core\Bioms\Desert;
use Jungle\Core\Bioms\Ocean;
use Jungle\Enums\AnimalClass;
use Jungle\Enums\Biom;
use Jungle\Interfaces\DesertFriendly;
use Jungle\Interfaces\oceanFriendly;
use Jungle\Interfaces\ForestFriendly;
use Jungle\Traits\convertToFriendly;

class ZOO
{

    use convertToFriendly;
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
            $this->putAnimalInForestCage(new Lion('sara', 4)),
            $this->putAnimalInForestCage(new Lion('sony', 1)),
            $this->putAnimalInForestCage(new Elephant('Dumbo', 10)),
            $this->putAnimalInForestCage(new Eagle('Sky', 4)),
        ]);
        
        $this->desert = new Desert([
            $this->putAnimalInDesertCage(new Snake('Sandy', 3)),
            $this->putAnimalInDesertCage(new Camel('Cammie', 7)),
            $this->putAnimalInDesertCage(new Camel('rony', 2)),
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
        $zoo->listAllAnimals(AnimalClass::MAMMAL);
        $zoo->countAllAnimalsByClass();
        $zoo->oldestAnimal();
        $zoo->animalsListByBiom(Biom::FOREST);
        $zoo->countAllAnimalsBySpecies();
        $zoo->BiomsAnimalClass();
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

    public function listAllAnimals(AnimalClass $class)
    {
        echo PHP_EOL . "-- Listing wanted animals in the " . $class->value . " class --" . PHP_EOL;
        foreach ($this->animals as $animal) {
            if ($animal->getAnimalClass() === $class->value) {
                echo $animal->getName() . " (" . $animal->getSpecies() . ")\n";
            }
        }
    }
       public function countAllAnimalsByClass()
    {
        $count = [
            'Mammal' => 0,
            'Bird' => 0,
            'Reptile' => 0,
            'Amphibian' => 0,
            'Fish' => 0,
            'Insect' => 0,
            'Arachnid' => 0,
        ];
        echo PHP_EOL . "-- Counting all animals in the zoo by class --" . PHP_EOL;
        foreach ($count as $key => $value) {
            foreach ($this->animals as $animal) {
                if ($animal->getAnimalClass() === $key) {
                    $count[$key]++;
                }
            }
        }
        foreach ($count as $key => $value) {
            echo "Total " . $key . "s: " . $value . PHP_EOL;
        }
    }

    public function oldestAnimal()
    {
        echo PHP_EOL . "-- Oldest animal in the zoo --" . PHP_EOL;
        $oldest = null;
        $oldest2 = null;
        $oldest3 = null;
        foreach ($this->animals as $animal) {
            if ($oldest === null || $animal->getAge() > $oldest->getAge()) {
                $oldest = $animal;
            }if($oldest2 === null || $animal->getAge() > $oldest2->getAge() && $animal !== $oldest) {
                $oldest2 = $animal;
            }if($oldest3 === null || $animal->getAge() > $oldest3->getAge() && $animal !== $oldest && $animal !== $oldest2) {
                $oldest3 = $animal;
            }
        }
        if ($oldest !== null) {
            echo "Oldest animal: " . $oldest->getName() . " (" . $oldest->getSpecies() . "), Age: " . $oldest->getAge() . PHP_EOL;
            if ($oldest2 !== null) {
                echo "Second oldest animal: " . $oldest2->getName() . " (" . $oldest2->getSpecies() . "), Age: " . $oldest2->getAge() . PHP_EOL;
            }
            if ($oldest3 !== null) {
                echo "Third oldest animal: " . $oldest3->getName() . " (" . $oldest3->getSpecies() . "), Age: " . $oldest3->getAge() . PHP_EOL .  PHP_EOL;
            }
        }
    }


    public function animalsListByBiom(\Jungle\Enums\Biom $biom){
        echo 'animals List By Biom ' . $biom->value . PHP_EOL;
        $class = $this->convert($biom);
        $filtered = [];
        foreach ($this->animals as $animal) {
            if ($animal instanceof $class) {
                echo $animal . PHP_EOL;
            }
            
        }
        
    }
       public function countAllAnimalsBySpecies()
    {
        
            $speciesCount = [];
            foreach ($this->animals as $animal) {
                $species = $animal->getSpecies();
                if (!array_key_exists($species, $speciesCount)) {
                $speciesCount[$species] = 0;
                }
            }
            

        echo PHP_EOL . "-- Counting all animals in the zoo by species --" . PHP_EOL;
        foreach ($speciesCount as $key => $value) {
            foreach ($this->animals as $animal) {
                if ($animal->getSpecies() === $key) {
                    $speciesCount[$key]++;
                }
            }
        }
        foreach ($speciesCount as $key => $value) {
            echo "Total " . $key . "s: " . $value . PHP_EOL;
        }
    }
    public function BiomsAnimalClass (){
        $bioms = [
            'Desert' => [],
            'Forest' => [],
            'Ocean' => [],
        ];
        $forestAnimals = $this->forest->getAllAnimals();
        $desertAnimals = $this->desert->getAllAnimals();
        $oceanAnimals  = $this->ocean->getAllAnimals();
        foreach ($forestAnimals as $forestAnimal) {
            $class = $forestAnimal->getAnimalClass();
            if (!in_array($class, $bioms['Forest'])) {
                $bioms['Forest'][] = $class;
            }
        }
        foreach ($desertAnimals as $desertAnimal) {
            $class = $desertAnimal->getAnimalClass();
            if (!in_array($class, $bioms['Desert'])) {
                $bioms['Desert'][] = $class;
            }
        }
        foreach ($oceanAnimals as $oceanAnimal) {
            $class = $oceanAnimal->getAnimalClass();
            if (!in_array($class, $bioms['Ocean'])) {
                $bioms['Ocean'][] = $class;
            }
        }

        foreach ($bioms as $key => $value) {
            echo "animalClasses in " . $key . " are: [" . implode(", ", $value) . "]" . PHP_EOL;
        }
    }
}