const drawOne = require("./drawOne-deck");

test("drawOne deck test", () => {
  expect(drawOne.cards.length).not.toBe(52);
});
