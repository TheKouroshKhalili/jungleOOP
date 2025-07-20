<?php

namespace Jungle\Movements;

use Jungle\Interfaces\MovementStrategyInterface;

class DriftMovement implements MovementStrategyInterface
{
    public function move(): string
    {
        return "Plankton drifts gently with the ocean currents.";
    }
}
