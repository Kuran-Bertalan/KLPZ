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
<?php if(!IsUserLoggedIn()) : ?>
	<button class="menubutton" onclick="window.location.href='index.php?P=login';"><span>Bejelentkezés</span></button>
	<button class="menubutton" onclick="window.location.href='index.php?P=register';"><span>Regisztráció</span></button>
<?php else : ?>
	<button class="menubutton" onclick="window.location.href='index.php?P=blackJackGame';"><span>BlackJack</span></button>
	<button class="menubutton" onclick="window.location.href='index.php?P=slotMachineGame';"><span>Nyerőgép</span></button>
	<button class="menubutton" onclick="window.location.href='index.php?P=pokerGame';"><span>Poker</span></button>
	<button class="menubutton" onclick="window.location.href='index.php?P=logout';"><span>Kijelentkezés</span></button>
	<form class="name">
	<a href="index.php?P=profile"><img class="User" src="public/images/user.png" ></a>
	<strong><?php echo "Üdvözöljük " . $_SESSION['uname']; ?></strong>
	</form>
	<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] >= 1) : ?>
		<span> &nbsp; || &nbsp; </span>
		<a href="index.php?P=users">User list</a>		
		<span> &nbsp; | &nbsp; </span>
	
	<?php endif; ?>
	<button class="menubutton" onclick="window.location.href='index.php?P=impressum';"><span>Impresszum</span></button>
	<div class="dropdown">
	  <span><button class="dropbtn">Szabályok</button><span>
	  <div class="dropdown-content">
	  <a href="index.php?P=blackJackRules">BlackJack</a>
	  <a href="#">Poker</a>
	  <a href="#">SlotMachin</a>
	  </div>
	</div>
<?php endif; ?>

<hr>
</html>
