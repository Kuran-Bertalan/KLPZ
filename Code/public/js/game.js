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
		// HTML tagek
        this.msgDisplay        = msgDisplay;
        this.moneyDisplay      = moneyDisplay;
        this.deckDisplay       = deckDisplay;
        this.playerHandDisplay = playerHandDisplay;
        this.dealerHandDisplay = dealerHandDisplay;
        this.hitButton         = hitButton;
        this.standButton       = standButton;
        this.newGameButton     = newGameButton;
        //this.menuButton        = menuButton;
        this.betSelect         = betSelect;
		
		// eventek
        this.hitButton.onclick     = (() => this.hit());
        this.standButton.onclick   = (() => this.stand());
        this.newGameButton.onclick = (() => this.newGame());
        //this.menuButton.onclick    = (() => this.menu());

        // display
        this.deckDisplay.style.position = 'relative';

        this.getStartingBalance();
        this.showMessage('Új játék indításához kattints az "Új kör" gombra.');
    }
