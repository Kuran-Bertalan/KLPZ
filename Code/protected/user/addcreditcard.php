<?php
	require_once USER_MANAGER;
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submitCard'])) {
			$postData = [
				'cardname' => $_POST['cardname'],
				'number' => $_POST['number'],
				'expdate' => $_POST['expdate'],
				'securitycode' => $_POST['securitycode'],
			];
			if(empty($postData['cardname']) || empty($postData['cardnumber']) || empty($postData['expdate']) || empty($postData['securitycode'])) {
				echo "Hiányzó adat(ok)!";
			} else if(strlen($postData['cardname']) < 6) {
				echo "A név túl rövid!";
			} else if(preg_match('/\s\s+/', $postData['cardname'])) {
				echo "A név nem tartalmazhat kettő vagy több szóközt egymás mellett!";
			} else if(1 === preg_match('~[0-9]~', $postData['cardname'])) {
				echo "A név nem tartalmazhat számot!";
			} else if(strlen($postData['cardnumber']) != 16) {
				echo "A kártyaszámnak 16 karakterből kell állnia!";
			} else if(!is_numeric(($postData['cardnumber']))) {
				echo "A kártyaszám csak szám lehet!";
			} else if(strlen($postData['expdate']) != 2) {
				echo "A lejárati év nem megfelelő!";
			} else if(!is_numeric(($postData['expdate']))) {
				echo "A lejárati év csak szám lehet!";
			} else if($postData['expdate'] > date("y") + 5 || $postData['expdate'] < date("y")) {
				echo "A lejárati év nem megfelelő!";
			} else if(strlen($postData['security']) != 3) {
				echo "A biztonsági kód csak három karakter lehet!";
			} else if(!is_numeric(($postData['security']))) {
				echo "A biztonsági kód csak szám lehet!";
			} else {
				require_once CARD_MANAGER;
				if(!AddCard($_SESSION['uid'], $postData['cardname'], $postData['cardnumber'], $postData['expirationM'].$postData['expirationY'], $postData['security'])) {
					echo "A bankkártya hozzáadása nem sikerült!";
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
			<input type="text" name="cardname" placeholder="Név" value="<?=isset($postData) ? $postData['cardname'] : "";?>">
			<input type="text" name="number" placeholder="Kártyaszám" maxlength="16" value="<?=isset($postData) ? $postData['number'] : "";?>">
			<input type="text" name="expdate" placeholder="Lejárati év" maxlength="4" value="<?=isset($postData) ? $postData['expdate'] : "";?>">
			<input type="text" name="securitycode" placeholder="Biztonsági kód" maxlength="3" value="<?=isset($postData) ? $postData['securitycode'] : "";?>">
			<button type="submit" name="submitCard">Kártya hozzáadása</button>
		</div>
	</form>
	</body>
</html>