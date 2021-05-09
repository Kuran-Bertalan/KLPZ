<?php
	require_once USER_MANAGER;
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submitCard'])) {
			$postData = [
				'cardname' => $_POST['cardname'],
				'number' => $_POST['number'],
				'expdate' => $_POST['expdate'],
				'securitycode' => $_POST['securitycode'],
			];
?>
<form method="POST">
	<div class="addcard">
		<input type="text" name="cardname" placeholder="Név" value="<?=isset($postData) ? $postData['cardname'] : "";?>">
		<input type="text" name="number" placeholder="Kártyaszám" maxlength="16" value="<?=isset($postData) ? $postData['number'] : "";?>">
		<input type="text" name="expdate" placeholder="Lejárati év" maxlength="4" value="<?=isset($postData) ? $postData['expdate'] : "";?>">
		<input type="text" name="securitycode" placeholder="Biztonsági kód" maxlength="3" value="<?=isset($postData) ? $postData['securitycode'] : "";?>">
		<button type="submit" name="submitCard">Kártya hozzáadása</button>
	</div>
</form>
<?php endif; ?>