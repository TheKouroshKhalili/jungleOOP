<?php

namespace Jungle\Movements;

use Jungle\Interfaces\MovementStrategyInterface;

class SwimmingMovement implements MovementStrategyInterface
{
    public function move(): string
    {
        return "swims gracefully";
    }
}
