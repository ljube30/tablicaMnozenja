# tablicaMnozenja

Ljubiša Jereinić PROJEKTNI ZADATAK INFOMEDIA

Baza je urađena u mySQL-u i exportovana u folder Baza.

Include fajlovi su: include($_SERVER['DOCUMENT_ROOT'].'/includes/config.php');
                    include($_SERVER['DOCUMENT_ROOT'].'/class/calculator.class.php');

Tako da projekat treba biti smješten u main web folder (npr u slučaju xammp-a index.php sa svim fajlovima mora biti u htdocs), a ne neki podfolder. Alternativa ovome bila bi relativna putanja npr: include('../includes/config.php');

Tabela je u generisana pomoću for petlje u PHP-u, i stil tabele je urađen tako da prestavlja tabelu sa slike u projektnom zadatku.

U "calculator.class.php" nalazi se klasa Kalkulator sa metodom za izračunavanje proizvoda; a u "config.php" nalazi se kod za povezivanje sa mysql bazom podataka.

U index.php pored tabele nalazi se i dio koda za pozivanje metode za računanje proizvoda i smiještanje rezultata i faktora pri množenju u bazu podataka. Nisam bio u mogućnosti da uradim dio kada pomoću klika treba izdvojiti ćeliju iz tabele pa sam samo napravio promjenjive f1 i f2 i dodijelio im vrijednosti da bi mogao da nastavim sa zadatkom. datum i vrijeme sam odradio pomoću ugrađene funkcije date(); vodeći računa da bude u istom formatu u kakvom mora biti da bi se upisala u mySQL bazu kao tip datetime.



