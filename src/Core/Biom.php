<?php

namespace Jungle\Core;

abstract class Biom
{
<<<<<<< Updated upstream
=======
    protected string $name;
    protected array $animals = [];
    protected array $existingAnimals = [];

>>>>>>> Stashed changes
    abstract public function hearAllSounds(): void;
    

    abstract public function feedAll(): void;


    abstract public function watchAnimalMovement(): void;

<<<<<<< Updated upstream
=======
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
    protected function filterAllowedAnimals(array $inputAnimals, array $allowedAnimals): array
    {
        $filtered = [];
        foreach ($inputAnimals as $animal) {
            foreach ($allowedAnimals as $allowed) {
                if (get_class($animal) === get_class($allowed) && $animal->getSpecies() === $allowed->getSpecies()) {
                    $filtered[] = $animal;
                    break;
                }
            }
        }
        return $filtered;
    }

>>>>>>> Stashed changes
}