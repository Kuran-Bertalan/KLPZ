const shuffle = require("./shuffle-deck");

test("Deck fill test", () => {
  expect(shuffle.test).not.toBe(shuffle.test1);
});
