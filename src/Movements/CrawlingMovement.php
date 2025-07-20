<?php

namespace Jungle\Movements;

use Jungle\Interfaces\MovementStrategyInterface;

class CrawlingMovement implements MovementStrategyInterface
{

    public function move(): string
    {
        return 'crawling on the ground 🦎';
    }
}
