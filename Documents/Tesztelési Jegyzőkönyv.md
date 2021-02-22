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

## 2 Szükséges erőforrások
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

## 3 Tesztelési terv
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