<?php
/* $Id: german.inc.php,v 1.106 2001/10/17 08:49:36 loic1 Exp $ */

$charset = 'iso-8859-1';
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, arial, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
$month = array('Jan', 'Feb', 'M�rz', 'April', 'Mai', 'Juni', 'Juli', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y um %H:%M';


$strAccessDenied = 'Zugriff verweigert.';
$strAction = 'Aktion';
$strAddDeleteColumn = 'Spalten hinzuf�gen/entfernen';
$strAddDeleteRow = 'Zeilen hinzuf�gen/entfernen';
$strAddNewField = 'Neue Feld(er) hinzuf�gen';
$strAddPriv = 'Rechte hinzuf�gen';
$strAddPrivMessage = 'Rechte wurden hinzugef�gt.';
$strAddSearchConditions = 'Suchkondition (Argumente f�r das WHERE-Statement):';
$strAddUser = 'Neuen Benutzer hinzuf�gen';
$strAddUserMessage = 'Der Benutzer wurde hinzugef�gt.';
$strAffectedRows = ' Betroffene Datens�tze: ';
$strAfter = 'Nach';
$strAll = 'Alle';
$strAlterOrderBy = 'Tabelle sortieren nach';
$strAnalyzeTable = 'Analysiere Tabelle';
$strAnd = 'und';
$strAnIndex = 'Ein Index wurde in %s erzeugt';
$strAny = 'Jeder';
$strAnyColumn = 'Jede Spalte';
$strAnyDatabase = 'Jede Datenbank';
$strAnyHost = 'Jeder Host';
$strAnyTable = 'Jede Tabelle';
$strAnyUser = 'Jeder Benutzer';
$strAPrimaryKey = 'Ein Prim�rschl�ssel wurde in %s erzeugt';
$strAscending = 'aufsteigend';
$strAtBeginningOfTable = 'An den Anfang der Tabelle';
$strAtEndOfTable = 'An das Ende der Tabelle';
$strAttr = 'Attribute';

$strBack = 'Zur�ck';
$strBinary = ' Bin�r ';
$strBinaryDoNotEdit = ' Bin�r - nicht editierbar !';
$strBookmarkLabel = 'Titel';
$strBookmarkQuery = 'Gespeicherte SQL-Abfrage';
$strBookmarkThis = 'SQL-Abfrage speichern';
$strBookmarkView = 'Nur zeigen';
$strBrowse = 'Anzeigen';
$strBzip = '"BZip komprimiert"';

$strCantLoadMySQL = 'MySQL Erweiterung konnte nicht geladen werden,<br />bitte PHP Konfiguration �berpr�fen.';
$strCarriage = 'Wagenr�cklauf \\r';
$strChange = '�ndern';
$strCheckAll = 'Alle ausw�hlen';
$strCheckDbPriv = 'Rechte einer Datenbank pr�fen';
$strCheckTable = '�berpr�fe Tabelle';
$strColumn = 'Spalte';
$strColumnNames = 'Spaltennamen';
$strCompleteInserts = 'Vollst�ndige \'INSERT\'s';
$strConfirm = 'Bist du dir wirklich sicher?';
$strCopyTable = 'Kopiere Tabelle nach (Datenbank<b>.</b>Tabellenname):';
$strCopyTableOK = 'Tabelle %s wurde kopiert nach %s.';
$strCreate = 'Erzeugen';
$strCreateNewDatabase = 'Neue Datenbank erzeugen';
$strCreateNewTable = 'Neue Tabelle erstellen in Datenbank ';
$strCriteria = 'Kriterium';

$strData = 'Daten';
$strDatabase = 'Datenbank ';
$strDatabaseHasBeenDropped = 'Datenbank %s wurde gel�scht.';
$strDatabases = 'Datenbanken';
$strDatabasesStats = 'Statistiken �ber alle Datenbanken';
$strDataOnly = 'Nur Daten';
$strDefault = 'Standard';
$strDelete = 'L�schen';
$strDeleted = 'Die Zeile wurde gel�scht.';
$strDeletedRows = 'Gel�schte Zeilen:';
$strDeleteFailed = 'L�schen fehlgeschlagen!';
$strDeleteUserMessage = 'Der Benutzer wurde gel�scht %s.';
$strDescending = 'absteigend';
$strDisplay = 'Zeige';
$strDisplayOrder = 'Sortierung nach:';
$strDoAQuery = 'Suche �ber Beispielwerte ("query by example") (Platzhalter: "%")';
$strDocu = 'Dokumentation';
$strDoYouReally = 'M�chten Sie wirklich diese Abfrage ausf�hren: ';
$strDrop = 'L�schen';
$strDropDB = 'Datenbank l�schen:';
$strDropTable = 'Tabelle l�schen:';
$strDumpingData = 'Daten f�r Tabelle';
$strDynamic = 'dynamisch';

$strEdit = '�ndern';
$strEditPrivileges = 'Rechte �ndern';
$strEffective = 'Effektiv';
$strEmpty = 'Leeren';
$strEmptyResultSet = 'MySQL lieferte ein leeres Resultset zur�ck (d.h. null Zeilen).';
$strEnd = 'Ende';
$strEnglishPrivileges = ' Anmerkung: MySQL Rechtename werden in Englisch angegeben ';
$strError = 'Fehler';
$strExtendedInserts = 'Erweiterte \'INSERT\'s';
$strExtra = 'Extra';

$strField = 'Feld';
$strFields = 'Felder';
$strFieldsEmpty = ' Sie m�ssen angeben wieviele Felder die Tabelle haben soll! ';
$strFieldsEnclosedBy = 'Felder eingeschlossen von';
$strFieldsEscapedBy = 'Felder escaped von';
$strFieldsTerminatedBy = 'Felder getrennt mit';
$strFixed = 'starr';
$strFormat = 'Format';
$strFormEmpty = 'Das Formular ist leer !';
$strFullText = 'vollst�ndige Textfelder';
$strFunction = 'Funktion';

$strGenTime = 'Erstellungszeit';
$strGo = 'OK';
$strGrants = 'Rechte';
$strGzip = '"GZip komprimiert"';

$strHasBeenAltered = 'wurde ge�ndert.';
$strHasBeenCreated = 'wurde erzeugt.';
$strHome = 'Home';
$strHomepageOfficial = ' Offizielle phpMyAdmin Homepage ';
$strHomepageSourceforge = ' Sourceforge phpMyAdmin Download Homepage ';
$strHost = 'Host';
$strHostEmpty = 'Es wurde kein Host angegeben!';

$strIdxFulltext = 'Volltext';
$strIfYouWish = 'Wenn Sie nur bestimmte Spalten importieren m�chten, geben Sie diese bitte hier an.';
$strIndex = 'Index';
$strIndexes = 'Indizes';
$strInsert = 'Einf�gen';
$strInsertAsNewRow = ' Als neuen Datensatz speichern ';
$strInsertedRows = 'Eingef�gte Zeilen:';
$strInsertNewRow = 'Neue Zeile einf�gen';
$strInsertTextfiles = 'Textdatei in Tabelle einf�gen';
$strInstructions = 'Befehle';
$strInUse = 'in Benutzung';
$strInvalidName = '"%s" ist ein reserviertes Wort, welches nicht als Datenbank-, Feld- oder Tabellenname verwendet werden darf.';

$strKeepPass = 'Kennwort nicht ver�ndert';
$strKeyname = 'Name';
$strKill = 'Beenden';

$strLength = ' L�nge ';
$strLengthSet = 'L�nge/Set*';
$strLimitNumRows = 'Eintr�ge pro Seite';
$strLineFeed = 'Zeilenvorschub: \\n';
$strLines = 'Zeilen';
$strLinesTerminatedBy = 'Zeilen getrennt mit';
$strLocationTextfile = 'Datei';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = 'Neu einloggen';

$strModifications = '�nderungen gespeichert.';
$strModify = 'Ver�ndern';
$strMoveTable = 'Verschiebe Tabelle nach (Datenbank<b>.</b>Tabellenname):';
$strMoveTableOK = 'Tabelle %s wurde nach %s verschoben.';
$strMySQLReloaded = 'MySQL neu gestartet.';
$strMySQLSaid = 'MySQL meldet: ';
$strMySQLShowProcess = 'Prozesse anzeigen';
$strMySQLShowStatus = 'MySQL-Laufzeit-Informationen anzeigen';
$strMySQLShowVars = 'MySQL-System-Variablen anzeigen';

$strName = 'Name';
$strNbRecords = 'Datens�tze';
$strNext = 'N�chste';
$strNo = 'Nein';
$strNoDatabases = 'Keine Datenbanken';
$strNoDropDatabases = '"DROP DATABASE" Anweisung wurde deaktiviert.';
$strNoModification = 'Keine �nderung';
$strNoPassword = 'Kein Kennwort';
$strNoPrivileges = 'Keine Rechte';
$strNoQuery = 'Kein SQL-Befehl!';
$strNoRights = 'Du hast nicht genug Rechte um fortzufahren!';
$strNoTablesFound = 'Keine Tabellen in der Datenbank gefunden.';
$strNotNumber = 'Das ist keine Zahl!';
$strNotValidNumber = ' ist keine g�ltige Zeilennummer!';
$strNoUsersFound = 'Keine(n) Benutzer gefunden.';
$strNull = 'Null';
$strNumberIndexes = ' Anzahl der erweiterten Indizes ';

$strOftenQuotation = 'H�ufig Anf�hrungszeichen. Optional bedeutet, da� nur Textfelder von den angegeben Zeichen eingeschlossen sind.';
$strOptimizeTable = 'Optimiere Tabelle';
$strOptionalControls = 'Optional. Bestimmt, wie Sonderzeichen kenntlich gemacht werden.';
$strOptionally = 'optional';
$strOr = 'Oder';
$strOverhead = '�berhang';

$strPartialText = 'gek�rzte Textfelder';
$strPassword = 'Kennwort';
$strPasswordEmpty = 'Es wurde kein Kennwort angegeben!';
$strPasswordNotSame = 'Die eingegebenen Kennw�rter sind nicht identisch!';
$strPmaDocumentation = 'phpMyAdmin Dokumentation';
$strPHPVersion = 'PHP Version';
$strPos1 = 'Anfang';
$strPrevious = 'Vorherige';
$strPrimary = 'Prim�rschl�ssel';
$strPrimaryKey = 'Prim�rschl�ssel';
$strPrimaryKeyHasBeenDropped = 'Der Prim�rschl�ssel wurde gel�scht';
$strPrintView = 'Druckansicht';
$strPrivileges = 'Rechte';
$strProperties = 'Eigenschaften';

$strQBE = 'Suche �ber Beispielwerte';
$strQBEDel = 'Entf.';
$strQBEIns = 'Einf.';
$strQueryOnDb = ' SQL-Befehl in der Datenbank ';

$strRecords = 'Eintr�ge';
$strReloadFailed = 'MySQL Neuladen fehlgeschlagen.';
$strReloadMySQL = 'MySQL neu starten';
$strRememberReload = 'Der Server muss neugestartet werden.';
$strRenameTable = 'Tabelle umbennen in';
$strRenameTableOK = 'Tabelle %s wurde umbenannt in %s.';
$strRepairTable = 'Repariere Tabelle';
$strReplace = 'Ersetzen';
$strReplaceTable = 'Tabelleninhalt ersetzen';
$strReset = 'Zur�cksetzen';
$strReType = 'Wiederholen';
$strRevoke = 'Entfernen';
$strRevokeGrant = '\'Grant\' entfernen';
$strRevokeGrantMessage = 'Du hast das Recht \'Grant\' entfernt f�r';
$strRevokeMessage = 'Du hast die Rechte entfernt f�r';
$strRevokePriv = 'Rechte entfernen';
$strRowLength = 'Zeilenl�nge';
$strRows = 'Zeilen';
$strRowsFrom = 'Datens�tze, beginnend ab';
$strRowSize = 'Zeilengr��e';
$strRowsStatistic = 'Zeilenstatistik';
$strRunning = 'auf ';
$strRunQuery = 'SQL Befehl ausf�hren';
$strRunSQLQuery = 'SQL-Befehl(e) ausf�hren in Datenbank %s';

$strSave = 'Speichern';
$strSelect = 'Teilw. anzeigen';
$strSelectFields = 'Felder ausw�hlen (mind. eines):';
$strSelectNumRows = 'in der Abfrage';
$strSend = 'Senden';
$strSequence = ' Sequenz ';
$strServerChoice = 'Server Ausw�hlen';
$strServerVersion = 'Server Version';
$strSetEnumVal = 'Wenn das Feld vom Type \'ENUM\' oder \'SET\' ist, benutzen Sie das Format: \'a\',\'b\',\'c\',....<br />Wann immer Sie ein Backslash ("\") oder ein einfaches Anf�hrungszeichen ("\'") verwenden,<br \>setzen Sie bitte ein Backslash vor das Zeichen.  (z.B.: \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Zeige';
$strShowAll = 'Alles anzeigen';
$strShowingRecords = 'Zeige Datens�tze ';
$strShowPHPInfo = 'PHP Informationen anzeigen';
$strShowThisQuery = 'SQL Befehl hier wieder anzeigen';
$strSingly = '(einmalig)';
$strSize = 'Gr��e';
$strSort = 'Sortierung';
$strSpaceUsage = 'Speicherplatzverbrauch';
$strSQLQuery = 'SQL-Befehl';
$strStartingRecord = 'Anfangszeile';
$strStatement = 'Angaben';
$strStrucCSV = 'CSV-Daten';
$strStrucData = 'Struktur und Daten';
$strStrucDrop = 'Mit \'DROP TABLE\'';
$strStrucExcelCSV = 'CSV-Daten f�r MS Excel';
$strStrucOnly = 'Nur Struktur';
$strSubmit = 'Abschicken';
$strSuccess = 'Ihr SQL-Befehl wurde erfolgreich ausgef�hrt.';
$strSum = 'Summe';

$strTable = 'Tabelle ';
$strTableComments = 'Tabellen-Kommentar';
$strTableEmpty = 'Der Tabellenname ist leer!';
$strTableHasBeenDropped = 'Tabelle %s wurde gel�scht';
$strTableHasBeenEmptied = 'Tabelle %s wurde geleert';
$strTableMaintenance = 'Hilfsmittel';
$strTables = '%s Tabellen';
$strTableStructure = 'Tabellenstruktur f�r Tabelle';
$strTableType = 'Tabellentyp';
$strTextAreaLength = ' Wegen der L�nge ist dieses<br />Feld vieleicht nicht editierbar.';
$strTheContent = 'Der Inhalt Ihrer Datei wurde eingef�gt.';
$strTheContents = 'Der Inhalt der CSV-Datei ersetzt die Eintr�ge mit den gleichen Prim�r- oder Unique-Schl�sseln.';
$strTheTerminator = 'Der Trenner zwischen den Feldern.';
$strTotal = 'insgesamt';
$strType = 'Typ';

$strUncheckAll = 'Auswahl entfernen';
$strUnique = 'Unique';
$strUpdatePrivMessage = 'Die Rechte wurden ge�ndert %s.';
$strUpdateProfile = 'Benutzer �ndern:';
$strUpdateProfileMessage = 'Benutzer wurde ge�ndert.';
$strUpdateQuery = 'Aktualisieren';
$strUsage = 'Verbrauch';
$strUseBackquotes = ' Tabellen- und Feldnamen in einfachen Anf�hrungszeichen ';
$strUser = 'Benutzer';
$strUserEmpty = 'Kein Benutzername eingegeben!';
$strUserName = 'Benutzername';
$strUsers = 'Benutzer';
$strUseTables = 'Verwendete Tabellen';

$strValue = 'Wert';
$strViewDump = 'Dump (Schema) der Tabelle anzeigen';
$strViewDumpDB = 'Dump (Schema) der Datenbank anzeigen';

$strWelcome = 'Willkommen bei ';
$strWithChecked = 'markierte:';
$strWrongUser = 'Falscher Benutzername/Passwort. Zugriff verweigert.';

$strYes = 'Ja';

$strZip = '"Zip komprimiert"';

// To translate
$strFieldHasBeenDropped = 'Field %s has been dropped';//to translate
$strFlushTable = 'Flush the table ("FLUSH")';
$strIndexHasBeenDropped = 'Index %s has been dropped';//to translate
$strNoFrames = 'phpMyAdmin is more friendly with a <b>frames-capable</b> browser.';
$strRunningAs = 'as';
$strShowCols = 'Show columns';
$strShowTables = 'Show tables';
$strTableHasBeenFlushed = 'Table %s has been flushed';
?>
