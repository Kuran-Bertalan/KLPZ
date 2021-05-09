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
}

module.exports = Deck.shuffle;
