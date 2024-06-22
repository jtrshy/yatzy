<?php
namespace Yatzy;

class Dice {
    public function roll() {
        return rand(1, 6); // Generate a random number between 1 and 6.
    }
}