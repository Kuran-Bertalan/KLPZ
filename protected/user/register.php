<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
	$postData = [
		'uname' => $_POST['username'],
		'email' => $_POST['email'],
		'email1' => $_POST['email1'],
		'password' => $_POST['password'],
		'password1' => $_POST['password1']
	];

	if(empty($postData['uname']) || empty($postData['email']) || empty($postData['email1']) || empty($postData['password']) || empty($postData['password1'])) {
		echo "Hiányzó adat(ok)!";
	} else if($postData['email'] != $postData['email1']) {
		echo "Az email címek nem egyeznek!";
	} else if(!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
		echo "Hibás email formátum!";
	} else if ($postData['password'] != $postData['password1']) {
		echo "A jelszavak nem egyeznek!";
	} else if(strlen($postData['password']) < 6) {
		echo "A jelszó túl rövid! Legalább 6 karakter hosszúnak kell lennie!";
	} else if(!UserRegister($postData['email'], $postData['password'], $postData['uname'])) {
		echo "Sikertelen regisztráció!";
	}

	$postData['password'] = $postData['password1'] = "";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Oprendszer 2 - Beadandó</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- Saját CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_DIR.'css/register.css'; ?>">
</head>
<body>
<h1>REGISTER</h1>
<div class="register-page">
  <div class="form">
    <form class="login-form" method="post">
	  <label for="registerUserName">Username</label>
      <input type="text" class="form-control" id="registerUserName" name="username" value="<?=isset($postData) ? $postData['uname'] : "";?>">
      <label for="registerEmail">Email</label>
	  <input type="email" class="form-control" id="registerEmail" name="email" value="<?=isset($postData) ? $postData['email'] : "";?>">
      <label for="registerEmail1">Confirm Email</label>
	  <input type="email" class="form-control" id="registerEmail1" name="email1" value="<?=isset($postData) ? $postData['email1'] : "";?>">
	  <label for="registerPassword">Password</label>
	  <input type="password" class="form-control" id="registerPassword" name="password" value="">
	  <label for="registerPassword1">Confirm Password</label>
	  <input type="password" class="form-control" id="registerPassword1" name="password1" value="">
      <button type="submit" class="btn btn-primary" name="register">Register</button>
      <p class="message">Already registered? <a href="index.php?P=login">Sign In</a></p>
    </form>
  </div>
</div>
</body>
</html>
