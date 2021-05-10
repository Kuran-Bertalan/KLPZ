const playerwin = require("./blackJackPlayerWin");

test("Player win situation", () => {
  expect(playerwin.message).toBe(true);
});
