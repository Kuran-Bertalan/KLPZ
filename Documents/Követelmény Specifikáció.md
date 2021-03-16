# Követelmény Specifikáció

## Áttekintés
Mindannyiunk számára ismert szerencsejáték világát valósítottuk meg webes felületen. A jelen helyzet miatt, sokak számára ez a kikapcsolódás megszűnt. Hiszen nem minden faluban van ilyen lehetőség akár, távolság, vagy a kimaradás korlátozottsága miatt szűnt meg sokak számára ez a kikapcsolódás. Sokak számára a vagyoni helyzet kellemetlen helyzetbe viheti a játékosokat. Esetleg nem engedhették meg maguknak idáig. Itt ezzel nem kell bajlódniuk, hiszen itt nem valós tétekkel játszanak a felhasználók, hanem az álltalunk kitalált (játékpénzekkel). Regisztráció segítségével tárolni tudja az eddigi játszmán szerzett (bevételt) vagy esetleg a megmaradt értékeket. A felületen található lesz egyes játékok rövid bemutatása, játékszabályai. Hiszen az újonnan érkezett felhasználok egy része, nem feltétlen foglya ismerni ezeket a játékokat, de itt lesz lehetősége itt megtanulni, majd elsajátítani azokat. Ezekhez a játékokhoz nem sok minden kell a szerencsén kívül, hiszen ez benne is van a nevében, hogy szerencsejáték. Mint minden játékot kiismerve itt is lehet fejlődni. Itt már a cél a gépek legyőzése.
## Jelenlegi helyzet

Szeretnénk a felhasználók számára egy egyszerűen használható, könnyen hozzáférhető felületet biztosítani a szórakozásra. Akik regisztráltak az oldalra azok számára biztosított a hozzáférést a játékokhoz. Mindenki saját maga által egyénileg karakterből összeállított azonosítóval, és a saját maga által választott jelszó segítségével juthat be a rendszerbe. A szerencsejátékok színvonalát szeretnénk emelni és támogatni a XXI. század trendjeinek és technológiáinak segítségével.
## Jelenlegi üzleti folyamatok
A jelenleg érvényben lévő veszélyhelyzeti kormányzati intézkedések miatt a 18 évnél idősebb férfiak, nők nem léphetnek be az intézmény területére, így az általunk biztosított lehetőség lenne számukra a legkedvezőbb csatorna, amin keresztül szórakoztatás tudunk nyújtani a felhasználóink számára, úgy hogy még a saját komfortzónájukat se kelljen elhagyniuk.
## Igényelt üzleti folyamatok
Tervezünk egy kezdőfelületet, amin a felhasználó egy email-ben kapott kóddal, jelszóval (amit a bejelentkezés után köteles megváltoztatni) bejelentkezhet az oldalra. Ezt követően a felhasználó átkerül a képernyőtervben látható központi felületre, ahol a játéktermek nyílnak meg. A menü sorban látható lehetőségek: értesítések, beállítások, profil, chat. A felhasználok tudnak kommunikálni egymással, barátok akár egy webes szobában is tudnak közösen játszani. Négy szoba fog nyílni a játékosoknak, ez négy különböző játékot fog rejteni. Az egy „ajtó” mögött pókerben lesz szerencséjük a játékosoknak. Itt egy virtuális szobába lesznek véletlenszerűen beosztva az emberek, és akár gépek akár a saját barátuk ellen tudnak majd játszani. Mindenki egy adott összeget kap. Azzal tud majd gazdálkodni. A második „ajtó” mögött black jack fogja várni a lelkes játékosokat. Itt is ugyan az a helyzet, mint a pókernél. Ki tudják majd választani, hogy ismerősökkel, vagy a gépek ellen szeretne játszani az illető. A harmadik és a negyedik „ajtó” mögött ilyen forgatós szerencsejáték lesz annyi különbséggel, hogy más-más stílusú lesz a két játék.

## Vágyálom rendszer
A projekt célja egy olyan weboldal létrehozása, ahol az otthon ragadt, szórakozni vágyó felhasználókhoz eljuttassuk a szerencsejáték izgalmai. A cél egy könnyen átlátható és felhasználóbarát fórum létrehozása, ahol a felhasználók a regisztráció után belépnek a saját szerencsejáték oldalukra, amit a háttérben, általuk nem tapasztalható módon pár alapvető szűrés segítségével állítunk be. Itt könnyen megtalálhatják a pontjaikat. Minden győzelmet, veszteséget külön mappában helyezkedik el. Ezeket minden héten átlagoljuk és ezt tudomásukra juttatjuk a felhasználóknak. Itt értesítéseket kapnak arról, hogy mennyire fejlődnek, estleg egy kevésbé szerencsés hullámban vannak.
## Funkcionális követelmények
A felhasználót az oldal betöltésekor a bejelentkező felület fogadja, amin keresztül be tud lépni az oldalra. A bejelentkezéshez a "Bejelentkezés" gombra kattintva be kell írnia az egyéni, 6 karakterből álló kódját, majd jelszavát. Ha sikeresen bejelentkezett, akkor számára elérhető minden funkció, amire jogosultsága van. A jobb felső sarokban a felhasználó név alatt legördülő menüben jelenik meg a "Profil", ahol a saját adatai ellenőrizheti a felhasználó. Ez alatt találhatóak a további lehetőségek: "Beállítások", ahol többek között a jelszavát is meg tudja majd változtatni. Ebből a menüből érhető el az üzenet, a blog és a kitűző is. Az egyéni kódjával egy sorban, a bal oldalon található a "Jussom" legördülő menü. Ebben található minden játékmenet a felhasználónak. Az induló összeg minden egyes körnél és azok végén nyert, vesztett összege, és ezek átlaga. Bal sarokban található a chat, amin a játékosok sajátbarátaikkal, vagy az oldalon megismerkedett játékosokkal.
## Fogalomtár
Reszponzív felület –-> PC-n igazodik a képernyőhöz a felület mérete, azaz különböző méretarányú és felbontású kijelzőkön is probléma nélkül megjeleníthető.

Feliratkozás --> A felhasználók feliratkozhatnak bejegyzésekre, amiknél kommenteltek, vagy megjelölték. Jelzi, ha új hozzászólás történt.

Szűrők --> Segítségükkel a felhasználó szűkebb körben kereshet bejegyzéseket, hozzászólásokat, melyekből csak azokat adja ki a kereső mező, amik megfelelnek a beállított feltételeknek.

Profil --> A felhasználó itt testre szabhatja saját profilképét, készíthet rövid leírást magáról, hogy jobban megismerjék.

Feliratkozás felület --> A felhasználót értesíti az oldal, ha a bejegyzésnél új hozzászólás történt, vagy szavaztak az általa készített szavazáson.

Black Jack --> A Blackjack legfontosabb szabálya, hogy a játékmenet során a játékosnál lévő lapok összértéke több legyen az osztó lapjainak összértékénél, anélkül, hogy meghaladná a 21-et.

Jussom --> A játékban lévő jelenlegi játékpénze a felhasználónak.
## Rendszerre vonatkozó törvények
### Általános Információk
A Weboldalhoz való hozzáférést és annak használatát az alkalmazandó jogszabályok és jelen Felhasználási Feltételek és Adatkezelési tájékoztatók (a továbbiakban Felhasználási Feltételek) szabályozzák. Az alkalmazást használók (a továbbiakban: a Felhasználók) elfogadják a jelen felhasználási feltételeket. Amennyiben ezen Felhasználási Feltételeket és az Oldal Tájékoztatóját nem fogadják el, abban az esetben nem jogosultak az oldal használatára.

A jelen Felhasználási Feltételekre vonatkozóan a magyar jog az irányadó, tekintet nélkül a nemzetközi magánjog előírásaira. Az Alkalmazás Felhasználói kifejezetten hozzájárulnak ahhoz, hogy jogvita esetén a magyar hatóságoknak és bíróságoknak kizárólagos joghatóságuk van a magyar jog alapján.
### Szellemi tulajdon
Az weboldal és valamennyi kapcsolódó védjegy, szerzői jogi alkotás és egyéb – akár bejegyzett, akár be nem jegyzett – szellemi tulajdon (a továbbiakban együttesen: Szellemi Tulajdon) tulajdonosa az KLPZ és/vagy KLPZ Szolgáltató, valamint az alkalmazáshoz kedvezményt nyújtó partnerek. A Felhasználók az Alkalmazást a Szellemi Tulajdon maximális tiszteletben tartásával jogosultak használni. A Szellemi Tulajdon kiterjed különösen, de nem kizárólagosan valamennyi szoftverre, logóra, márkajelre, márkanévre, fényképre, szövegre, grafikára, adatbázisra. A Szellemi Tulajdonnak tilos bárminemű megsértése, bitorlása, másolása, átdolgozása, és tilos azt bármilyen egyéb módon megsérteni, azt jogosulatlanul felhasználni, továbbadni, megterhelni, azzal bármilyen módon rendelkezni, visszaélni. Ezen szabályok megsértése az Alkalmazás használati lehetőségeinek azonnali hatályú megszüntetése mellett a megfelelő jogi lépések megtételét – beleértve esetleges büntetőjogi lépések megtételét is – vonja maga után a Felhasználóval, más jogsértő személlyel szemben a Tulajdonos és/vagy a Szellemi Tulajdon egyéb jogosultjai által.
### Használat
Az Oldal Felhasználói 18 éven felüli természetes személyek lehetnek. Az Oldal díjmentesen vehető igénybe, kizárólag privát, azaz nem üzletszerű módon és célra, kizárólag a jelen Felhasználási Feltételek szerint. Az Oldal letöltéséért és használatáért az adatforgalmat biztosító szolgáltató külön díjat számíthat fel. Az ezzel kapcsolatos esetlegesen felmerülő költségek a Felhasználót terhelik.

A Felhasználási Feltételek és az Oldal működésének a módosítására, az Oldal működésének a megszüntetésére a Tulajdonos bármikor jogosult, a Felhasználó előzetes értesítése nélkül. Az Oldalhoz való hozzáférést a Tulajdonos bármikor visszavonhatja akár az adott Felhasználóra nézve, akár szélesebb körben vagy teljeskörűen előzetes értesítés, figyelmeztetés nélkül.
### Felelősségi szabályok
A Tulajdonos fenntartja magának a jogot arra, hogy amennyiben valamely Felhasználó részéről bármilyen manipulációt, tömegesen generált letöltést, illetve az Oldal szellemével bármilyen módon összeférhetetlen vagy azt sértő magatartást tapasztal, vagy ennek megalapozott gyanúja felmerül, úgy a Felhasználót azonnali hatállyal kizárja az Oldal felhasználói köréből.

Az Oldalhoz kapcsolódó adatbázis módosítása kizárólag az Üzemeltető által, illetve az Oldalt üzemeltető webkiszolgálón keresztül lehetséges. Bármilyen külső, nem az Oldal részeként elérhető eszközzel történő beavatkozás a Felhasználó azonnali kizárását eredményezi.

Ha a Felhasználó az Oldalt használat közben bezárja, vagy ha a kapcsolat (bármely okból) megszakad a kiszolgáló webhelyével, abban az esetben az adatok elvesztéséért a Tulajdonos semmilyen felelősséget nem vállal. A Tulajdonos és az Üzemeltető a rendelkezésére álló eszközökkel biztosítja, hogy az Oldal használata technikai szempontból biztonságosnak minősüljön. Az Oldalhoz való csatlakozás miatt bekövetkező károkért, az internetes hálózat esetleges üzemkimaradásából, az elérési út hibájából, bármely nem várt technikai hibából eredő adatvesztésért, vírusból, vagy más károkért a Tulajdonos nem felelős. A Felhasználóknak minden esetben fel kell mérniük, hogy rendelkeznek-e az Alkalmazás használatához szükséges ismeretekkel, technikai követelményekkel és teljesítményekkel.
### Technikai követelmények
Az Oldal használatához szükséges technikai feltételek: Android operációs rendszer 4.0.3 vagy későbbi verziójával ellátott mobiltelefon vagy iOS operációs rendszer 9.0 vagy későbbi verziójával ellátott mobiltelefon, valamint minimum 100 MB szabad tárhely és a használathoz megfelelő sávszélességű internetelérés. A technikai feltételeket az Oldal letöltéséhez és használatához a Felhasználónak kell teljesítenie. A technikai feltételek nem teljesüléséért a Tulajdonos nem vonható felelősségre. Ugyanígy nem vonható felelősségre a Tulajdonos az Oldal használatából a készüléken bekövetkező adatvesztésért, meghibásodásért. A Tulajdonos kizár minden kártérítési felelősséget az oldalhoz csatlakozó minden külső szerver által nyújtott (kiemelten Facebook adatok átvétele) vagy megjelenített adattal, információval kapcsolatban is.

Az Oldal bizonyos funkciói csak regisztrációt követően vehetők használatba. A megjelenítés kizárólag a Google Chrome, Safari, Opera, Microsoft Edge felületén keresztül támogatott.

Az Oldal verziózott, a mobiltelefonon futó operációs rendszer – beállításoktól függően – rendszeresen frissíti magát. Amennyiben a Google Chrome, illetve a Safarin elérhető frissítést észlel a rendszer, az operációs rendszer automatikusan frissíti az oldalt. A Google Chrome, illetve a Safari és az operációs rendszer működéséért az Intézményvezető/Üzemeltető semmilyen felelősséggel nem tartozik.

Amennyiben más készüléken szándékozik megnyitni az oldalt az új eszközön nem igényel újabb regisztrációt és a korábbi, programban tárolt információk is elérhetőek maradnak bejelentkezést követően. Mobiltelefonszám cseréjekor a Felhasználónak nincs teendője az Alkalmazással kapcsolatban.
### Regisztráció és tárolt adatok
Regisztrálni csak egyféleképpen lehet. Minden hallgató, vagy tanár egy bizonyos azonosítóval van regisztrálva a rendszerben. A weboldalhoz való csatlakozáshoz szükséges egy 6 karakterből álló kód és egy jelszó, amit a rendszer eljuttat a felhasználónak. Ezt az ideiglenes jelszót a felhasználó az első belépéskor meg kell változtasson. Így jön létre a bejelentkezés. A regisztráció során megadott adatok helyességéért a Tulajdonos, illetve az Üzemeltető semminemű felelősséget nem vállal/azok valódiságát nem ellenőrzi.

A regisztrációt követően Üzemeltető és/vagy Tulajdonos a Felhasználó részére az Weboldal működésével kapcsolatosan, különösen versenyjelentkezéssel kapcsolatos tájékoztatást, visszaigazolást, alkalmazás frissítésével kapcsolatos tájékoztató leveleket küldhet a Felhasználó e-mail címére.

Az Oldal adatbázisából előzetes értesítés nélkül törlésre kerülhet az a Felhasználó, aki az általa megosztott tartalmakkal megsérti harmadik fél személyiségi vagy egyéb jogait, valamint a szerzői jogot, bármilyen Szellemi Tulajdonnal kapcsolatos jogot, vagy bármilyen egyéb jogszabály rendelkezéseit, illetve aki kereskedelmi, üzleti célú hirdetéseket jelenít meg (ún. spam formájában). Akár saját profiljával, akár a közösségi felületeken megosztott üzenetekkel más Felhasználókat zaklat, megfélemlít, rágalmaz törlésre kerül. Az Alkalmazás adatbázisából előzetes értesítés nélkül törlésre kerülhet az a Felhasználó is: aki az Oldalt saját nevében terjeszti, részben vagy egészben másolja, átdolgozza, a Szellemi Tulajdont bármilyen egyéb módon bitorolja, azzal visszaél, jogosulatlanul használja az Oldal és az Intézményvezető védjegyeit, kárt tesz az Oldalban bármilyen módon, pl. szoftverek és távközlési berendezések segítségével a jelen Felhasználási Feltételekben foglaltakat bármilyen egyéb módon megszegi.

A Felhasználó regisztrációs hiba esetén bármikor kérhet segítséget a [KLPZ@gmail.com](mailto:KLPZ@gmail.com) e-mail címre küldött levelében.
### Értesítések
Az Oldal használata során, a beépített üzenetküldő szolgáltatás segítségével értesítéseket kaphat a Felhasználó az Oldallal kapcsolatosan. Az oldal megnyitását követően első lépésként az Oldal engedélyt kér a rendszerszintű értesítésekhez, ezeket lemondani az oldalon lévő "Beállítások"-ban lehetséges.
### Garancia és kártérítés
Az Oldal használatához a felhasználói oldalon szükséges – fent meghatározott, vagy bármely egyéb - technikai feltételeket a Felhasználónak kell biztosítania, teljesítenie. Ezen technikai feltételek nem teljesüléséért az Intézményvezető nem vonható felelősségre. Ugyanígy nem vonható felelősségre az Intézményvezető az Oldal használatából adódóan a készüléken bekövetkező adatvesztésért, meghibásodásért. Az Intézményvezető kizár minden kártérítési felelősséget az Oldalhoz csatlakozó minden külső szoftver által nyújtott (így kiemelten az adatok átvétele) vagy megjelenített adattal, információval kapcsolatban. Az Intézményvezető nem vállal garanciát az Oldal megszakításmentes működéséért, valamint vis major hibákért. Az ebből eredő adatvesztésért, tartalom vesztésért az Intézményvezető szintén nem tartozik kártérítési felelősséggel.
### Egyéb rendelkezések
Jelen Felhasználási Feltételekben nem szabályozott kérdésekben a hatályos jogszabályok – különösen, de nem kizárólagosan a Polgári Törvénykönyvről szóló 2013. évi V. törvény, az Európai Parlament és Tanács 2016. április 27-i (EU) 2016/679. Rendelete a természetes személyeknek a személyes adatok kezelése tekintetében történő védelméről és az ilyen adatok szabad áramlásáról, valamint a 95/46/EK irányelv hatályon kívül helyezéséről, az információs önrendelkezési jogról és az információ szabadságról szóló 2011. évi CXII. törvény, a szerzői jogról szóló 1999. évi LXXVI. törvény, valamint az elektronikus kereskedelmi szolgáltatások, valamint az információs társadalommal összefüggő szolgáltatások egyes kérdéseiről szóló 2001. évi CVIII. törvény – rendelkezései az irányadóak.
### Kapcsolat
Az Oldal támogatását az Üzemeltető végzi munkanapokon, 8:00 és 16:00 között. Az Oldal működésével kapcsolatban a Felhasználó a [KLPZ@gmail.com](mailto:KLPZ@gmail.com) e-mail címre küldheti kérdéseit, amelyre az Üzemeltető a fenti időszakban válaszol. Forduljon hozzánk teljes bizalommal.
## Követelménylista

|   Modul   | ID |  Név   |  Verzió  |
|-----------|----|--------|----------|
|Jogosultság| K1 | Bejelentkezés|1.0|
|Jogosultság|K2|Regisztráció|1.0|
|Jogosultság|K3|Jogosultsági szintek|1.0|
|Modifikáció|K4|Felhasználó módosítása|1.0|
|Modifikáció|K5|Jelszó módosítása|1.0|
|Modifikáció|K6|Elfelejtett felhasználónév/jelszó|1.0|
|Statisztika|K7|Összes megtekintések|1.0|
|Felület|K8|Profil|1.0|
|Felület|K9|Hozzászólások|1.0|
|Jogosultság|K10|Admin felület|1.0|
|Jogosultság|K11|Moderátor felület|1.0|
|Adatbázis|K12|Adatbázis rendszer|1.0|

### Kifejtés
#### ID
- K1  A felhasználó a "Bejelentkezés" gombbal be tud jelentkezni a megadott felhasználónév és jelszó párossal. Ha bármelyik mező hiányzik, vagy hibásan van kitöltve, az aktuális mező fölött piros betűkkel tudatja velünk a rendszer.

- K2  A "Regisztráció" gombra kattintva a felhasználó megadhatja az oldal használatához szükséges adatokat: "Felhasználó" mezőbe egy egyedi felhasználónevet; "e-mail" mezőbe a saját érvényes e-mail címét; "Jelszó" mezőbe egy egyedi kulcsszót, amit harmadik személynek semmiféleképpen nem adhatunk ki.
Ha bármelyik mező hiányzik, vagy hibásan van kitöltve, az aktuális mező fölött piros betűkkel tudatja velünk a rendszer.

- K3  Felhasználói-Rendszerhozzáférés, like-olhat, küldhet üzenetet, tölthet fel profilképet, bemutatkozó szöveget.

- K4 A felhasználó módosítani tudja saját Felhasználónevét a saját profil beállításain belül. Ehhez szükséges a régi és az új felhasználó név megadása, az új megerősítése, valamint a felhasználó jelszavának megadása.

- K5 A felhasználó módosítani tudja saját jelszavát a saját profil beállításain belül. Ehhez szükséges a régi és az új jelszavának megadása, valamint az új megerősítése.

- K6 Ha a felhasználó elfelejtette a felhasználónevét vagy jelszavát, akkor ezzel az opcióval egy Adminhoz tud fordulni e-mail címen keresztül.

- K7 Egy lista a bejegyzésekről, hozzászólásokról, illetve témákról, valamint ezekről különféle statisztikák. (megtekintés, legfelkapottabb, stb.)

- K8 A felhasználónak lehetősége van a profilján található szövegek módosítására.

- K9 Ez egy reszponzív felület, amin keresztül a felhasználók hozzáférhetnek az oldalon lévő játékokhoz, hozzászólhatnak.

- K10 Ez egy felület az admin fiókkal rendelkező felhasználók számára. Tartalmazza az egyes felhasználói csoportok jogainak szerkesztését, hozzászólások moderátori jelzését, új szobák létrehozását.

- K11 Ez egy felület a moderátor fiókkal rendelkező felhasználók számára. Tartalmazza az egyes felhasználói csoportok jogainak szerkesztését, hozzászólások moderálási jogait, új szobák létrehozását.

- K12 Adatbázis kapcsolat megtervezése és létrehozása.
