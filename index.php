<?php

require_once './vendor/autoload.php';

use Jungle\Animals\{Bee, Eagle, Elephant, GoldFish, Lion, Snake, Sparrow};
use Jungle\Core\Bioms\Forest;

$forest = new Forest([
    new Lion('Simba', 5),
    new Sparrow('Jack', 2),
    new Eagle('Eddy', 3),
    new Snake('Sly', 4),
    new Elephant('Dumbo', 10),
    new Bee('Hach', 1),
    new GoldFish('Nemo', 1),

]);

$forest->hearAllSounds();

$forest->feedAll();

$forest->watchAnimalMovement();