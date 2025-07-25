<?php

namespace Jungle\Core;

use Jungle\Enums\AnimalClass;

abstract class Biom
{

    protected string $name;
    protected array $animals = [];
    protected array $existingAnimals = [];

    abstract public function hearAllSounds(): void;
    

    abstract public function feedAll(): void;


    abstract public function watchAnimalMovement(): void;
       final public function getName(): string
    {
        return $this->name;
    }

    public function listAllAnimals(?AnimalClass $class = null)
    {
        echo PHP_EOL . "-- Listing wanted animals in the " . $this->getName() . " biome --" . PHP_EOL;
        foreach ($this->animals as $animal) {
            if ($class === null || $animal->getAnimalClass() === $class->value) {
                echo $animal->getName() . " (" . $animal->getSpecies() . ")\n";
            }
        }
    }

       public function listAllAdultAnimals(?AnimalClass $class = null)
    {
        echo PHP_EOL . "-- Listing wanted adult animals in the " . $this->getName() . " biome --" . PHP_EOL;
        foreach ($this->animals as $animal) {
            if ($class === null || $animal->getAnimalClass() === $class->value) {
                if ($animal->isAdult()) {
                    echo $animal->getName() . " (" . $animal->getSpecies() . ")\n";
                }
            }
        }
    }


    public function getAllAnimals()
    {
        $animalList = [];
        foreach ($this->animals as $animal) {
                $animalList[] = $animal;
        }
        return $animalList;
    }

    /**
     * Filters input animals to only those allowed in the biome (by class and species).
     * @param array $inputAnimals
     * @param array $allowedAnimals
     * @return array
     */
  

}