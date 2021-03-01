# Funkcionális specifikáció

## 1. Bevezetés
Alapvetően a szerencsejáték a társadalom egy széles körét érinti és érdekli. 
Viszont nem sok ember szeretne rá pénzt és befektetést vagy akár vagyontárgyat áldozni mivel nincs abban a társadalmi helyzetben, 
hogy megengedhetné magának, vagy csak egyszerűen nem szándékozik rá tekinteni többként, mint szórakozás vagy nevéből adódóan játékként.
Ezért gondoltuk - én és munkatársaim -, hogy nem lenne rossz ötlet elkészíteni egy olyan internetes oldalt, 
ahol az egyén képes szerencsejátékokkal játszani anélkül, 
hogy bármilyen fizetőeszközt vagy vagyont bele kelljen áldozni a szenvedélyükbe.
A játékokhoz tartozni fog egy szabályrendszeroldal is ahonnan az is meg tudja tanulni az aktuális játék alapjait aki soha életében nem játszott még velük. 
A játékokban álltalában (a szerencsén kívül természetesen) a játékos legnagyobb képessége a valószínűségszámítás lesz, 
így amelyik játékosnak jobb matematikai tudása van, nagyobb eséllyel nyer.
A játékos a gép ellen mérettetheti meg a játékokban szerzett tapasztalatait, és szerezhet még több gyakorlatot bennük.
A játékot webes felületen fogjuk elkészíteni, regisztráció és belépés után játszhatunk is a szerencsejátékokkal.

## 2. Jelenlegi helyzet
A megrendelő egy egyszerű és könnyen kezelhető alkalmazást szeretne, 
ahol a szerencsejátékok kedvelői képesek élvezni azokat anélkül, hogy az idejüknél többet kellene rá költeni. 
Az említett szoftvert a megrendelő webes felületen szeretné használni, regisztrációval és azután belépéssel.
Az ügyfél ragaszkodott egy egyszerű és könnyen megérthető de mindent átfogó szabályzati oldalhoz azért, 
hogy aki nem ért a játékokhoz is, megtudja tanulni az alapokat. 
Az ügyfél ragaszkodott még ahhoz is, hogy az oldal szabványos legyen, 
és ez mellett még egy modern dizájnt és külsőt is kapjon. Jelenleg a program létrehozásához, 
elkészítéséhez szükséges adatokat, tevékenységeket discord segítségével, minden héten, hetente többször is egyeztetjük.

|**Szerencsejátékok**|
|--------|
|Blackjack|
|Poker|
|Slot Machine|

## 3. Vágyálom rendszer
A fejlesztőcsapat célja egy valósággal megegyező szerencsejáték oldal létrehozása, 
melyben három fajta szerencsejátékot tudunk játszani. 

Szerencsejátékok:
-Blackjack: A játékmenet során a játékosnál lévő lapok összértéke több legyen az osztó lapjainak összértékénél, anélkül, hogy meghaladná a 21-et.
-Póker: A játékosok a  nyílt vagy zárt kártyáikból a legjobbat kihozva elvigyék az asztal közepén lévő kasszát.
-Slot Machine: A játékos a kívánt téttel a szerencsére bízva, a "kar" segítségével megpörgeti a nyerőgépet, és az ez által kiadja a eredményt.

Az "asztaloknál" egyértelműen látható, hogy mekkora a minimális és a maximális tét, 
mely a játékos által felrakható. 
A könnyű regisztráció után egy letisztult bejelentkező panel segítségével a felhasználó könnyű szerrel be tud jelentkezi a saját felhasználói fiókjába. 
A játékok kezdetén a játékosok beteszik a tétjüket az úgynevezett fogadó zónájukba, és aki nyer, az nyeri az összes tétet. 
A játékosoknak lehetőségük van követni a zsetonjaik számának gyarapodását illetve annak elvesztését, 
ezek mellet egy toplista is található lesz ahol a játékosok láthatják, hogy melyik játékosnak van a legtöbb pontja.

## 4. Feltételek

Az alkalmazásunk létrehozásának alapfeltétele, a JavaScript, 
vagy valamilyen más webprogramozási nyelv. 
SQL adatbázist használtunk, ahol elmentjük a regisztrált adatokat és a zsetonok számát, amikből ranglistát képezünk. 
HTML-ben írjuk meg az oldal leíró részét, és ezzel szabványosítjuk azt. 
CSS-el adunk az oldalunknak külsőt, amivel igényesen, dizájnosan és modernek fog kinézni.