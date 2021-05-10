playerMoney = 100;

function bet(bet) {
  if (playerMoney <= 0) {
    playerMoney = 100;
  }
  return (playerMoney -= bet);
}

module.exports = bet(50);