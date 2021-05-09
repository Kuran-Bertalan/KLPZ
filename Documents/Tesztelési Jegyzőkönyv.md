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



### 6.2 Tesztelési jelentés - 2. Példa
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

### 7 Jóváhagyások

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

## #1: GUI teszt:
## #2:Adatbázis teszt:
## #3:Adatbázis Connection teszt: