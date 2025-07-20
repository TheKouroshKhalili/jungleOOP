<?php

namespace Jungle\Movements;

use Jungle\Interfaces\MovementStrategyInterface;

class PredatorySwimMovement implements MovementStrategyInterface
{
    public function move(): string
    {
        return "Shark glides swiftly, hunting for prey!";
    }
}
