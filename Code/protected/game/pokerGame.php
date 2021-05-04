 <!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8"/>
	<title>Poker</title>
	<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_DIR.'css/poker.css'; ?>">
</head>
<body>
	 <div class="poker-game-container" id="poker-game">
     <header class="poker-header">Poker</header>
	 <br />
    <div class="table">
      <!-- Ellenfél-->
      <div class="computer table-row">
        <div class="computer-info box">
          <div class="img_player"><img class="img-users" src="public/images/computer.png" alt=""/></div>
          <div class="name">Gép</div>
        </div>
        <div  class="computer-hand">
          <div class="card computer-card"></div>
          <div class="card computer-card"></div>
        </div>
        <div class="message">
          <p id="computer-hand"></p>
        </div>
      </div>

      <!-- Középső kártyák-->
      <div id ="shared-cards" class="shared-cards table-row">
        <div class="card shared-card"></div>
        <div class="card shared-card"></div>
        <div class="card shared-card"></div>
        <div class="card shared-card"></div>
        <div class="card shared-card"></div>
      </div>

      <!-- Játékos -->
      <div class="player table-row">

        <div class="player-info box">
          <div class="img_player"> <img class="img-users" src="public/images/user.png" alt=""/></div>
          <div class="name"><strong><?php echo "" . $_SESSION['uname']; ?></strong></div>
          <div id="player-money" class="money">$100</div>
        </div>
        <div class="player-hand">
          <div class="card player-card"></div>
          <div class="card player-card"></div>
        </div>
        <div class="message">
          <p id="player-message">Játék inditásra vár</p>
          <p id="player-hand"></p>
          <p></p>
        </div>
      </div>

      <!-- Gombok -->
      <div class="controls">
        <div id="in-game-controls" class="table-row">
          <button id="bet" onclick="bet(5)">Tét 5$</button>
          <!-- <button onclick="showDealer(20)">See Dealers Hand ($20)</button> -->
          <button onclick="bet(20);">Tét 20$</button>
          <button onclick="bet(-1);">All IN</button>

       </div>
        <div id="pregame-controls" class= "table-row">
          <button onclick="deal();">Játék</button>
          <button disabled>---</button>
          <button onclick="refill()">Újratöltés</button>
          <a href="index.php"><button>Kilépés</button></a>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br>
	<script src="<?php echo PUBLIC_DIR.'js/poker.js'; ?>"></script>
</body>
</html>
 
 
 
 
 
 
 
 
 
 


