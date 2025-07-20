<?php

require_once './vendor/autoload.php';

use Jungle\Animals\{
    Bee, Eagle, Elephant, Frog, GoldFish, Lion, Snake, Sparrow, Spider,
    Octopus, Shark, Plankton, Camel, Scorpion, Jerboa
};
use Jungle\Core\Bioms\Forest;
use Jungle\Core\Bioms\Desert;
use Jungle\Core\Bioms\Ocean;


$forest = new Forest([
    new Lion('Simba', 5),
    new Sparrow('Jack', 2),
    new Elephant('Dumbo', 10),
    new Bee('Hach', 1),
    new Frog('Freddy', 2),
    new Eagle('Sky', 4),
    new Spider('Webby', 1)
]);

$desert = new Desert([
    new Snake('Sandy', 3),
    new Camel('Cammie', 7),
    new Scorpion('Sting', 2),
    new Jerboa('Jump', 1)
]);

$ocean = new Ocean([
    new GoldFish('Goldie', 1),
    new Octopus('Inky', 2),
    new Shark('Jaws', 6),
    new Plankton('Tiny', 1)
]);




$forest->hearAllSounds();
$forest->feedAll();
$forest->watchAnimalMovement();

$desert->hearAllSounds();
$desert->feedAll();
$desert->watchAnimalMovement();

$ocean->hearAllSounds();
$ocean->feedAll();
$ocean->watchAnimalMovement();