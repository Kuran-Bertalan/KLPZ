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

class BlackJackPlayer {
    constructor() {
        this.cards = [];
        this.deck = new Deck();
        this.cards.push(this.deck.drawOne());
        this.cards.push(this.deck.drawOne());   
    }
    addCard(card) {
        this.cards.push(card);
    }
    handValue() {
        let total = 0;
        for (let i = 0; i < this.cards.length; ++i) {
            let value = this.cards[i].value;
            if (value != 'A') {
                total += isNaN(value) ? 10 : parseInt(value);
            }
            else {
                total += (total + 11 <= 21) ? 11 : 1;
            }
        }
        return total;
    }
}

module.exports = new BlackJackPlayer();