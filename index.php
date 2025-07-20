<?php

require_once './vendor/autoload.php';

use Jungle\Animals\{Eagle, Lion, Sparrow , Snake , Elephant ,Frog, Bee , GoldFish};
use Jungle\Core\Forest;

$forest = new Forest([
    new Lion('Simba', 5),
    new Sparrow('Jack', 2),
    new Eagle('Eddy', 3),
    new Snake('Sly', 4),
    new Elephant('Dumbo', 10),
    new Bee('Hach', 1),
    new GoldFish('Nemo', 1),
    new Frog('Freddy', 2)
]);

$forest->hearAllSounds();

$forest->feedAll();

$forest->watchAnimalMovement();