<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8"/>
	<title>Blackjack</title>
	<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_DIR.'css/style.css'; ?>">
</head>
<hr>

<button class="menubutton" onclick="window.location.href='index.php';"><span>Főoldal</span></button>
<button class="menubutton" onclick="window.location.href='index.php?P=blackJackRules';"><span>Szabályok</span></button>
<?php if(!IsUserLoggedIn()) : ?>
	<button class="menubutton" onclick="window.location.href='index.php?P=login';"><span>Bejelentkezés</span></button>
	<button class="menubutton" onclick="window.location.href='index.php?P=register';"><span>Regisztráció</span></button>
<?php else : ?>
	<button class="menubutton" onclick="window.location.href='index.php?P=blackJackGame';"><span>BlackJack</span></button>
	<button class="menubutton" onclick="window.location.href='index.php?P=slotMachineGame';"><span>Nyerőgép</span></button>
	<button class="menubutton" onclick="window.location.href='index.php?P=pokerGame';"><span>Poker</span></button>
	<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] >= 1) : ?>
		<span> &nbsp; || &nbsp; </span>
		<a href="index.php?P=users">User list</a>		
		<span> &nbsp; | &nbsp; </span>
	<?php endif; ?>

	<button class="menubutton" onclick="window.location.href='index.php?P=logout';"><span>Kilépés</span></button>
<?php endif; ?>

<hr>
</html>
