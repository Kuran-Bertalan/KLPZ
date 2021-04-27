<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8"/>
	<title>SlotMachine</title>
	<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_DIR.'css/slot.css'; ?>">
</head>

<body>
<div class="hd">
</div>
<div class="bd">
	<h1>Slot machine</h1>
	<div class="container">
		<div class="slot-wrapper">
			<div id="slot1" class="slot"></div>
			<div id="slot2" class="slot"></div>
			<div id="slot3" class="slot"></div>
			<div class="clear"></div>
		</div>
		<div id="result"></div>
		<div><button id="control">Pörgesd</button></div>
	</div>
</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script src="<?php echo PUBLIC_DIR.'js/slotMachineAnimation.js'; ?>"></script>
	<script src="<?php echo PUBLIC_DIR.'js/slotMachineBackgroundPosition.js'; ?>"></script>
	<script src="<?php echo PUBLIC_DIR.'js/slot.js'; ?>"></script>
</body>
</html>
