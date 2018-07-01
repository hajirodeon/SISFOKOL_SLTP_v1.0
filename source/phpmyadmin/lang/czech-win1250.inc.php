<?php
/* $Id: czech-win1250.inc.php,v 1.92 2001/10/19 10:45:34 loic1 Exp $ */

$charset = 'windows-1250';
$left_font_family = '"verdana CE", "Arial CE", verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = '"verdana CE", "Arial CE", helvetica, arial, geneva, sans-serif';
$number_thousands_separator = ' ';
$number_decimal_separator = '.';
$byteUnits = array('Bajt�', 'KB', 'MB', 'GB');

$day_of_week = array('Ned�le', 'Pond�l�', '�ter�', 'St�eda', '�tvrtek', 'P�tek', 'Sobota');
$month = array('ledna', '�nora', 'b�ezna', 'dubna', 'kv�tna', '�ervna', '�ervence', 'srpna', 'z���', '��jna', 'listopadu', 'prosince');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%a %e. %b %Y, %H:%M';


$strAccessDenied = 'P��stup odep�en';
$strAction = 'Akce';
$strAddDeleteColumn = 'P�idat/Smazat sloupec pol�';
$strAddDeleteRow = 'P�idat/Smazat ��dek s podm�nkou';
$strAddNewField = 'P�idat nov� pole';
$strAddPriv = 'P�idat nov� privilegium';
$strAddPrivMessage = 'Opr�vn�n� bylo p�id�no.';
$strAddSearchConditions = 'P�idat vyhled�vac� parametry (obsah dotazu po p��kazu "WHERE"):';
$strAddUser = 'P�idat nov�ho u�ivatele';
$strAddUserMessage = 'U�ivatel byl p�id�n.';
$strAffectedRows = 'Ovlivn�n� ��dky:';
$strAfter = 'Po';
$strAll = 'V�echno';
$strAlterOrderBy = 'Zm�nit po�ad� tabulky podle';
$strAnalyzeTable = 'Analyzovat tabulku';
$strAnd = 'a';
$strAnIndex = 'K tabulce %s byl p�id�n index';
$strAny = 'Jak�koliv';
$strAnyColumn = 'Jak�koliv sloupec';
$strAnyDatabase = 'Jak�koliv datab�ze';
$strAnyHost = 'Jak�koliv hostitel';
$strAnyTable = 'Jak�koliv tabulka';
$strAnyUser = 'Jak�koliv u�ivatel';
$strAPrimaryKey = 'V tabulce %s byl vytvo�en prim�rn� kl��';
$strAscending = 'Vzestupn�';
$strAtBeginningOfTable = 'Na za��tku tabulky';
$strAtEndOfTable = 'Na konci tabulky';
$strAttr = 'Atributy';

$strBack = 'Zp�t';
$strBinary = ' Bin�rn� ';
$strBinaryDoNotEdit = ' Bin�rn� - neupravujte ';
$strBookmarkLabel = 'N�zev';
$strBookmarkQuery = 'Obl�ben� SQL dotaz';
$strBookmarkThis = 'P�idat tento SQL dotaz do obl�ben�ch';
$strBookmarkView = 'Jen zobrazit';
$strBrowse = 'Proj�t';
$strBzip = '"zabzipov�no"';

$strCantLoadMySQL = 'nelze nahr�t roz���en� pro MySQL,<br />pros�m zkontrolujte nastaven� PHP.';
$strCarriage = 'N�vrat voz�ku (CR): \\r';
$strChange = 'Zm�nit';
$strCheckAll = 'Za�krtnout v�e';
$strCheckDbPriv = 'Zkontrolovat opr�vn�n� pro datab�zi';
$strCheckTable = 'Zkontrolovat tabulku';
$strColumn = 'Sloupec';
$strColumnNames = 'N�zvy sloupc�';
$strCompleteInserts = 'Upln� inserty';
$strConfirm = 'Opravdu chcete toto prov�st?';
$strCopyTable = 'Kop�rovat tabulku do (datab�ze<b>.</b>tabulka):';
$strCopyTableOK = 'Tabulka %s byla zkop�rov�na do %s.';
$strCreate = 'Vytvo�it';
$strCreateNewDatabase = 'Vytvo�it novou datab�zi';
$strCreateNewTable = 'Vytvo�it novou tabulku v datab�zi ';
$strCriteria = 'Podm�nka';

$strData = 'Data';
$strDatabase = 'Datab�ze ';
$strDatabaseHasBeenDropped = 'Datab�ze %s byla zru�ena.';
$strDatabases = 'datab�ze';
$strDatabasesStats = 'Statistiky datab�ze';
$strDataOnly = ' Jen data ';
$strDefault = 'V�choz�';
$strDelete = 'Smazat';
$strDeleted = '��dek byl smaz�n';
$strDeletedRows = 'Smazan� ��dky:';
$strDeleteFailed = 'Smaz�n� selhalo!';
$strDeleteUserMessage = 'Byl smaz�n u�ivatel %s.';
$strDescending = 'Sestupn�';
$strDisplay = 'Zobrazit';
$strDisplayOrder = 'Se�adit podle:';
$strDoAQuery = 'Prov�st "dotaz podle p��kladu" (�ol�k: "%")';
$strDocu = 'Dokumentace';
$strDoYouReally = 'Opravdu si p�eje� vykonat p��kaz ';
$strDrop = 'Odstranit';
$strDropDB = 'Odstranit datab�zi ';
$strDropTable = 'Smazat tabulku';
$strDumpingData = 'Dumpuji data pro tabulku';
$strDynamic = 'dynamick�';

$strEdit = 'Upravit';
$strEditPrivileges = 'Upravit opr�vn�n�';
$strEffective = 'Efektivn�';
$strEmpty = 'Vypr�zdnit';
$strEmptyResultSet = 'MySQL vr�til pr�zdn� v�sledek (tj. nulov� po�et ��dk�).';
$strEnd = 'Konec';
$strEnglishPrivileges = ' Pozn�mka: n�zvy opr�vn�n� v MySQL jsou uv�d�na anglicky ';
$strError = 'Chyba';
$strExtendedInserts = 'Roz���en� inserty';
$strExtra = 'Extra'; 

$strField = 'Sloupec';
$strFieldHasBeenDropped = 'Sloupec %s byl odstran�n';
$strFields = 'Po�et sloupc�';
$strFieldsEmpty = ' Nebyl zad�n po�et sloupc�! ';
$strFieldsEnclosedBy = 'N�zvy sloupc� uzav�en� do';
$strFieldsEscapedBy = 'N�zvy sloupc� escapov�ny';
$strFieldsTerminatedBy = 'Sloupce odd�len�';
$strFixed = 'pevn�'; 
$strFlushTable = 'Vypr�zdnit cache pro tabulku ("FLUSH")';
$strFormat = 'Form�t'; 
$strFormEmpty = 'Chyb�j�c� hodnota ve formul��i !';
$strFullText = 'Cel� texty';
$strFunction = 'Funkce';

$strGenTime = 'Vygenerov�no:'; 
$strGo = 'Prove�';
$strGrants = 'Opr�vn�n�';
$strGzip = '"zagzipov�no"';  

$strHasBeenAltered = 'byla zm�n�na.';
$strHasBeenCreated = 'byla vytvo�ena.';
$strHome = '�vod';
$strHomepageOfficial = ' Ofici�ln� str�nka phpMyAdmina ';
$strHomepageSourceforge = ' nov� str�nka phpMyAdmina ';
$strHost = 'Hostitel';
$strHostEmpty = 'Jm�no hostitele je pr�zdn�!';

$strIdxFulltext = 'Fulltext';
$strIfYouWish = 'Pokud si p�eje� nat�hnout jenom ur�it� sloupce z tabulky,
specifikuj je jako seznam pol� odd�len�ch ��rkou.';
$strIndex = 'Index';
$strIndexes = 'Indexy'; 
$strIndexHasBeenDropped = 'Index %s byl odstran�n';
$strInsert = 'Vlo�it';
$strInsertAsNewRow = ' Vlo�it jako nov� ��dek ';
$strInsertedRows = 'Vlo�eno ��dk�:';
$strInsertNewRow = 'Vlo�it nov� ��dek';
$strInsertTextfiles = 'Vlo�it textov� soubory do tabulky';
$strInstructions = 'Instrukce';
$strInUse = 'pr�v� se pou��v�'; 
$strInvalidName = '"%s" je rezervovan� slovo a proto ho nem��ete po��t jako jm�no datab�ze/tabulky/sloupce.';

$strKeepPass = 'Nem�nit heslo';
$strKeyname = 'Kl��ovy n�zev';
$strKill = ' Zab�t ';

$strLength = 'D�lka';
$strLengthSet = 'D�lka/Set*';
$strLimitNumRows = 'z�znamu na str�nku';
$strLineFeed = 'Ukon�en� ��dku (Linefeed): \\n';
$strLines = '��dek';
$strLinesTerminatedBy = '��dky ukon�en�';
$strLocationTextfile = 'Um�st�n� textov�ho souboru';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = 'Odhl�sit se';

$strModifications = 'Zm�ny byly ulo�eny';
$strModify = '�pravy';
$strMoveTable = 'P�esunout tabulku do (datab�ze<b>.</b>tabulka):';
$strMoveTableOK = 'Tabulka %s byla p�esunuta do %s.';
$strMySQLReloaded = 'MySQL znovu-na�tena.';
$strMySQLSaid = 'MySQL hl�s�: ';
$strMySQLShowProcess = 'Zobraz procesy';
$strMySQLShowStatus = 'Uk�zat MySQL runtime informace';
$strMySQLShowVars = 'Uk�zat MySQL syst�mov� prom�nn�';

$strName = 'N�zev';
$strNbRecords = '��dk�';
$strNext = 'Dal��';
$strNo = 'Ne';
$strNoDatabases = '��dn� datab�ze';
$strNoDropDatabases = 'P��kaz "DROP DATABASE" je vypnut�.';
$strNoFrames = 'phpMyAdmin se l�pe pou��v� v prohl�e�i podporuj�c�m r�my ("FRAME").';
$strNoModification = '��dn� zm�na';
$strNoPassword = '��dn� heslo';
$strNoPrivileges = '��dn� opr�vn�n�';
$strNoQuery = '��dn� SQL dotaz!';
$strNoRights = 'Nem�te dostate�n� pr�va na proveden� t�to akce!';
$strNoTablesFound = 'V datab�zi nebyla nalezena ani jedna tabulka.';
$strNotNumber = 'Toto nen� ��slo!';  
$strNotValidNumber = ' nen� platn� ��slo ��dku!'; 
$strNoUsersFound = '��dn� u�ivatel nenalezen.';
$strNull = 'Nulov�';
$strNumberIndexes = ' Po�et roz���en�ch index� ';

$strOftenQuotation = '�asto uvozuj�c� znaky. OPTIONALLY znamen�, �e pouze pole
typu CHAR a VARCHAR jsou uzav�eny do "uzav�rac�ch " znak�.';
$strOptimizeTable = 'Optimalizovat tabulku';
$strOptionalControls = 'Voliteln�. Ur�uje jak zapisovat nebo ��st speci�ln� znaky.';
$strOptionally = 'Voliteln�';
$strOr = 'nebo';
$strOverhead = 'Nav�c'; 

$strPartialText = 'Zkr�cen� texty';
$strPassword = 'Heslo';
$strPasswordEmpty = 'Heslo je pr�zdn�!';
$strPasswordNotSame = 'Hesla nejsou stejn�!';
$strPHPVersion = 'Verze PHP';
$strPmaDocumentation = 'Dokumentace phpMyAdmina';
$strPos1 = 'Za��tek';
$strPrevious = 'P�edchoz�';
$strPrimary = 'Prim�rn�';
$strPrimaryKey = 'Prim�rn� kl��';
$strPrimaryKeyHasBeenDropped = 'Prim�rn� kl�� byl odstran�n';
$strPrintView = 'N�hled k vyti�t�n�';
$strPrivileges = 'Opr�vn�n�';
$strProperties = 'Vlastnosti';

$strQBE = 'Dotaz podle p��kladu';
$strQBEDel = 'p�idat';
$strQBEIns = 'smazat';
$strQueryOnDb = 'SQL dotaz na datab�zi ';

$strRecords = 'Z�znam�';
$strReloadFailed = 'Znovuna�ten� MySQL selhalo.';
$strReloadMySQL = 'Znovuna�ten� MySQL';
$strRememberReload = 'Nezapome�te reloadovat server.';
$strRenameTable = 'P�ejmenovat tabulku na';
$strRenameTableOK = 'Tabulka %s byla p�ejmenov�na na %s';
$strRepairTable = 'Opravit tabulku';
$strReplace = 'P�epsat';
$strReplaceTable = 'P�epsat data tabulky souborem';
$strReset = 'P�vodn� (reset)';
$strReType = 'Napsat znovu';
$strRevoke = 'Zru�it';
$strRevokeGrant = 'Zru�it povolen� p�id�lovat pr�va';
$strRevokeGrantMessage = 'Bylo zru�eno opr�vn�n� p�id�lovat pr�va pro';
$strRevokeMessage = 'Byla zru�ena pr�va pro';
$strRevokePriv = 'Zru�it pr�va';
$strRowLength = 'D�lka ��dku'; 
$strRows = '��dk�'; 
$strRowsFrom = '��dk� za��naj�c� od';
$strRowSize = ' Velikost ��dku '; 
$strRowsStatistic = 'Statistika ��dk�'; 
$strRunning = 'b��c� na ';
$strRunningAs = 'jako';
$strRunQuery = 'Prov�st dotaz';
$strRunSQLQuery = 'Spustit SQL dotaz(y) na datab�zi %s';

$strSave = 'Ulo�';
$strSelect = 'Vybrat';
$strSelectFields = 'Zvol pole (alespo� jedno):';
$strSelectNumRows = 'v dotazu';
$strSend = 'Po�li';
$strSequence = 'Sekv.';
$strServerChoice = 'V�b�r serveru';
$strServerVersion = 'Verze serveru'; 
$strSetEnumVal = 'Pokud je pole typu "enum" nebo "set", zad�vejte hodnoty v n�sleduj�c�m form�tu: \'a\',\'b\',\'c\'...<br />Pokud pot�ebujete zadat zp�tn� lom�tko ("\") nebo jednoduch� uvozovky ("\'") mezi t�mito hodnotami, napi�te p�ed n� zp�tn� lom�tko (p��klad: \'\\\\xyz\' nebo \'a\\\'b\').';
$strShow = 'Zobraz';
$strShowAll = 'Zobrazit v�e';
$strShowCols = 'Zobrazit sloupce';
$strShowingRecords = 'Zobrazeny z�znamy ';
$strShowPHPInfo = 'Zobrazit informace o PHP';
$strShowTables = 'Zobrazit tabulky';
$strShowThisQuery = ' Zobrazit zde tento dotaz znovu ';
$strSingly = '(po jednom)';
$strSize = 'Velikost'; 
$strSort = '�adit';
$strSpaceUsage = 'Vyu�it� m�sta'; 
$strSQLQuery = 'SQL-dotaz';
$strStartingRecord = 'Po��te�n� z�znam';
$strStatement = '�daj'; 
$strStrucCSV = 'CSV data';
$strStrucData = 'Strukturu a data';
$strStrucDrop = 'P�idej \'DROP TABLE\'';
$strStrucExcelCSV = 'CSV data pro Ms Excel';
$strStrucOnly = 'Pouze strukturu';
$strSubmit = 'Ode�li';
$strSuccess = 'Tv�j SQL-dotaz byl �sp�n� vykon�n';
$strSum = 'Celkem'; 

$strTable = 'Tabulka ';
$strTableComments = 'Koment��e k tabulce';
$strTableEmpty = 'Jm�no tabulky je pr�zdn�!';
$strTableHasBeenDropped = 'Tabulka %s byla odstran�na';
$strTableHasBeenEmptied = 'Tabulka %s byla vypr�zdn�na';
$strTableHasBeenFlushed = 'Cache pro tabulku %s bula vypr�zdn�na';
$strTableMaintenance = ' �dr�ba tabulky ';
$strTables = '%s tabulek';
$strTableStructure = 'Struktura tabulky';
$strTableType = 'Typ tabulky';
$strTextAreaLength = ' Toto pole mo�n� nep�jde <br />(kv�li d�lce) upravit ';
$strTheContent = 'Obsah tv�ho souboru byl vlo�en';
$strTheContents = 'Obsah souboru p�ep�e obsah zvolen� tabulky v t�ch ��dc�ch, kde je identick� prim�rn� nebo unik�tn� kl��.';
$strTheTerminator = 'Ukon�en� pol�.';
$strTotal = 'celkem';
$strType = 'Typ';

$strUncheckAll = 'Od�krtnout v�e';
$strUnique = 'Unik�tn�';
$strUpdatePrivMessage = 'Byla aktualizovana opr�vn�n� pro %s.';
$strUpdateProfile = 'Zm�ny profilu:';
$strUpdateProfileMessage = 'Profil byl zm�n�n.';
$strUpdateQuery = 'Aktualizovat dotaz';
$strUsage = 'Pou��v�'; 
$strUseBackquotes = 'Pou��t zp�tn� uvozovky u jmen tabulek a pol�';
$strUser = 'U�ivatel';
$strUserEmpty = 'Jm�no u�ivatele je pr�zdn�!';
$strUserName = 'Jm�no u�ivatele';
$strUsers = 'U�ivatel�';
$strUseTables = 'Pou��t tabulky';

$strValue = 'Hodnota';
$strViewDump = 'Uka� v�pis (dump) tabulky';
$strViewDumpDB = 'Uka� v�pis (dump) datab�ze';

$strWelcome = 'V�tej v ';
$strWithChecked = 'Za�krtnut�:';
$strWrongUser = '�patn� u�ivatelsk� jm�no/heslo. P��stup odep�en.';

$strYes = 'Ano';

$strZip = '"zazipov�no"';
?>
