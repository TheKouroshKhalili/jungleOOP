<?php

namespace Jungle\Movements;

use Jungle\Interfaces\MovementStrategyInterface;

final class FlyingMovement implements MovementStrategyInterface
{
    public function move(): string
    {
        return 'Flying through the sky ☁️';
    }
}