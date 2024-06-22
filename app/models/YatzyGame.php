<?php
namespace Yatzy;

class YatzyGame {
    private $currentRoll;
    private $diceValues;
    private $diceStates;

    public function __construct() {
        $this->currentRoll = 0;
        $this->diceValues = array(0, 5, null);
        $this->diceStates = array(false, false, false, false, false);
    }

    public function rollDice() {
        for ($i = 0; $i < 5; $i++) {
            if ($this->diceStates[$i] == false) {
                $this->diceValues[$i] = rand(1, 6);
            }
        }
        $this->currentRoll++;
    }

    public function setDiceState($diceIndex, $state) {
        $this->diceStates[$diceIndex] = $state;
    }

    public function getDiceState($diceIndex) {
        return $this->diceStates[$diceIndex];
    }

    public function getDiceValue($diceIndex) {
        return $this->diceValues[$diceIndex];
    }

    public function test() {
        return "Hello world";
    }
}