const deck = require("./deck");

test("Deck fill test", () => {
  expect(deck.cards.length).toBe(52);
});
