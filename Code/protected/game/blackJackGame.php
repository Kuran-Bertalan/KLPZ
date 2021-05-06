<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8"/>
	<title>Blackjack</title>
	<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_DIR.'css/style.css'; ?>">
</head>
<body>
	<center style="height:100%">
		<h1>‎‎‏‏‎‎‏‏‎‎‎‏‎Blackjack</h1>
		<h3 id="message"></h3>
		<h4 id="money"></h4>
		<table style="width:50%">
			<tr>
				<td style="width:50%" id="deck">Pakli helye</td>
				<td style="width:50%" id="dealerHand">Osztó lapjainak a helye</td>
			</tr>
			<tr>
				<td style="width:50%" id="playerHand">Felhúzott lapjaink helye</td>
				<td style="width:50%">
					<button id="hit" name="hit">Lapot</button>
					<button id="stand" name="stand">Megállás</button>
					<button id="newGame" name="newGame">Új kör</button>
					<label for="bet">Tét:</label>
					<input id="bet" name="bet" type="number" value="10">
				</td>
			</tr>
		</table>
	</center>
	<script src="<?php echo PUBLIC_DIR.'js/game.js'; ?>"></script>
</body>
</html>