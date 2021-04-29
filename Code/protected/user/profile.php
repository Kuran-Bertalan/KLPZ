

<?php 
require_once USER_MANAGER;
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['newpassword'])) {
      $postDatapw = [
        'id' => $_SESSION['uid'],
        'newpassword' => $_POST['newpassword1'],
        'newpassword1' => $_POST['newpassword']
      ];
      if(empty($postDatapw['newpassword']) || empty($postDatapw['newpassword1'])) {
        echo "Hiányzó adat(ok)!";
      } else if(strlen($postDatapw['newpassword']) < 6) {
        echo "A jelszó túl rövid! Legalább 6 karakter hosszúnak kell lennie!";
      } else if(1 === preg_match('~[ ]~', $postDatapw['newpassword'])) {
        echo "A jelszó nem tartalmazhat szóközt!";
      } else if ($postDatapw['newpassword'] != $postDatapw['newpassword1']) {
        echo "A jelszavak nem egyeznek!";       
      }else {
        if(!changePassword($postDatapw['id'], $postDatapw['newpassword'])) {
          echo "Hiba a jelszó módosításnál!";
        }
      }
    }
	

	$postData['password'] = $postData['password1'] = "";
?>

<div class="changepw">
  <form method="POST" class="changepwform">
    <input type="password" name="newpassword" placeholder="Adja meg az új jelszavát" id="newpassword"><i id="npw" class="fa fa-eye" aria-hidden="true""></i>
    <input type="password" name="newpassword1" placeholder="Erősítse meg a jelszavát" id="newpassword1"><i id="npw2" class="fa fa-eye" aria-hidden="true""></i>
    <input type="submit" name="npwsubmit" value="Jelszó módosítás">
  </form>
</div>

<div>
  <table>
    <tr>
      <td>Felhasználónév: </td>
      <td><?=$_SESSION['uname']; ?></td>
    </tr>
    <tr>
      <td>Email: </td>
      <td><?=$_SESSION['email']; ?></td>
    </tr>
    <tr>
      <td>Jogosultság: </td>
      <td><?=$_SESSION['permission'] == 3 ? 'Admin' : ($_SESSION['permission'] == 2 ? 'Prémium felhasználó' : 'Felhasználó'); ?></td>
    </tr>
    <?php if($_SESSION['permission'] < 3) : ?>
      <tr>
        <td>Egyenleg: </td>
        <td><?=$_SESSION['balance'] ?></td>
      </tr>
    <?php endif; ?>
  </table>
</div>