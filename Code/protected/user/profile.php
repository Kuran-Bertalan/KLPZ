<?php
  $kulonbseg = $_SESSION['withdraw'] - $_SESSION['deposit'];
  if($kulonbseg < 0)
  {
    $kul = "piros";
  }
  else
  {
    $kul = "zold";
  }
?>
<div class="listcc">
  <?php require_once PROTECTED_DIR."creditcard/listcard.php" ?>
</div>
<hr width="100%">
<div class="addcc">
  <?php require_once PROTECTED_DIR."creditcard/addcard.php" ?>
</div>
<input type="submit" name="addcreditcard" value="Bankkártya hozzáadás" onclick="toggleaddcc()">
<hr width="100%">

<?php 
require_once USER_MANAGER;
  if(!CheckLogin()):
    header("Location: index.php?P=denied");
  else:
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['npwsubmit'])) {
      $postDatapw = [
        'id' => $_SESSION['uid'],
        'npassword' => $_POST['npassword'],
        'npassword1' => $_POST['npassword1']
      ];
      if(empty($postDatapw['npassword']) || empty($postDatapw['npassword1'])) {
        echo "Hiányzó adat(ok)!";
      } else if(strlen($postDatapw['npassword']) < 6) {
        echo "A jelszó túl rövid! Legalább 6 karakter hosszúnak kell lennie!";
      } else if(1 === preg_match('~[ ]~', $postDatapw['npassword'])) {
        echo "A jelszó nem tartalmazhat szóközt!";
      } else if ($postDatapw['npassword'] != $postDatapw['npassword1']) {
        echo "A jelszavak nem egyeznek!";       
      }else {
        if(!changePassword($postDatapw['id'], $postDatapw['npassword'])) {
          echo "Hiba a jelszó módosításnál!";
        }
      }
    }
?>

<div class="changepw">
  <form method="POST" class="changepwform">
    <input type="password" name="npassword" placeholder="Adja meg az új jelszavát" id="npassword"><i id="npw" class="fa fa-eye" aria-hidden="true" onclick="shownpw()"></i>
    <input type="password" name="npassword1" placeholder="Erősítse meg a jelszavát" id="npassword2"><i id="npw2" class="fa fa-eye" aria-hidden="true" onclick="shownpw2()"></i>
    <input type="submit" name="npwsubmit" value="Jelszó módosítás">
  </form>
</div>
<input type="submit" name="jelszomodositas" value="Jelszó változtatás" onclick="togglePW()">

<div>
  <table>
    <tr>
      <td>Felhasználónév: </td>
      <td><?=$_SESSION['username']; ?></td>
    </tr>
    <tr>
      <td>Életkor: </td>
      <td><?=$_SESSION['age']; ?></td>
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
        <td>Befizetett: </td>
        <td><?=$_SESSION['deposit'] ?></td>
      </tr>
      <tr>
        <td>Kifizetett: </td>
        <td><?=$_SESSION['withdraw'] ?></td>
      </tr>
      <tr>
        <td>Különbség: </td>
        <td><div class="<?=$kul?>"><?=$kulonbseg ?></div></td>
      </tr>
    <?php endif; ?>
  </table>
</div>
<?php endif; ?>