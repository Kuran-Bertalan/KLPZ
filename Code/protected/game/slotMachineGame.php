<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8"/>
	<title>SlotMachine</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
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
.slotbutton {
  top: 0;
  left: 0;
  transition: all .15s linear 0s;
  position: relative;
  display: inline-block;
  padding: 15px 25px;
  background-color: #FFE800;
  
  text-transform: uppercase;
  color: #404040;
  font-family: arial;
  letter-spacing: 1px;
  
  box-shadow: -6px 6px 0 #404040;
  text-decoration: none;
}

.slotbutton:hover {background-color: #fa853c}

.slotbutton:active {
  background-color: #fa853c;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
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
	<div class="bd">
		<h1></h1>
		<h1></h1>
		<div><button id="control" class="slotbutton">Pörgesd</button></div>
		<br>
		<label for="bet">Tét:</label>
		<input id="bet" name="bet" type="number" value="10">
	</div>
	</div>
</div>
</body>
</html>
