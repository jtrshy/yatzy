<?php
require_once('_config.php');

use Yatzy\Dice;

$d = new Dice();

for ($i=1; $i<=5; $i++) {
  echo "ROLL {$i}: {$d->roll()}<br>";
}

echo "<br><br><br>";

use Yatzy\YatzyGame;

$game = new YatzyGame();

$game->rollDice();
echo "Roll test 1: ";
for ($i = 0; $i < 5; $i++) {
    echo $game->getDiceValue($i) . ", ";
}
echo "<br>";

$game->setDiceState(0, true);
echo "State test 1: ";
for ($i = 0; $i < 5; $i++) {
    echo $game->getDiceState($i) . ", ";
}
echo "<br>";

$game->setDiceState(2, true);
echo "State test 2: ";
for ($i = 0; $i < 5; $i++) {
    echo $game->getDiceState($i) . ", ";
}
echo "<br>";


$game->rollDice();
echo "Roll test 2: ";
for ($i = 0; $i < 5; $i++) {
    echo $game->getDiceValue($i) . ", ";
}
echo "<br>";