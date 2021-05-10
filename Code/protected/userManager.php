<?php 
function IsUserLoggedIn() {
	return $_SESSION != null && array_key_exists('uid', $_SESSION) && is_numeric(($_SESSION['uid']));
}

function UserLogout() {
	session_unset();
	session_destroy();
	header('Location: index.php');
}

function UserLogin($email, $password) {
	$query = "SELECT id, username, email, balance, bonuscode, permission, validated, creditcard FROM users WHERE email = :email AND password = :password";
	$params = [
		':email' => $email,
		':password' => sha1($password)
	]; 

	require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	if(!empty($record)) {
		$_SESSION['uid'] = $record['id'];
		$_SESSION['uname'] = $record['username'];
		$_SESSION['email'] = $record['email'];
		$_SESSION['balance'] = $record['balance'];
		$_SESSION['bonuscode'] = $record['bonuscode'];
		$_SESSION['permission'] = $record['permission'];
		$_SESSION['validated'] = $record['validated'];
		$_SESSION['creditcard'] = $record['creditcard'];
		
		header('Location: index.php');
	}
	return false;
}

function UserRegister($email, $password, $uname) {
	$query = "SELECT id FROM users email = :email";
	$params = [ ':email' => $email ];

	require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	if(empty($record)) {
		$query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
		$params = [
			':username' => $uname,
			':email' => $email,
			':password' => sha1($password)
		];

		if(executeDML($query, $params)) 
			header('Location: index.php?P=login');
	} 
	return false;
}

function GetBalanceById($id) {
	$query = "SELECT balance FROM users WHERE id = :id";
	$params = [':id' => $id];
	require_once DATABASE_CONTROLLER;
	return getField($query, $params);
}

function changePassword($id, $password) {
	$query = "UPDATE users SET password = :password WHERE id = :id";
	$params = [
		':id' => $id,
		':password' => sha1($password)
	];
	require_once DATABASE_CONTROLLER;
	if(executeDML($query, $params))
		{
			header('Location: index.php?P=profile');
		}
	return false;
}

function addBalance($id, $balance) {
	$balance+=$_SESSION['balance'];
	$query = "UPDATE users SET balance = :balance WHERE id = :id";
	$params = [
		':id' => $id,
		':balance' => $balance
	];
	require_once DATABASE_CONTROLLER;
	if(executeDML($query, $params))
		{
			header('Location: index.php?P=profile');
		}
	return false;
}
?>