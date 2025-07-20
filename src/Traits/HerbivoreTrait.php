<?php

namespace Jungle\Traits;

trait HerbivoreTrait
{
    public function eat(): string
    {
        return "{$this->getAnimalClass()} ({$this->getSpecies()}) {$this->getName()} is eating plants! ... 🌿";
    }

    public function isCarnivore(): bool
    {
        return false;
    }
}