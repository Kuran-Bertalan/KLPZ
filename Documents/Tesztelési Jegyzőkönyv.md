# Tesztjegyzőkönyv
### Main Project

|  Dokumentum címe: (azonosítója) |  KLPZ_afp2 - "KLPZ_Vegas" |
|---|:-:|
| **Minősítés: (állapot)**  |  Tervezet|
| **Verziószám:**  |  Beta 0.1 |
| **Projekt név:** |  KLPZ_Vegas|
| **Készítette:** | KLPZ_afp2 |
| **Utolsó mentés kelte:** | 2021.02.22 |
| **Dokumentum célja:** | A projekt aktuális állapotának felmérése

### Projektben résztvevő fejlesztők:

|  Név | Szerepkör |
|---|:-:|
| Zsadányi Rózsa | Adatbázis fejlesztő |
| Kurán Bertalan  | Test manager |
| Lehóczky Csaba | Vezető adatbázis fejlesztő |
| Pusztai Dominik | Adatbázis fejlesztő, Tester |
| Soós Gergő | Projekt Manager |
| Vajda Krisztián | Projekt Manager |
| Balogh Dániel | Projekt Manager |

## 1. Bevezetés
A tesztelés célja a projektben megtalálható felépítésbeli, vagy formatervezési hibák feltárása.	

### 1.1 Tesztelési terv hatóköre, célja:

- A tesztelési terv célja a tesztelés teljeskörűségének biztosítása, a tesztelés során alkalmazott eljárások és megoldások meghatározása.
- A teszt végrehajtásáért ez esetben a test manager felel, és a tesztelést az általa összeállított tesztcsapat hajtja végre a 2.1. fejezetben meghatározott módon.

### 1.2 Elvárások
#### A teszttervvel szemben felállított alap elvárások:
- Az olvasó ismeri az alapdokumentumokat, amelyek meghatározzák a rendszert. 
- Az **KLPZ_afp2** projektcsapat felelős a tesztadatok előállításáért.

## 2. Szükséges erőforrások
Ez a fejezet a teszteléshez szükséges erőforrásokat fejti ki.

### 2.1 Feladatkörök és felelősségek (tesztcsapat meghatározása)
| Feladatkör  |  Felelősség/tevékenység |  Személy  |
|---|---|---|
|  **Tesztelő, Teszt-koordinátor:** |  A teszt végrehajtása, észrevételek dokumentálása, teszt dokumentáció archiválása.Tesztterv készítése.  A tesztterv jóváhagyatása a projektmenedzserrel.  A teszt forgatókönyvek létrehozása  inkonzisztenciák kezelése.  Helyes és időbeni hibakezelés.  Szükség esetén problémák delegálása a projekt menedzsernek.  Végső riport készítése.  Teszt dokumentum archiválása.  Az észrevételek státuszának követése, ill. dokumentálása |  |
| **Szakértő:**  |  A szakértő az észrevételeket elemzi és megoldást javasol. |   |
|**Projektvezető:**| Tesztterv jóváhagyása  Teszt forgatókönyv (testscript)| <ul><li>Balogh Dániel</li><li>Vajda Krisztián</li><li>Soós Gergő</li></ul>|

### 2.2 Tesztadatok
A teszt végrehajtásához szükséges rekordok (tesztadatok) száma: ---
A tesztadatok elkészítéséért és feltöltéséért felelős személy: ---

A tesztadatoknak az alábbi követelményeknek kell megfelelniük:
- Az adatbázisba felvitt adatoknak csakis az UTF-8 kódtáblában található karaktereket szabad tartalmaznia.

## 3. Tesztelési terv
Ez a fejezet leírja a teszt típusát, a metodikáját és a riportkészítés módszerét. Emellett meghatározza a tesztelvárásokat, a teszt-esetek elvárt eredményeit, sikerességének kritériumait, a kockázatok kezelését és a hatáskörön kívül eseteket.

### 3.1 Fejlesztői teszt
A fejlesztői tesztelés célja a rendszer alapvető funkcióinak ellenőrzése, a hibakezelés és az alapvető funkciók működésének vizsgálata
**Módszere:**
A program SQL adatbázisa "DUMMY" (*Nem valós*) adatokkal kerül feltöltésre a tesztelés alatt.
Ezen adatok többségét úgynevett "Lorem Ipsum" típusú, véletlenül generált adat teszi ki.

### 3.2 Prototípus (modul) teszt
A prototípus tesztelés (vagy másik nevén modultesztelés) célja a rendszer már működő moduljainak önálló tesztelése, a modulon belüli hibák azonosításának és kiküszöbölésének érdekében. 
**Módszere:** 
A szegmensek validálása egyénileg történik. A tesztelés viszont a szegmensek függőségeire is kiterjed.

### 3.3 Integrációs teszt
Az integrációs teszt célja a rendszer más rendszerekhez történő illesztésének vizsgálata, a több rendszeren keresztül átívelő funkciók tesztelésének érdekében. Az adatmigrációs tesztelés az integrációs teszteléshez tartozik, ennek lényege, hogy a bevezetendő rendszerbe áttöltik azokat az adatokat, amelyekkel a rendszer dolgozni fog, és letesztelik a betöltött adatok, illetve az adatokat kezelő funkciók helyességét. 
**Módszere:**
A program adatbázisába valós adatok kerülnek betöltésre.

### 3.4 Elfogadási teszt
Az elfogadási teszt (angolul User Acceptance Test) célja a rendszer teljes funkcionalitásának vizsgálata a felhasználók szemszögéből
**Módszere:**
A teszt egy kontroll csoporttal zajlik, egy külső cégen keresztül.

### 3.5 Terheléses teszt
A terheléses teszt célja a tervezett kapacitások, valamint a rendelkezésre álló növekedési potenciál meghatározása.
**Módszere:**
A próba telepítést követően egy meghívott tesztközönséggel zajlik, szimulálva egy átlagos napi használatot.

### 3.6 Biztonsági teszt (audit):
Biztonsági tesztelésre akkor van szükség, ha a rendszer szenzitív (pl. személyes vagy pénzügyi) adatokat kezel, vagy szabadon elérhető az internetről. 
**Módszere:**
A tesztet egy megbízott külső cég végzi.

### 3.7 Go live teszt
A go-live teszt egy próbaélesítés, melynek során a korábbi rendszerek továbbra is üzemelnek annak érdekében, hogy az élesítéskor keletkező problémák ne befolyásolják a normál üzemi működést.
**Módszere:**
A próbatelepítés a megrendelő által választott webtárhelyen történik, a programot a jövőben üzemeltető adminisztrátorok közreműködésével élesítik.

### 3.8 Tesztelési feladatok, teszt-esetek leírása
A tesztelési feladat a következő teszt-eseteket foglalja magában:
- Fejlesztői teszt
- Prototípus (modul)

## 4 Tesztelési ütemterv, függőségek – tesztforgatókönyv

### 4.1 Tesztelési jelentés
A tesztelési jelentést a tesztkoordinátor készíti el. Ez egy részletes áttekintése a lefutott teszteknek, azok eredményeinek, státuszának és a megjegyzéseknek.
A tesztkoordinátor juttatja el a projektmenedzsernek a tesztelési jelentést. 

## 5. Tesztjegyzőkönyv
### 5.1 Tesztelési jegyzőkönyv - 1. Példa

|   |   |
|---|---|
| A teszt-eset leírás és célja:  |  |
| A tesztelt folyamat/funkció leírása:  |   |
| A tesztelés előfeltételei:  |  |
| A tesztelés dátuma és időpontja:  |  |
| A tesztet végző személy(ek):  |   |
| A tesztelt rendszer beállításai:  |  |
| A teszt-eset elvárt eredménye:  |  |
| A tesztelés eredménye:  |  |
| Megjegyzések:  | -  |

**Tesztelést elvégezte**

|   |   |
|---|---|
|  Név: |   |
|  Szervezeti egység/ beosztás: |   |
|  Dátum: |   |



### 5.2 Tesztelési jelentés - 2. Példa
|   |   |
|---|---|
| A hivatkozott tesztjegyzőkönyvek rövid leírása és eredménye:  | |
| A tesztelt folyamatok/funkciók/modulok leírása: | |
| A tesztadatok típusa:  |  |
| A tesztelt rendszer beállításai:  |  |
| A tesztelés eredménye:  | |
| Megjegyzések:  | -  |

**Tesztelést elvégezte**

|   |   |
|---|---|
|  Név: | |
|  Szervezeti egység/ beosztás: |  |
|  Dátum: |   |

### 5.3 Jóváhagyások

|   |   |
|---|---|
|  Név: |   |
|  Szervezeti egység/ beosztás: |  |
|  Dátum: |    |

## 5. Tesztjegyzőkönyv
### 5.1 Tesztelési jegyzőkönyv - 1. Bejelentkezés, regisztráció funkcó tesztelése
|   |   |
|---|---|
| A teszt-eset leírás és célja:  | A bejelentkezés menüpont tesztelése |
| A tesztelt folyamat/funkció leírása:  |  A felület viselkedése hibás felhasználónév / jelszó helyes megadása esetén, megfelelő adatok esetén, illetve többszöri hibás bevitelekor, továbbá új felhasználói fiók regisztrálása esetén sikeres-e.  |
| A tesztelés előfeltételei:  |  A programnak rendelkeznie kell minimum egy dummy adatbázissal |
| A tesztelés dátuma és időpontja:  |  2021.05.09 11:03 |
| A tesztet végző személy(ek):  | Zsadányi Rózsa  |
| A tesztelt rendszer beállításai:  | A program specifikációjában szereplő alap beálítások  |
| A teszt-eset elvárt eredménye:  |  A specifikációban taglalt viselkedés |
| A tesztelés eredménye:  | **Megfelelt/élesíthető**  |
| Megjegyzések:  | -  |

**Tesztelést elvégezte**

|   |   |
|---|---|
|  Név: |  Zsadányi Rózsa |
|  Szervezeti egység/ beosztás: | Adatbázis fejlesztő  |
|  Dátum: |  2021.05.09 13:10  |

**Jóváhagyás**
|   |   |
|---|---|
|  Név: |  Kurán Bertalan |
|  Szervezeti egység/ beosztás: | Test manager |
|  Dátum: |  2021.05.10  |

### 5.2 Tesztelési jegyzőkönyv - 2. Bejelentkezés, jelszóhasználat tesztelése

|   |   |
|---|---|
| A teszt-eset leírás és célja:  | A bejelentkezési jelszóhasználat tesztelése |
| A tesztelt folyamat/funkció leírása:  |  A felület viselkedése jelszó hibás karakterhosszúsága / jelszó helyes megadása esetén, megfelelő karaketerek esetén,  illetve megfelelő betüméretek esetén sikeres-e.  |
| A tesztelés előfeltételei:  |  A programnak rendelkeznie kell minimum egy dummy adatbázissal |
| A tesztelés dátuma és időpontja:  |  2021.05.07 15:00 |
| A tesztet végző személy(ek):  | Zsadányi Rózsa  |
| A tesztelt rendszer beállításai:  | A program specifikációjában szereplő alap beálítások  |
| A teszt-eset elvárt eredménye:  |  A specifikációban taglalt viselkedés |
| A tesztelés eredménye:  | **Hibás**  |
| Megjegyzések:  | A felhasználói jelszónál a számokat nem fogadta el, annak hiányát pótoltuk, kijavítottuk. |

**Tesztelést elvégezte**
|   |   |
|---|---|
|  Név: |  Zsadányi Rózsa |
|  Szervezeti egység/ beosztás: | Adatbázis fejlesztő  |
|  Dátum: |  2021.05.07 18:10  |

**Jóváhagyás**
|   |   |
|---|---|
|  Név: |  Kurán Bertalan |
|  Szervezeti egység/ beosztás: | Test manager |
|  Dátum: |  2021.05.10  |

### 5.3 Tesztelési jegyzőkönyv - 3. Profil szerkesztés funkció

|   |   |
|---|---|
| A teszt-eset leírás és célja:  |  A felhasználó tudja módositani az adatait  |
| A tesztelt folyamat/funkció leírása:  |  A felhasználó tudja módositani az adatait  |
| A tesztelés előfeltételei:  |  A programnak rendelkeznie kell minimum egy dummy adatbázissal  |
| A tesztelés dátuma és időpontja:  |  2021.05.06. 10:31 |
| A tesztadatok típusa:  | szöveg |
| A tesztet végző személy(ek):  | Zsadányi Rózsa  |
| A tesztelt rendszer beállításai:  | A program specifikációjában szereplő alap beállítások  |
| A teszt-eset elvárt eredménye:  |  A specifikációban taglalt viselkedés |
| A tesztelés eredménye:  | **Megfelelt/élesíthető**  |
| Megjegyzések:  | -  |

**Tesztelést elvégezte**

|   |   |
|---|---|
|  Név: |  Zsadányi Rózsa |
|  Szervezeti egység/ beosztás: | Adatbázis fejlesztő  |
|  Dátum: |  2021.05.06 11:58  |

**Jóváhagyás**
|   |   |
|---|---|
|  Név: |  Kurán Bertalan |
|  Szervezeti egység/ beosztás: | Test manager |
|  Dátum: |  2021.05.10  |

### 5.4 Tesztelési jegyzőkönyv - 4. CSS stíluslapok szerkesztése

|   |   |
|---|---|
| A teszt-eset leírás és célja:  |  A fejlesztő képes legyen megváltoztatni az oldal kinézeteit  |
| A tesztelt folyamat/funkció leírása:  |  A fejlesztő egyértelműen tudja módosítani a css stílusállományokat, hogy a kollégák is értsék. |
| A tesztelés előfeltételei:  |  A PHP oldalakhoz hozzá kell kötni legalább egy css fájlt.  |
| A tesztelés dátuma és időpontja:  |  2021.05.09. 16:20 |
| A tesztadatok típusa:  | Lépcsőzetes stíluslap-dokumentum |
| A tesztet végző személy(ek):  | Lehóczky Csaba  |
| A tesztelt rendszer beállításai:  | A program specifikációjában szereplő alap beállítások  |
| A teszt-eset elvárt eredménye:  |  A specifikációban taglalt viselkedés |
| A tesztelés eredménye:  | **Megfelelt/élesíthető**  |
| Megjegyzések:  | -  |

**Tesztelést elvégezte**

|   |   |
|---|---|
|  Név: |  Lehóczky Csaba |
|  Szervezeti egység/ beosztás: | Vezető adatbázis fejlesztő  |
|  Dátum: |  2021.05.09 16:25  |

**Jóváhagyás**
|   |   |
|---|---|
|  Név: |  Kurán Bertalan |
|  Szervezeti egység/ beosztás: | Test manager |
|  Dátum: |  2021.05.10  |

### 5.5 Tesztelési jegyzőkönyv - 5. Adatbázis kapcsolat tesztelés

|   |   |
|---|---|
| A teszt-eset leírás és célja:  |  A külső adatbázis oldal időben megkapja és feldoglozza a kapott adatokat.  |
| A tesztelt folyamat/funkció leírása:  |  Amint elküldünk egy-egy adat/adatcsoportot a külső adatbázis oldalra, annak elhanyagolható időn belül meg kell kapnia azokat. |
| A tesztelés előfeltételei:  |  Legalább 2 oszlopos tábla hozzákapcsolása a szoftverünkhez.  |
| A tesztelés dátuma és időpontja:  |  2021.05.09. 16:30 |
| A tesztadatok típusa:  | MySql, SQL |
| A tesztet végző személy(ek):  | Lehóczky Csaba  |
| A tesztelt rendszer beállításai:  | A program specifikációjában szereplő alap beállítások  |
| A teszt-eset elvárt eredménye:  |  A specifikációban taglalt viselkedés |
| A tesztelés eredménye:  | **Élesíthető**  |
| Megjegyzések:  | -  |

**Tesztelést elvégezte**

|   |   |
|---|---|
|  Név: |  Lehóczky Csaba |
|  Szervezeti egység/ beosztás: | Vezető adatbázis fejlesztő  |
|  Dátum: |  2021.05.09 16:35 |

**Jóváhagyás**
|   |   |
|---|---|
|  Név: |  Kurán Bertalan |
|  Szervezeti egység/ beosztás: | Test manager |
|  Dátum: |  2021.05.10  |

### 5.6 Tesztelési jegyzőkönyv - 6. PHP oldalak kapcsolata, szerkesztése

|   |   |
|---|---|
| A teszt-eset leírás és célja:  |  A fejlesztő képes legyen a PHP oldalakkal kommunikálni, illetve azokat kezelni.  |
| A tesztelt folyamat/funkció leírása:  |  Adott PHP fájlokat átírva is, tudják a fejlesztők, hogy hol, milyen problémát oldottak meg |
| A tesztelés előfeltételei:  |  WAMP/XAMPP szerver elérése.  |
| A tesztelés dátuma és időpontja:  |  2021.05.09. 16:40 |
| A tesztadatok típusa:  | PHP szerveroldali script nyelv |
| A tesztet végző személy(ek):  | Pusztai Dominik Tamás  |
| A tesztelt rendszer beállításai:  | A program specifikációjában szereplő alap beállítások  |
| A teszt-eset elvárt eredménye:  |  A specifikációban taglalt viselkedés |
| A tesztelés eredménye:  | **Megfelelt/élesíthető**  |
| Megjegyzések:  | -  |

**Tesztelést elvégezte**

|   |   |
|---|---|
|  Név: |  Pusztai Dominik Tamás |
|  Szervezeti egység/ beosztás: | Adatbázis fejlesztő, Tester  |
|  Dátum: |  2021.05.09 16:43  |

**Jóváhagyás**
|   |   |
|---|---|
|  Név: |  Kurán Bertalan |
|  Szervezeti egység/ beosztás: | Test manager |
|  Dátum: |  2021.05.10  |

### 5.7 Tesztelési jegyzőkönyv - 7. Tétek jóváírásának kapcsolata az adatbázissal

|   |   |
|---|---|
| A teszt-eset leírás és célja:  | A tétek jóváírásának, nyerés esetén. |
| A tesztelt folyamat/funkció leírása:  |  Nyerés esetén, bekövetkezett kredit pontok hozzáadása az adatbázisban, hogy az így elmentett adatokat lehessen a továbbiakban felhasználni.  |
| A tesztelés előfeltételei:  |  A programnak rendelkeznie kell minimum egy dummy adatbázissal |
| A tesztelés dátuma és időpontja:  |  2021.05.09 16:50 |
| A tesztet végző személy(ek):  | Pusztai Dominik Tamás  |
| A tesztelt rendszer beállításai:  | A program specifikációjában szereplő alap beálítások  |
| A teszt-eset elvárt eredménye:  |  A specifikációban taglalt viselkedés |
| A tesztelés eredménye:  | **Hibás**  |
| Megjegyzések:  | Javításra szorul. |

**Tesztelést elvégezte**
|   |   |
|---|---|
|  Név: |  Pusztai Dominik Tamás |
|  Szervezeti egység/ beosztás: | Adatbázis fejlesztő, Tester  |
|  Dátum: |  2021.05.09 16:56  |

**Jóváhagyás**
|   |   |
|---|---|
|  Név: |  Kurán Bertalan |
|  Szervezeti egység/ beosztás: | Test manager |
|  Dátum: |  2021.05.10  |

### 5.8 Tesztelési jegyzőkönyv - 8. Blackjack játék tesztelése

|   |   |
|---|---|
| A teszt-eset leírás és célja:  | Blackjack játék tesztelése |
| A tesztelt folyamat/funkció leírása:  | Játékmenete, Funkciók kiprobálása  |
| A tesztelés előfeltételei:  | Bejelentkezve kell lenni, és megfelelő zsetonnal rendelkezni |
| A tesztelés dátuma és időpontja:  | 2021.05.09 17:10 |
| A tesztet végző személy(ek):  |  Kurán Bertalan |
| A tesztelt rendszer beállításai:  | Bejelentkezett felhasználóval, 1000fölötti zsetonnal |
| A teszt-eset elvárt eredménye:  | A specifikációban taglalt viselkedés |
| A tesztelés eredménye:  | **Megfelelt/élesíthető** |
| Megjegyzések:  | Megfelelő  |

**Tesztelést elvégezte**

|   |   |
|---|---|
|  Név: |  Kurán Bertalan |
|  Szervezeti egység/ beosztás: |  Test manager |
|  Dátum: | 2021.05.09 17:10   |

### 5.9 Tesztelési jegyzőkönyv - 9. Poker játék tesztelése

|   |   |
|---|---|
| A teszt-eset leírás és célja:  | Poker játék tesztelése |
| A tesztelt folyamat/funkció leírása:  | Játékmenete, Funkciók kiprobálása  |
| A tesztelés előfeltételei:  | Bejelentkezve kell lenni, és megfelelő zsetonnal rendelkezni |
| A tesztelés dátuma és időpontja:  | 2021.05.09 17:15 |
| A tesztet végző személy(ek):  |  Kurán Bertalan |
| A tesztelt rendszer beállításai:  | Bejelentkezett felhasználóval, 1000fölötti zsetonnal |
| A teszt-eset elvárt eredménye:  | A specifikációban taglalt viselkedés |
| A tesztelés eredménye:  | **Megfelelt/élesíthető** |
| Megjegyzések:  | Megfelelő  |

**Tesztelést elvégezte**

|   |   |
|---|---|
|  Név: |  Kurán Bertalan |
|  Szervezeti egység/ beosztás: |  Test manager |
|  Dátum: | 2021.05.09 17:15   |

### 5.10 Tesztelési jegyzőkönyv - 10. Slotmachine játék tesztelése

|   |   |
|---|---|
| A teszt-eset leírás és célja:  | Slotmachine játék tesztelése |
| A tesztelt folyamat/funkció leírása:  | Játékmenete, Funkciók kiprobálása  |
| A tesztelés előfeltételei:  | Bejelentkezve kell lenni, és megfelelő zsetonnal rendelkezni |
| A tesztelés dátuma és időpontja:  | 2021.05.09 17:20 |
| A tesztet végző személy(ek):  |  Kurán Bertalan |
| A tesztelt rendszer beállításai:  | Bejelentkezett felhasználóval, 1000fölötti zsetonnal |
| A teszt-eset elvárt eredménye:  | A specifikációban taglalt viselkedés |
| A tesztelés eredménye:  | **Megfelelt/élesíthető** |
| Megjegyzések:  | Megfelelő  |

**Tesztelést elvégezte**

|   |   |
|---|---|
|  Név: |  Kurán Bertalan |
|  Szervezeti egység/ beosztás: |  Test manager |
|  Dátum: | 2021.05.09 17:20   |

### 5.11 Tesztelési jegyzőkönyv - 11. Játék oldalakon belüli, játék gomb funkció tesztelése.

|   |   |
|---|---|
| A teszt-eset leírás és célja:  |  A "játék" oldalakon lévő, játék gomb funkciója  |
| A tesztelt folyamat/funkció leírása:  |  Adott php oldalakon, a "játék" oldalakon lévő, játék gomb funkciója, elindítja a kívánt munkamenetet. |
| A tesztelés előfeltételei:  |  Bejelentkezett fiók, megfelelő zsetonszám, illetve megfelelő tétválasztás.  |
| A tesztelés dátuma és időpontja:  |  2021.05.10. 21:20 |
| A tesztadatok típusa:  | PHP szerveroldali script nyelv |
| A tesztet végző személy(ek):  | Pusztai Dominik Tamás  |
| A teszt-eset elvárt eredménye:  |  A specifikációban taglalt viselkedés |
| A tesztelés eredménye:  | **Megfelelt/élesíthető**  |
| Megjegyzések:  | -  |

**Tesztelést elvégezte**

|   |   |
|---|---|
|  Név: |  Pusztai Dominik Tamás |
|  Szervezeti egység/ beosztás: | Adatbázis fejlesztő, Tester  |
|  Dátum: |  2021.05.09 21:28  |


### 6. Unit tesztek
|   |   |   |  | ||
|---|---|---|---|---|---|
|  Teszter |  Unit teszt| Végeredmény | Dátum | Megjegyzés |
|  Zsadányi Rózsa |  Deck-test-fill  |Sikeres | 2021.05.10|
|  Pusztai Dominik |  PokerBet | Sikeres | 2021.05.10|
|  Pusztai Dominik |  PokerRefill |Sikeres| 2021.05.10|
|  Pusztai Dominik |  BlackJackHandValues | Sikeres| 2021.05.10|
|  Lehóczky Csaba |  BlackJackComputerHandValues  | Sikeres | 2021.05.10|
|  Lehóczky Csaba |  BlackJackUpdateBalance | Sikeres |2021.05.10|
|  Kurán Bertalan |  Shuffle-deck |Sikeres| 2021.05.10|
|  Kurán Bertalan |  DrawOne-deck |Sikeres| 2021.05.10|
|  Kurán Bertalan |  BlackJackPlayerWin |Sikeres| 2021.05.10|
