const handValue = require("./blackjackHandValues");

test("Handvalues to be more than 15 test.", () => {
    expect(handValue.handValue()).toBeGreaterThanOrEqual(15);
  });