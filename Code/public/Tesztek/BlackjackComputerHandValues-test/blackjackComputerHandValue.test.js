const handValue = require("./blackJackComputerHandValue");

test("Cards in hand must be exatly 2 card test.", () => {
  expect(handValue.cards.length).toBe(2);
});
