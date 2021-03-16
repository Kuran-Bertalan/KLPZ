<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
  $postData = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
  ];

  if(empty($postData['email']) || empty($postData['password'])) {
    echo "Hiányzó adat(ok)!";
  } else if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
    echo "Hibás email formátum!";
  } else if(!UserLogin($postData['email'], $postData['password'])) {
    echo "Hibás email cím vagy jelszó!";
  }

  $postData['password'] = "";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Oprendszer2 - Beadandó</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- Saját CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_DIR.'css/login.css'; ?>">
</head>
<body>
<h1>LOGIN</h1>
  <div class="login-page">
    <div class="form">
    <form class="login-form" method="post">
      <label for="loginEmail">Email address</label>
      <input type="email" class="form-control" id="loginEmail" aria-describedby="emailHelp" name="email" value="<?= isset($postData) ? $postData['email'] : '';?>">
	  <label for="loginPassword">Password</label>
      <input type="password" class="form-control" id="loginPassword" name="password" value="">
      <button type="submit" class="btn btn-primary" name="login">Login</button>
      <p class="message">Not registered? <a href="index.php?P=register">Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>