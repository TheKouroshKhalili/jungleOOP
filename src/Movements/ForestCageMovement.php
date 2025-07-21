<?php

namespace Jungle\Movements;

use Jungle\Interfaces\MovementStrategyInterface;

class ForestCageMovement implements MovementStrategyInterface
{
    public function move(): string
    {
        return "This forest animal is in a zoo cage, surrounded by trees but can't roam free.";
    }
}
