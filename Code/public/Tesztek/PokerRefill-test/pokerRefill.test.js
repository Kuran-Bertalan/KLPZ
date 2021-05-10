const refill = require("./pokerRefill");

test("Poker refill test to money be 111$", () => {
  expect(refill).toBe(111);
});