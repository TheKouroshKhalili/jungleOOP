<?php

namespace Jungle\Movements;

use Jungle\Interfaces\MovementStrategyInterface;

class OceanCageMovement implements MovementStrategyInterface
{
    public function move(): string
    {
        return "This ocean animal is in a zoo tank, longing for the open sea.";
    }
}
