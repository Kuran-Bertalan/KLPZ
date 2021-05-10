const update = require("./blackJackUpdateBalance");

test("BlackJack balance update to 1050$", () => {
    expect(update).toBe(1050);
});