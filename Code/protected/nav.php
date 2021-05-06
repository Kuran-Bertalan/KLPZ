<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8"/>
	<title>Blackjack</title>
	<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_DIR.'css/style.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_DIR.'css/dropbtn.css'; ?>">

</head>
<hr>

<button class="menubutton" onclick="window.location.href='index.php?P=home';"><span>Főoldal</span></button>
<button class="menubutton" onclick="window.location.href='index.php?P=impressum';"><span>Impresszum</span></button>
<div class="dropdown">
	  <span><button class="dropbtn">Szabályok</button><span>
	  <div class="dropdown-content">
	  <a href="index.php?P=blackJackRules">BlackJack</a>
	  <a href="index.php?P=pokerRules">Poker</a>
	  <a href="index.php?P=slotMachineRules">Slot-Machine</a>
	  </div>
	</div>
<?php if(!IsUserLoggedIn()) : ?>
	<button class="menubutton" onclick="window.location.href='index.php?P=login';"><span>Bejelentkezés</span></button>
	<button class="menubutton" onclick="window.location.href='index.php?P=register';"><span>Regisztráció</span></button>
<?php else : ?>
<div class="dropdown">
	  <span><button class="dropbtn">Játékok</button><span>
	  <div class="dropdown-content">
	  <a href="index.php?P=blackJackGame">BlackJack</a>
	  <a href="index.php?P=pokerGame">Poker</a>
	  <a href="index.php?P=slotMachineGame">Slot-Machine</a>
	  </div>
	</div>
	<form class="name">
	<img class="User" onclick="window.location.href='index.php?P=profile';" src="public/images/user.png" >
	<strong><?php echo "Üdvözöljük " . $_SESSION['uname']; ?></strong>
	</form>
	<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] >= 1) : ?>
		<span> &nbsp; || &nbsp; </span>
		<a href="index.php?P=users">User list</a>		
		<span> &nbsp; | &nbsp; </span>
	
	<?php endif; ?>
	<button class="menubutton" onclick="window.location.href='index.php?P=logout';"><span>Kilépés</span></button>
<?php endif; ?>

<hr>
</html>
