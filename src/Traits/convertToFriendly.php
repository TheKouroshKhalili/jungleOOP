<?php

namespace Jungle\Traits;

use Jungle\Enums\Biom;
use Jungle\Interfaces\DesertFriendly;
use Jungle\Interfaces\ForestFriendly;
use Jungle\Interfaces\oceanFriendly;

trait convertToFriendly
{
    public function convert(Biom $biom) {
        if ($biom == Biom::FOREST){
            return ForestFriendly::class;
        }
        elseif($biom == Biom::DESERT) {
            return DesertFriendly::class;
        }
        elseif($biom == Biom::OCEAN) {
            return oceanFriendly::class;
        }
    }
}