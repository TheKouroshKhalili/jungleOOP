<?php

namespace Jungle\Movements;

use Jungle\Interfaces\MovementStrategyInterface;

class WalkingMovement implements MovementStrategyInterface
{

    public function move(): string
    {
        return 'walk slowly forward on all fours.';
    }
}