<?php

namespace Jungle\Core;

use Jungle\Enums\AnimalClass;

abstract class Animal
{
    public function __construct(
        private readonly string $name,
        private readonly int $age,
        private readonly AnimalClass $animalClass
    )
    {
        if ($age < 0) {
            throw new \InvalidArgumentException("Age cannot be negative.");
        }

        if (empty($name)) {
            throw new \InvalidArgumentException("Name cannot be empty.");
        }
    }

    final public function getName(): string
    {
        return $this->name;
    }

    final public function getAge(): int
    {
        return $this->age;
    }

    final public function isAdult(): bool
    {
        return $this->age >= 2;
    }

    final public function getAnimalClass(): string
    {
        return $this->animalClass->value;
    }

    abstract public function makeSound(): string;

    abstract public function getSpecies(): string;

    final public function __toString(): string
    {
        return sprintf("Animal: %s, Age: %d", $this->name, $this->age);
    }
}