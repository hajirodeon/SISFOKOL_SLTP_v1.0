<?php
/* $Id: polish.inc.php,v 1.85 2001/10/22 22:06:27 lem9 Exp $ */

$charset = 'iso-8859-2';
$left_font_family = 'verdana, helvetica, arial ce, arial, sans-serif';
$right_font_family = 'helvetica, arial ce, arial, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
$byteUnits = array('bajt�w', 'KB', 'MB', 'GB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';


$strAccessDenied = 'Brak dost�pu';
$strAction = 'Dzia�anie';
$strAddDeleteColumn = 'Dodanie/usuni�cie p�l';
$strAddDeleteRow = 'Dodanie/usuni�cie wiersz�w kryteri�w';
$strAddNewField = 'Dodanie nowego pola';
$strAddPriv = 'Dodanie nowych uprawnien';
$strAddPrivMessage = 'Dodane zosta�y nowe uprawnienia.';
$strAddSearchConditions = 'Dodanie warunk�w przeszukiwania (warunek dla "where"):';
$strAddUser = 'Dodanie nowego u�ytkownika';
$strAddUserMessage = 'Dodany zosta� nowy uzytkownik.';
$strAffectedRows = 'Zmodyfikowanych rekord�w:';
$strAfter = 'Po';
$strAll = 'Wszystko';
$strAlterOrderBy = 'Sortowanie tabeli wg';
$strAnalyzeTable = 'Analizowanie tabeli';
$strAnd = 'Oraz';
$strAnIndex = 'Do %s dodany zostal indeks';
$strAny = 'Dowolny';
$strAnyColumn = 'Dowolna kolumna';
$strAnyDatabase = 'Dowolna baza danych';
$strAnyHost = 'Dowolny host';
$strAnyTable = 'Dowolna tabela';
$strAnyUser = 'Dowolny u�ytkownik';
$strAPrimaryKey = 'Do %s dodany zostal klucz podstawowy';
$strAscending = 'Rosnaco';
$strAtBeginningOfTable = 'Na pocz�tku tabeli';
$strAtEndOfTable = 'Na ko�cu tabeli';
$strAttr = 'Atrybuty';

$strBack = 'Powr�t';
$strBinary = ' Binarne ';
$strBinaryDoNotEdit = ' Binarne - nie do edycji ';
$strBookmarkLabel = 'Nazwa';
$strBookmarkQuery = 'Zapami�tane zapytanie SQL';
$strBookmarkThis = 'Zapami�tanie zapytania SQL';
$strBookmarkView = 'Tylko do pokazania';
$strBrowse = 'Przegl�danie';
$strBzip = '".bz2"';

$strCantLoadMySQL = 'nie mo�na za�adowac modu�u MySQL,<br />prosz� sprawdzi� konfiguracj� PHP.';
$strCarriage = 'Znak powrotu: \\r';
$strChange = 'Zmiana';
$strCheckAll = 'Zaznaczenie wszystkich';
$strCheckDbPriv = 'Sprawdzanie uprawnie� dla bazy danych';
$strCheckTable = 'Sprawdzanie tabeli';
$strColumn = 'Kolumna';
$strColumnNames = 'Nazwy kolumn';
$strCompleteInserts = 'Pe�ne dodania';
$strConfirm = 'Czy na pewno to zrobic?';
$strCopyTableOK = 'Tabela %s zosta�a przekopiowana do %s.';
$strCreate = 'Utworzenie';
$strCreateNewDatabase = 'Utworzenie nowej bazy danych';
$strCreateNewTable = 'Utworzenie nowej tabeli dla bazy danych ';
$strCriteria = 'Kryteria';

$strData = 'Dane';
$strDatabase = 'Baza danych ';
$strDatabaseHasBeenDropped = 'Baza danych %s zostala usunieta.';
$strDatabases = 'bazy danych';
$strDatabasesStats = 'Statystyki baz danych';
$strDataOnly = 'Tylko dane';
$strDefault = 'Domy�lnie';
$strDelete = 'Skasowanie';
$strDeleted = 'Rekord zosta� skasowany';
$strDeletedRows = 'Skasowane rekordy:';
$strDeleteFailed = 'Kasowanie nie powiod�o sie!';
$strDeleteUserMessage = 'Usunales uzytkownika  %s.';
$strDescending = 'Malej�co';
$strDisplay = 'Poka�';
$strDisplayOrder = 'Kolejno�� wy�wietlania:';
$strDoAQuery = 'Wykonaj "zapytanie przez przyk�ad" (znak globalny: "%")';
$strDocu = 'Dokumentacja';
$strDoYouReally = 'Czy na pewno wykona� ';
$strDrop = 'Usuni�cie';
$strDropDB = 'Usuni�cie bazy danych ';
$strDropTable = 'Usuni�cie tabeli';
$strDumpingData = 'Zrzut danych dla tabeli';
$strDynamic = 'zmienny';

$strEdit = 'Edycja';
$strEditPrivileges = 'Edycja uprawnie�';
$strEffective = 'Efektywne';
$strEmpty = 'Wyczyszczenie';
$strEmptyResultSet = 'MySQL zwr�ci� pusty wynik (np. zero rekord�w).';
$strEnd = 'Koniec';
$strEnglishPrivileges = ' Uwaga: Uprawnienia MySQL s� oznaczone w j�z. angielskim ';
$strError = 'B��d';
$strExtra = 'Dodatkowy';

$strField = 'Pole';
$strFieldHasBeenDropped = 'Pole %s zostalo usuniete';
$strFields = 'Pola';
$strFieldsEmpty = ' Pole count jest puste! ';
$strFieldsEnclosedBy = 'Pola zawarte w';
$strFieldsEscapedBy = 'Pola poprzedzone przez';
$strFieldsTerminatedBy = 'Pola oddzielane przez';
$strFixed = 'sta�y';
$strFlushTable = 'Prze�adowanie tabeli ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Brakuj�ca warto�� w formularzu!';
$strFullText = 'Pe�ny tekst';
$strFunction = 'Funkcja';

$strGenTime = 'Czas wygenerowania';
$strGo = 'Wykonanie';
$strGrants = 'Nadanie';
$strGzip = '".gz"';

$strHasBeenAltered = 'zosta�o zamienione.';
$strHasBeenCreated = 'zosta�o utworzone.';
$strHome = 'Wej�cie';
$strHomepageOfficial = 'Oficjalna strona phpMyAdmin';
$strHomepageSourceforge = 'Pobranie wersji Sourceforge phpMyAdmin';
$strHost = 'Host';
$strHostEmpty = 'Brak nazwy hosta!';

$strIdxFulltext = 'Pelny tekst';
$strIfYouWish = 'Prosze poda� list� kolumn rozdzielon� przecinkami aby za�adowa� tylko wybrane kolumny.';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Klucz %s zostal usuniety';
$strIndexes = 'Indeksy';
$strInsert = 'Dodanie';
$strInsertAsNewRow = 'Dodanie jako nowego rekordu';
$strInsertNewRow = 'Dodanie nowego rekordu';
$strInsertTextfiles = 'Dodanie pliku tekstowego do tabeli';
$strInsertedRows = 'Wprowadzone rekordy:';
$strInstructions = 'Instrukcje';
$strInUse = 'w u�yciu';
$strInvalidName = '"%s" jest slowem zarezerwowanym, nie mozna uzyc go jako nazwy bazy danych/tabeli/pola.'; 

$strKeepPass = 'Nie zmieniaj hasla';
$strKeyname = 'Nazwa klucza';
$strKill = 'Zabicie';

$strLength = 'D�ugo��';
$strLengthSet = 'D�ugo��/Warto�ci*';
$strLimitNumRows = 'rekord�w na stronie';
$strLineFeed = 'Kod wysuni�cia linii: \\n';
$strLines = 'Linie';
$strLinesTerminatedBy = 'Linie konczone przez';
$strLocationTextfile = 'Lokalizacja pliku tekstowego';
$strLogin = 'Zalogowanie';
$strLogout = 'Wylogowanie';

$strModifications = 'Modyfikacje zosta�y zapami�tane';
$strModify = 'Modifikacja';
$strMySQLReloaded = 'MySQL prze�adowany.';
$strMySQLSaid = 'MySQL zwr�ci� komunikat: ';
$strMySQLShowProcess = 'Pokazuj procesy';
$strMySQLShowStatus = 'Informacje o stanie serwera MySQL';
$strMySQLShowVars = 'Zmienne systemowe serwera MySQL';

$strName = 'Nazwa';
$strNbRecords = 'Ile';
$strNext = 'Nast�pne';
$strNo = 'Nie';
$strNoDatabases = 'Brak baz danych';
$strNoDropDatabases = 'Polecenie "DROP DATABASE" jest zablokowane.';
$strNoFrames='phpMyAdmin jest bardziej przyjazny w przegl�darkach <b>obs�uguj�cych ramki</b>';
$strNoModification = 'Bez zmian';
$strNoPassword = 'Brak has�a';
$strNoPrivileges = 'Brak uprawnie�';
$strNoRights = 'Brak wystarczajacych uprawnie�!';
$strNoTablesFound = 'Nie znaleziono tabeli w bazie danych.';
$strNotNumber = 'To nie jest liczba!';
$strNotValidNumber = ' nie jest poprawnym numerem rekordu!';
$strNoUsersFound = 'Nie znaleziono u�ytkownika(�w).';
$strNull = 'Null';
$strNumberIndexes = ' ilo�� zaawansowanych indeks�w ';

$strOftenQuotation = 'Znaki cudzys�owu. OPCJONALNIE oznacza, �e tylko pola char oraz varchar s� zawarte w "cudzys�owach".';
$strOptimizeTable = 'Optymalizacja tabeli';
$strOptionalControls = 'Opcjonalnie. Okre�lenie w jaki spos�b zapisa� lub odczyta� znaki specjalne.';
$strOptionally = 'OPCJONALNIE';
$strOr = 'Lub';
$strOverhead = 'Nadmiar';

$strPartialText = 'Skr�cony tekst';
$strPassword = 'Has�o';
$strPasswordEmpty = 'Puste has�o!';
$strPasswordNotSame = 'Has�a nie s� identyczne!';
$strPHPVersion = 'Wersja PHP';
$strPmaDocumentation = 'Dokumentacja dla phpMyAdmin';
$strPos1 = 'Poczatek';
$strPrevious = 'Poprzednie';
$strPrimary = 'Podstawowy';
$strPrimaryKey = 'Podstawowy klucz';
$strPrimaryKeyHasBeenDropped = 'Klucz podstawowy zostal usuniety';
$strPrintView = 'Widok do wydruku';
$strPrivileges = 'Uprawnienia';
$strProperties = 'W�asciwo�ci';

$strQBE = 'Zapytanie przez przyk�ad';
$strQBEDel = 'Usu�'; 
$strQBEIns = 'Wstaw';
$strQueryOnDb = 'Zapytanie SQL dla bazy danych ';

$strRecords = 'Rekordy';
$strReloadFailed = 'Nie powiod�o si� prze�adowanie MySQL.';
$strReloadMySQL = 'Prze�adowanie MySQL';
$strRememberReload = 'Prosz� pami�ta� o prze�adowaniu serwera.';
$strRenameTable = 'Zmiana nazwy tabeli na';
$strRenameTableOK = 'Tabela %s ma zmienion� nazw� na %s';
$strRepairTable = 'Naprawienie tabeli';
$strReplace = 'Zamiana';
$strReplaceTable = 'Zamiana danych tabeli z plikiem';
$strReset = 'Reset';
$strReType = 'Ponownie';
$strRevoke = 'Cofni�cie';
$strRevokeGrant = 'Cofni�cie uprawnie�';
$strRevokeGrantMessage = 'Cofni�te zosta�y uprawnienia dla';
$strRevokeMessage = 'Cofni�te zosta�y uprawnienia dla';
$strRevokePriv = 'Cofni�cie uprawnie�';
$strRowLength = 'D�ugo�� rekordu';
$strRows = 'Ilo�� rekord�w';
$strRowSize = ' Rozmiar rekordu ';
$strRowsFrom = 'rekord�w pocz�wszy od';
$strRowsStatistic = 'Statystyka rekord�w';
$strRunning = 'uruchomiony na ';
$strRunningAs = 'jako';
$strRunQuery = 'Wykonanie zapytania';
$strRunSQLQuery = 'Wykonanie zapytania/zapytan SQL do bazy danych %s';

$strSave = 'Zachowanie';
$strSelect = 'Wyb�r';
$strSelectFields = 'Wyb�r p�l (co najmniej jedno):';
$strSelectNumRows = 'w zapytaniu';
$strSend = 'wys�anie';
$strServerChoice = 'Wyb�r serwera';
$strSequence = 'Sekwencja';
$strServerVersion = 'Wersja serwera';
$strSetEnumVal = 'Je�eli pole jest typu "ENUM" lub "SET", warto�ci wprowadza si� w formacie: \'a\',\'b\',\'c\'...<br />Je�eli potrzeba wprowadzi� odwrotny uko�nik ("\") lub apostrof ("\'"), nale�y je poprzedzi� odwrotnym uko�nikiem (np.: \'\\\\xyz\' lub \'a\\\'b\').';
$strShow = 'Pokazanie';
$strShowAll = 'Pokazanie wszystkiego';
$strShowCols = 'Pokazanie kolumn';
$strShowPHPInfo = 'Informacje o PHP';
$strShowTables = 'Pokazanie tabel';
$strShowThisQuery = ' Ponowne wywo�anie tego zapytania ';
$strShowingRecords = 'Pokazanie rekord�w ';
$strSingly = '(pojedynczo)';
$strSize = 'Rozmiar';
$strSort = 'Sortuj';
$strSpaceUsage = 'Wykorzystanie przestrzeni';
$strSQLQuery = 'zapytanie SQL';
$strStartingRecord = 'Rozpoczecie rekordu';
$strStatement = 'Cecha';
$strStrucCSV = 'dane CSV';
$strStrucData = 'Struktura i dane';
$strStrucDrop = 'Dodanie \'drop table\'';
$strStrucExcelCSV = 'CSV dla MS Excel';
$strStrucOnly = 'Tylko struktura';
$strSubmit = 'Wys�anie';
$strSuccess = 'Zapytanie SQL zosta�o pomy�lnie wykonane';
$strSum = 'Suma';

$strTable = 'tabela ';
$strTableComments = 'Komentarze tabeli';
$strTableEmpty = 'Brak nazwy tabeli!';
$strTableHasBeenDropped = 'Tabela %s zostala usunieta';
$strTableHasBeenEmptied = 'Tabela %s zostala opr�zniona';
$strTableHasBeenFlushed = 'Tabela %s zosta�a prze�adowana';
$strTableMaintenance = 'Zarz�dzanie tabel�';
$strTableStructure = 'Struktura tabeli dla ';
$strTableType = 'Typ tabeli';
$strTables = '%s tabel(a)';
$strTextAreaLength = ' To pole mo�e nie by� edytowalne,<br /> z powodu swojej d�ugo�ci ';
$strTheContent = 'Zawarto�� pliku zosta�a do��czona.';
$strTheContents = 'Zawarto�� pliku zastapi�a dane wybranej tabeli, kt�rych podstawowy lub unikalny klucz by� identyczny.';
$strTheTerminator = 'Znak rozdzielaj�cy pola.';
$strTotal = 'wszystkich';
$strType = 'Typ';

$strUncheckAll = 'Odznaczenie wszystkich';
$strUnique = 'Unikalny';
$strUpdatePrivMessage = 'Uaktualniles uprawnienia dla %s.';
$strUpdateProfile = 'Uaktualnienie profilu:';
$strUpdateProfileMessage = 'Profil zostal uaktualniony.';
$strUpdateQuery = 'Zmiana zapytania';
$strUsage = 'Wykorzystanie';
$strUseBackquotes = 'U�ycie cudzys�ow�w z nazwami tabel i p�l';
$strUser = 'U�ytkownik';
$strUserEmpty = 'Brak nazwy u�ytkownika!';
$strUserName = 'Nazwa u�ytkownika';
$strUsers = 'U�ytkownicy';
$strUseTables = 'U�ycie tabel';

$strValue = 'Warto��';
$strViewDump = 'Zrzut tabeli';
$strViewDumpDB = 'Zrzut bazy danych';

$strWelcome = 'Witamy w ';
$strWithChecked = 'Zaznaczone:';
$strWrongUser = 'B��dne pola u�ytkownik/has�o. Brak dost�pu.';

$strYes = 'Tak';

$strZip = '".zip"';

// To translate
$strCopyTable = 'Copy table to (database<b>.</b>table):';
$strMoveTable = 'Move table to (database<b>.</b>table):';
$strMoveTableOK = 'Table %s has been moved to %s.';
$strNoQuery = 'No SQL query!';  //to translate
?>
