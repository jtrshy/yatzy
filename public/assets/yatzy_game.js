function YatzyGame() {
    this.rollCounter = 0;
    this.diceValues = [null, null, null, null, null];
    this.diceStates = [false, false, false, false, false];

    this.rollDice = function() {
        if (this.rollCounter < 3) {
            for (let i = 0; i < 5; i++) {
                if (!this.diceStates[i]) {
                    this.diceValues[i] = Math.floor(Math.random() * 6) + 1;
                }
            }
            this.rollCounter++;
        } else {
            console.log("You have rolled the dice 3 times. Next turn.");
        }
    }

    this.keepDice = function(diceNumber) {
        this.diceStates[diceNumber - 1] = true;
    }

    this.reRollDice = function(diceNumber) {
        this.diceStates[diceNumber - 1] = false;
    }
}