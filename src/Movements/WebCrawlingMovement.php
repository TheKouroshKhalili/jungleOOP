<?php

namespace Jungle\Movements;

use Jungle\Interfaces\MovementStrategyInterface;

class WebCrawlingMovement implements MovementStrategyInterface
{
    public function move(): string
    {
        return "crawls on its web";
    }
}
