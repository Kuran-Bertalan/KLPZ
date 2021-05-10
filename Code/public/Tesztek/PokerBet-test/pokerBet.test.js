const bet = require("./pokerBet");

test("Poker bet test with 50$ bet", () => {
  expect(bet).toBe(50);
});