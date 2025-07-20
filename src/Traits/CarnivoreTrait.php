<?php

namespace Jungle\Traits;

trait CarnivoreTrait
{
    public function eat(): string
    {
        return "{$this->getAnimalClass()} ({$this->getSpecies()}) {$this->getName()} is eating meat! ... 🥩";
    }

    public function isCarnivore(): bool
    {
        return true;
    }
}