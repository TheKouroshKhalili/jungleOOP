<?php

require_once './vendor/autoload.php';

use Jungle\Animals\{
    Bee, Eagle, Elephant, Frog, GoldFish, Lion, Snake, Sparrow, Spider,
    Octopus, Shark, Plankton, Camel, Scorpion, Jerboa
};
use Jungle\Core\Bioms\Forest;
use Jungle\Core\Bioms\Desert;
use Jungle\Core\Bioms\Ocean;

use Jungle\Core\ZOO;
use Jungle\Enums\AnimalClass;

use Jungle\Enums\AnimalClass;


ZOO::visitTheZoo();