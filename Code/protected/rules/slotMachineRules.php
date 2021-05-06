<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8"/>
</head>
	<title>Játékszabályok</title>
	<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_DIR.'css/style.css'; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
	<h1> Slot-Machine (Nyerögép) játékszabály </h1>
        <h4> Előtörténete </h4>
		<p class="szoveg">
		A nyerőgépet a 19.század végén találták fel és kezdték alkalmazni a New yorki bárokban és kaszinókban. 
        A gépet egy 5 centessel lehetett üzemeltetni, és mivel ez egy elhanyogolható összeg így a szegényebb rétegnek is 
        megvolt a saját szerencsepróbája.
		</p>
        <h4> A mechanizmus </h4>
        <p class="szoveg">
        A Slot-Machine-nek azaz a Nyerőgépnek a legfőbb mechanizmusa a szerencse, 
        a gépek eltérhetnek 3 szimbólumos és 5 szimbólumos között, a mi oldalunkon egy 3 szimbólumos gép található.
        Élőben egy kart szükséges meghúzni, hogy a kijelző (régebben forgó mechanikus "orsók"-on) megpörögjön 
        és egy pár másodperces pörgés után megálljon és kimutassa a nyertes három (vagy akár kettő) szimbólumot vagy szerencsétlenebb esetben a különféle szimbólumokat.
        <br>
        Az oldalunkon, mivel, hogy egy virtuális Slot-Machine-t készítettünk így picit változtattunk ezen a megszokott ábrázolásan.
        Itt egy gombot kell megnyomni, hogy "meghúzzuk" a kart és pörögjen a kijelzőn lévő 3 ikon, ahhoz, hogy megállítsuk még egyszer megkell nyomni ugyanazt a gombot, ennek hatására pici késleltetéssel de meg áll a gép.
        Ekkor megkapjuk a 3 szimbólumot ami ha elég szerencsések vagyunk ugyanazokat fogja ábrázolni.
        </p>
        <h4> A játékunk menete </h4>
        <p class="szoveg">
        Amint a felhasználó az oldalra érkezik egy egyértelmű és letisztult kezelőfelület fog látni:
        <br>
        • A "PÖRGESD" gombbal "éleszük" fel a gépünket, ezzel érzékeli, hogy egy játékos szeretné kipróbálni a szerencséjét rajta.
        <br>
        • Ekkor a gomb felirata megváltozik "KEZDÉS"-re, ha ezt megnyomja a felhasználó a gép már el is kezd pörögni.
        <br>
        • Ekkor a gomb felirata megváltozik "KEZDÉS"-re, ha ezt megnyomja a felhasználó a gép már el is kezd pörögni.
        <br>
        • Amint a nyerőgépünk elkezd pörögni a gomb felirata átvált "LEÁLLÍTÁS"-ra, amit egy pár másodperc elteltével meg is nyomhatunk, 
        ha megnyomjuk szépen lassan leáll a gép és kimutatja a nyerő szimbólumokat.
        <br>
        • Ha a szerencse nekünk kedvezett megjelenik a "Nyertél" felirat, máskülönben a "Vesztettél". A gomb felirata átvált "ÚJRAINDÍTÁSRA", ezt megnyomva a játékos újra kezdheti a szórakozást.
        </p>
        <h4> Nyeremény, tétek </h4>
        <p class="szoveg">
        A játékunkon természetesen lehet nyerni is bizonyos összegeket. A felhasználó elég bátor feltehet bármennyi zsetont tétnek, 
        és kipróbálhatja a szerencséjét komolyabban is.
        A "Tét" mellett lévő kockába beírhatja azt az összeget amit óhajt felrakni. Ha ez kész már csak a szerencsére kell bízni a többit.
        Ha a játékos netán nyer, a gép a feltett összeg duplájával jutalmazza a szerencsés felhasználót.
        </p>
</body>
</html>