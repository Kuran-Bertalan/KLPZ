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
}
module.exports = new Deck();
