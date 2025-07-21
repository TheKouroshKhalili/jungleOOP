<?php

namespace Jungle\Movements;

use Jungle\Interfaces\MovementStrategyInterface;

class DesertCageMovement implements MovementStrategyInterface
{
    public function move(): string
    {
        return "This desert animal is in a zoo cage, dreaming of endless sands.";
    }
}
