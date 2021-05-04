<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8"/>
	<title>SlotMachine</title>
	<style>
body {
	font-family:verdana,arial;
	padding:20px;
}
.bd {
	text-align:center;
}
.container {
	margin:0 auto;
	width:290px;
}
.slot-wrapper {
	 border: 1px solid #000000;
}
.slot {
	background:url("public/images/reel_normal.png") repeat-y;
	width:86px;
	height:70px;
	float:left;
	border:1px solid #000;
	background-position:0 4px;
}
.motion {
	background:url("public/images/reel_blur.png") repeat-y;
}
button {
	display:block;
	width:138px;
	height:33px;
	margin:20px 60px;
	font-size:16px;
	cursor:pointer;
}
#result {
	margin:20px 0;
	font-size:18px;
	font-weight:bold;
	height:22px;
}
.credits {
	font-size:15px;
	margin-top:20px;
}
.credits .browsers {
	font-style:italic;
	font-size:14px;
	color:#777;
	margin-top:4px;
}
.clear {
	clear:both;
}
</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script src="<?php echo PUBLIC_DIR.'js/jquery.spritely.js'; ?>"></script>
	<script src="<?php echo PUBLIC_DIR.'js/jquery.backgroundPosition.js'; ?>"></script>
	<script src="<?php echo PUBLIC_DIR.'js/slot.js'; ?>"></script>
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
		<div><button id="control" name="control">Pörgesd</button></div>
	</div>
</div>
</body>
</html>
