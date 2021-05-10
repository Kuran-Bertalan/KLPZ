<?php
	require_once USER_MANAGER;
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['creditcard'])) {
			$postData = [
				'number' => $_POST['number'],
				'expdate' => $_POST['expdate'],
				'securitycode' => $_POST['securitycode'],
				'cardname' => $_POST['cardname']
			];
			if(empty($postData['number']) || empty($postData['expdate']) || empty($postData['securitycode']||empty($postData['cardname']))) {
				echo "Hiányzó adat(ok)!";
			} else if(strlen($postData['cardname']) < 6) {
				echo "A név túl rövid!";
			} else if(preg_match('/\s\s+/', $postData['cardname'])) {
				echo "A név nem tartalmazhat kettő vagy több szóközt egymás mellett!";
			} else if(1 === preg_match('~[0-9]~', $postData['cardname'])) {
				echo "A név nem tartalmazhat számot!";
			} else if(strlen($postData['number']) != 16) {
				echo "A kártyaszámnak 16 karakterből kell állnia!";
			} else if(!is_numeric(($postData['number']))) {
				echo "A kártyaszám csak szám lehet!";
			} else if(strlen($postData['expdate']) != 4) {
				echo "A lejárati év nem megfelelő!";
			} else if(!is_numeric(($postData['expdate']))) {
				echo "A lejárati év csak szám lehet!";
			} else if(strlen($postData['securitycode']) != 3) {
				echo "A biztonsági kód csak három karakter lehet!";
			} else if(!is_numeric(($postData['securitycode']))) {
				echo "A biztonsági kód csak szám lehet!";
			} else{
				$_SESSION['creditcard']=1;
				require_once CARD_MANAGER;
				if(!AddCard($_SESSION['uid'], $postData['number'], $postData['expdate'], $postData['securitycode'], $postData['cardname'])) {
					$query = "UPDATE users SET creditcard = :creditcard WHERE id = :id";
					$params = [
						':id' => $_SESSION['uid'],
						':creditcard' => 1
					];
					require_once DATABASE_CONTROLLER;
					if(executeDML($query, $params))
					{
						header('Location: index.php?P=profile');
					}
				}
			}

		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_DIR.'css/style.css'; ?>">
</head>
<body>
	<form method="POST">
		<div class="addcard">
			<input type="text" name="number" placeholder="Kártyaszám" maxlength="16" value="<?=isset($postData) ? $postData['number'] : "";?>">
			<input type="text" name="expdate" placeholder="Lejárati dátum(HHÉÉ)" maxlength="4" value="<?=isset($postData) ? $postData['expdate'] : "";?>">
			<input type="text" name="securitycode" placeholder="Biztonsági kód" maxlength="3" value="<?=isset($postData) ? $postData['securitycode'] : "";?>">
			<input type="text" name="cardname" placeholder="Név" value="<?=isset($postData) ? $postData['cardname'] : "";?>">
			<button type="submit" name="creditcard">Kártya hozzáadása</button>
		</div>
	</form>
	</body>
</html>