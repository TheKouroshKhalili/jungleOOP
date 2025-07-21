<?php

namespace Jungle\Movements;

use Jungle\Interfaces\MovementStrategyInterface;

class InCageMovement implements MovementStrategyInterface
{
    public function move(): string
    {
        return "This animal is in a cage and can't roam freely.";
    }
}
