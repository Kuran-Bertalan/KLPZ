class Card {
  constructor(suit, value) {
    this.suit = suit;
    this.value = value;
    this.revealed = false;
  }
}

Card.SUITS = ["SPADES", "HEARTS", "DIAMONDS", "CLUBS"];
Card.VALUES = [
  "A",
  "2",
  "3",
  "4",
  "5",
  "6",
  "7",
  "8",
  "9",
  "10",
  "J",
  "Q",
  "K",
];
class Deck {
  constructor() {
    this.cards = [];
    this.fillDeck();
    this.drawOne();
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
}
module.exports = new Deck();
