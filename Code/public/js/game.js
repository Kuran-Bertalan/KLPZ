class Game {
    constructor(
        msgDisplay, moneyDisplay,
        deckDisplay, playerHandDisplay, dealerHandDisplay,
        hitButton, standButton, newGameButton, //menuButton,
        betSelect) {
        // adattagok
        this.deck   = new Deck();
        this.player = new BlackJackPlayer();
        this.dealer = new BlackJackPlayer();
        this.balance = 1000;
        this.deck.shuffle();
        this.isRunning = false;
        this.isBalanceSyncronized = true;
    }
