<?php

namespace Jungle\Movements;

use Jungle\Interfaces\MovementStrategyInterface;

class RunningMovement implements MovementStrategyInterface
{

    public function move(): string
    {
        return 'Running with power and speed 🐆';
    }
}