<?php

namespace Jungle\Movements;

use Jungle\Interfaces\MovementStrategyInterface;

class InkJetMovement implements MovementStrategyInterface
{
    public function move(): string
    {
        return "Octopus jets away in a cloud of ink!";
    }
}
