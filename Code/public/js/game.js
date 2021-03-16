
const CARD_WIDTH = 100;

class Card {
    constructor(suit, value) {
        this.suit     = suit;
        this.value    = value;
        this.revealed = false;
    }
}

Card.SUITS = ['SPADES', 'HEARTS', 'DIAMONDS', 'CLUBS'];
Card.VALUES = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];

class Deck {
    constructor() {
        this.cards = [];
        this.fillDeck();
    }

    fillDeck() {
        this.cards = [];
        for (let i = 0; i < Card.SUITS.length; i++) {
            for (let j = 0; j < Card.VALUES.length; j++) {
                let card = new Card(Card.SUITS[i], Card.VALUES[j]);
                this.cards.push(card);
            }
        }
    }
 shuffle() {
        let currentIndex = this.cards.length;
        let temp, randomIndex;

        while (currentIndex != 0) {
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            temp = this.cards[currentIndex];
            this.cards[currentIndex] = this.cards[randomIndex];
            this.cards[randomIndex] = temp;
        }
    }
	drawOne() {
        if (this.cards.length == 0) {
            this.fillDeck();
            this.shuffle();
        }
        return this.cards.pop();
    }
    display(displayTag) {
        displayTag.innerHTML = '';
        for (let i = 0; i < this.cards.length; ++i) {
            let el = document.createElement('img');
            el.setAttribute('src', 'public/images/hátlap.png');
            el.setAttribute('width', `${CARD_WIDTH}px`);
            if (i == 0) {
                el.style.position = 'relative';
            }
            else {
                el.style.position = 'absolute';
            }
            el.style.top =  -i / 3;
            el.style.left = -i / 3;
            displayTag.appendChild(el);
        }
    }
}

    updateBalance() {
        let _data = {
            username: username,
            password: password,
            balance: this.balance
        }

        fetch('user/server.php', {
            method: 'POST',
            body: JSON.stringify(_data),
            headers: {'Content-Type': 'application/json; charset=UTF-8'}
        })
        .then(response => response.json())
        .then(json => {
            if (json.status == 'ok') {
                this.isBalanceSyncronized = true;
            }
            else {
                console.log('REST API hiba');
            }
        })
        .catch(err => console.log(err));
    }
}
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
	window.onload = function () {
    // display
    let deckDisplay       = document.getElementById('deck');
    let playerHandDisplay = document.getElementById('playerHand');
    let dealerHandDisplay = document.getElementById('dealerHand');
    let msgDisplay        = document.getElementById('message')
    let moneyDisplay      = document.getElementById('money');

    // gombok
    let hitButton     = document.getElementById('hit');
    let standButton   = document.getElementById('stand');
    let newGameButton = document.getElementById('newGame');
    //let menuButton    = document.getElementById('menubutton');

    let betSelect     = document.getElementById('bet');

    let game = new Game(
        msgDisplay,
        moneyDisplay,
        deckDisplay,
        playerHandDisplay,
        dealerHandDisplay,
        hitButton,
        standButton,
        newGameButton,
        //menuButton,
        betSelect
    );
    game.showMessage('Új játék indításához kattints az "Új kör" gombra.');
    game.display();
}

	dealersTurn() {
        if (!this.isRunning) {
            return;
        }
        if (this.dealer.handValue() < 17) {
            this.dealer.cards.push(this.deck.drawOne());
        }
    }
	
	hit() {
        if (!this.isRunning) {
            return;
        }
        this.player.addCard(this.deck.drawOne());

        let value = this.player.handValue();
        if (value > 21) {
            this.endGame(false, `Túllépted a 21-et! Vesztettél!<br/> Lapjaid értéke: ${value}`);
        }

        this.display();
    }

    stand() {
        if (!this.isRunning) {
            return;
        }

        this.dealersTurn();

        let pValue = this.player.handValue();
        let dValue = this.dealer.handValue();
        if (dValue > 21) {
            this.endGame(true, `Nyertél! Az osztó túllépte a 21-et!`);
        }
        else if (pValue > dValue) {
            this.endGame(true, `Nyertél! Lapjaid értéke: ${pValue}.<br/> Az osztóé: ${dValue}`);
        }
        else {
            this.endGame(false, `Vesztettél! Lapjaid értéke: ${pValue}.  Az osztóé: ${dValue}`);
        }
        this.display();
    }

endGame(win, message) {
        this.showMessage(message);
        this.isRunning = false;
        if (win) {
            this.balance += parseInt(this.betSelect.value);
			this.dealer.displayHand(this.dealerHandDisplay);
        }
        else {
            this.balance -= parseInt(this.betSelect.value);
			this.dealer.displayHand(this.dealerHandDisplay);
        }
        if (this.deck.length < 10) {
            this.showMessage('Keverés...');
            this.deck.fillDeck();
        }
        this.isBalanceSyncronized = false;
        this.updateBalance();
        this.display();
    }