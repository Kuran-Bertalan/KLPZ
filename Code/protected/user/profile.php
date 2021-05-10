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
      }else if(!changePassword($postDatapw['id'], $postDatapw['newpassword'])) {
        echo "Hiba a jelszó módosításnál!";
      }
	  else{echo 'Sikeres jelszóváltoztatás!';}
    }
	$postData['password'] = $postData['password1'] = "";

require_once USER_MANAGER;
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['balance'])) {
        $postDatapw = [
        'id' => $_SESSION['uid'],
        'balance' => $_POST['balance'],
        ];
        if($_POST['balance']==0) {
            echo "Rossz érték!";
        }
        else if(!addBalance($postDatapw['id'], $postDatapw['balance'])) {
            echo "Hiba az összeg feltöltésnél!";
          }
          else{echo 'Sikeres feltöltés!';}
        }

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kaszinó - Profil <?=$_SESSION['uname']; ?></title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- Saját CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_DIR.'css/profile.css'; ?>">
</head>
<body>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="public/images/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600"><?=$_SESSION['uname']; ?></h6>
                                <p><?=$_SESSION['permission'] == 1 ? 'Admin' : ($_SESSION['permission'] == 2 ? 'Bónusz Felhasználó' : 'Felhasználó'); ?></p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Információk</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"><?=$_SESSION['email']; ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Egyenleg</p>
                                        <h6 class="text-muted f-w-400"><?=$_SESSION['balance']; ?></h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Játékra vonatkozó</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Engedélyzett felhasználó</p>
                                        <h6 class="text-muted f-w-400"><?=$_SESSION['validated'] == 1 ? 'Igen' : ($_SESSION['validated'] == 2 ? 'Feldolgozás alatt' : 'Nem'); ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Bónusz kód</p>
                                        <h6 class="text-muted f-w-400"><?=$_SESSION['bonuscode'] > 0 ? 'Használt' : 'Nem használt'; ?></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Bankkártya</p>
                                        <h6 class="text-muted f-w-400"><?=$_SESSION['creditcard'] != 0 ? 'Használt' :'Nem használt'; ?></h6>
                                        <?php 
                                        if($_SESSION['creditcard']==0):?>
                                            <a href="index.php?P=creditcard">Bankkártya hozzáadása</button>
                                        <?php 
                                        else:?>
                                        <form method="POST" class="addBalance">
                                        <input id="balance" name="balance" type="number">
                                        <input type="submit" name="addBalance" value="Összeg hozzáadása"></input>
                                        </form>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="changepw">
			  <form method="POST" class="changepwform">
				<input type="password" name="newpassword" placeholder="Adja meg az új jelszavát" id="newpassword"><i id="npw" class="fa fa-eye" aria-hidden="true"></i>
				<input type="password" name="newpassword1" placeholder="Erősítse meg a jelszavát" id="newpassword1"><i id="npw2" class="fa fa-eye" aria-hidden="true"></i>
				<input type="submit" name="npwsubmit" value="Jelszó módosítás">
			  </form>
			</div>
        </div>
    </div>
</div>

</body>
</html>





