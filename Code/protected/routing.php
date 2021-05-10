<?php 
if(!array_key_exists('P', $_GET) || empty($_GET['P']))
	$_GET['P'] = 'home';

switch ($_GET['P']) {
	case 'home': require_once PROTECTED_DIR.'normal/home.php'; break;
	
	case 'test': require_once PROTECTED_DIR.'normal/permission_test.php'; break;

	case 'blackJackGame': require_once PROTECTED_DIR.'game/blackJackGame.php'; break;
	
	case 'slotMachineGame': require_once PROTECTED_DIR.'game/slotMachineGame.php'; break;
	
	case 'pokerGame': require_once PROTECTED_DIR.'game/pokerGame.php'; break;
	
	case 'login': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/login.php' : header('Location: index.php'); break;

	case 'register': !IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/register.php' : header('Location: index.php'); break;

	case 'profile': IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/profile.php' : header('Location: index.php'); break;

	case 'creditcard': IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/addcreditcard.php' : header('Location: index.php'); break;

	case 'addBalance': IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/profile.php' : header('Location: index.php'); break;

	case 'logout': IsUserLoggedIn() ? UserLogout() : header('Location: index.php'); break;

	case 'users': IsUserLoggedIn() ? require_once PROTECTED_DIR.'user/user_list.php' : header('Location: index.php'); break;
	
	case 'blackJackRules':  require_once PROTECTED_DIR.'rules/blackJackRules.php'; break;
	
	case 'pokerRules':  require_once PROTECTED_DIR.'rules/pokerRules.php'; break;

	case 'slotMachineRules':  require_once PROTECTED_DIR.'rules/slotMachineRules.php'; break;

	case 'impressum':  require_once PROTECTED_DIR.'normal/impressum.php'; break;
	


	default: require_once PROTECTED_DIR.'normal/404.php'; break;
}

?>

