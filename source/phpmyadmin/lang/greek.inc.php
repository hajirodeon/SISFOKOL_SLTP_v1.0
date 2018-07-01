<?php
/* $Id: greek.inc.php,v 1.19 2001/10/17 08:49:36 loic1 Exp $ */

$charset = 'iso-8859-7';
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, arial, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('���', '���', '���', '���', '���', '���', '���');
$month = array('���', '���', '���', '���', '���', '����', '����', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d %B %Y, ���� %I:%M %p';


$strAccessDenied = '������ ���������';
$strAction = '��������';
$strAddDeleteColumn = '��������/�������� ������ ������';
$strAddDeleteRow = '��������/�������� ������� ���������';
$strAddNewField = '�������� ���� ������';
$strAddPriv = '�������� ���� ���������';
$strAddPrivMessage = '���������� ��� ��������.';
$strAddSearchConditions = '�������� ���� ���� (���� ��� "where" ��������):';
$strAddUser = '�������� ���� ������';
$strAddUserMessage = '���������� ��� ��� ������.';
$strAffectedRows = '������������� �������:';
$strAfter = '���� ��';
$strAll = '���';
$strAlterOrderBy = '������ ����������� ������ ����';
$strAnalyzeTable = '������� ������';
$strAnd = '���';
$strAny = '�����������';
$strAnyColumn = '����������� �����';
$strAnyDatabase = '����������� ����';
$strAnyHost = '����������� �������';
$strAnyTable = '������������ �������';
$strAnyUser = '������������ �������';
$strAscending = '�������';
$strAtBeginningOfTable = '���� ���� �� ������';
$strAtEndOfTable = '��� ����� ��� ������';
$strAttr = '��������������';

$strBack = '����';
$strBinary = '�������';
$strBinaryDoNotEdit = '������� - ����� ���������� ������������';
$strBookmarkLabel = '�������';
$strBookmarkQuery = '������������ ��������� SQL';
$strBookmarkThis = '���������� ����� ��� ��������� SQL';
$strBookmarkView = '���� ��������';
$strBrowse = '���������';
$strBzip = '�������� �bzip�';

$strCantLoadMySQL = '��� ������ �� �������� � �������� MySQL,<br />�������� ������� ��� ������� ��� PHP.';
$strCarriage = '���������� ����������: \\r';
$strChange = '������';
$strCheckAll = '������� ����';
$strCheckDbPriv = '������� ��������� �����';
$strCheckTable = '������� ������';
$strColumn = '�����';
$strColumnNames = '������� ������';
$strCompleteInserts = '������������� ���������';
$strConfirm = '���������� ������ �� �� ���������;';
$strCopyTableOK = '� ������� %s ����������� ��� %s.';
$strCreate = '����������';
$strCreateNewDatabase = '���������� ���� �����';
$strCreateNewTable = '���������� ���� ������ ��� ���� ';
$strCriteria = '��������';

$strData = '��������';
$strDatabase = '���� ';
$strDatabases = '������';
$strDatabasesStats = '���������� �����';
$strDataOnly = '���� ��������';
$strDefault = '��������������';
$strDelete = '��������';
$strDeleted = '� ������ ���� ���������';
$strDeletedRows = '������������ �������:';
$strDeleteFailed = '� �������� �������';
$strDescending = '��������';
$strDisplay = '��������';
$strDisplayOrder = '����� ���������:';
$strDoAQuery = '�������� ��� ���������� ���� ���������� (���������� ��������� "%")';
$strDocu = '����������';
$strDoYouReally = '������ ���������� �� ';
$strDrop = '��������';
$strDropDB = '�������� ����� ';
$strDropTable = '�������� ������';
$strDumpingData = '�������� ��������� ��� ������';
$strDynamic = '��������';

$strEdit = '�����������';
$strEditPrivileges = '����������� ���������';
$strEffective = '���������������';
$strEmpty = '��������';
$strEmptyResultSet = '� MySQL ��������� ��� ����� ������ ������������� (�.�. ������ ������).';
$strEnd = '�����';
$strEnglishPrivileges = ' ��������: �� ������� ��������� ��� MySQL ����������� ��� ������� ';
$strError = '�����';
$strExtendedInserts = '����������� ���������';
$strExtra = '��������';

$strField = '�����';
$strFields = '�����';
$strFieldsEmpty = ' � ���������� ��� ������ ����� ����! ';
$strFixed = '�������������� ������';
$strFormat = '�����������';
$strFormEmpty = '�������� ���� ��� ����� !';
$strFullText = '����� �������';
$strFunction = '����������';

$strGenTime = '������ �����������';
$strGo = '��������';
$strGrants = '���������';
$strGzip = '�������� �gzip�';

$strHasBeenAltered = '���� ��������.';
$strHasBeenCreated = '���� ������������.';
$strHome = '�������� ������';
$strHomepageOfficial = '������� ������ ��� phpMyAdmin';
$strHomepageSourceforge = '������ ��� Sourceforge ��� ��� �������� ��� phpMyAdmin';
$strHost = '�������';
$strHostEmpty = '�� ����� ��� ���������� ����� ����!';

$strIdxFulltext = '������ �������';
$strIfYouWish = '�� ������������ �� ��������� ���� ������� ��� ��� ������ ��� ������, ��������� ��� ����� ������ ������������ �� �����.';
$strIndex = '���������';
$strIndexes = '���������';
$strInsert = '��������';
$strInsertAsNewRow = '�������� �� ��� ������';
$strInsertedRows = '����������� �������:';
$strInsertNewRow = '�������� ���� �������';
$strInsertTextfiles = '�������� ������� �������� ���� ������';
$strInstructions = '�������';
$strInUse = '�� �����';
$strInvalidName = '� �%s� ����� ���������� ����, ��� �������� �� ��� ��������������� �� ����� ��� ����, ������ � �����.';

$strKeyname = '����� ��������';
$strKill = '���������';

$strLength = '�����';
$strLengthSet = '�����/�����*';
$strLimitNumRows = '���������� ��� ������';
$strLineFeed = '���������� ��������� �������: \\n';
$strLines = '�������';
$strLocationTextfile = '��������� ��� ������� ��������';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = '����������';

$strModifications = '�� ������� �������������';
$strModify = '�����������';
$strMySQLReloaded = '� MySQL ��������������.';
$strMySQLSaid = '� MySQL �����: ';
$strMySQLShowProcess = '�������� ����������';
$strMySQLShowStatus = '�������� ���������� ��������� ��� MySQL';
$strMySQLShowVars = '�������� ���������� ��� MySQL';

$strName = '�����';
$strNbRecords = '������� ��������';
$strNext = '�������';
$strNo = '���';
$strNoDatabases = '����� ������';
$strNoDropDatabases = '�� ����������� �DROP DATABASE" ����� ���������������.';
$strNoModification = '����� ������';
$strNoPassword = '����� ������ ���������';
$strNoPrivileges = '����� ��������';
$strNoRights = '��� ����� ������ ���������� �� ������� ��� ����!';
$strNoTablesFound = '��� �������� ������� ��� ����.';
$strNotNumber = '���� ��� ����� �������!';
$strNotValidNumber = ' ��� ����� �������� ������� �������!';
$strNoUsersFound = '��� �������� �������.';
$strNull = '����';
$strNumberIndexes = ' ������� ��� ���������� ���������� ';

$strOftenQuotation = '����� ����������. �� OPTIONALLY �������� ��� ���� �� ����� char ��� varchar ������������� �� ��� ��������� ���������������� ����.';
$strOptimizeTable = '�������������� ������';
$strOptionalControls = '�����������. �������� ��� �� ������� � �������� ��� � ������� ������� ����������.';
$strOptionally = 'OPTIONALLY';
$strOr = '�';
$strOverhead = '����������';

$strPartialText = '��������� �������';
$strPassword = '������� ���������';
$strPasswordEmpty = '� ������� ��������� ����� �����!';
$strPasswordNotSame = '�� ������� ��������� ��� ����� �����!';
$strPHPVersion = '������ PHP';
$strPmaDocumentation = '���������� phpMyAdmin';
$strPos1 = '����';
$strPrevious = '�����������';
$strPrimary = '��������';
$strPrimaryKey = '�������� ������';
$strPrintView = '�������� ��� ��������';
$strPrivileges = '��������';
$strProperties = '���������';

$strQBE = '��������� ���� ����������';
$strQBEDel = '��������';
$strQBEIns = '��������';
$strQueryOnDb = '��������� SQL ��� ���� ';

$strRecords = '��������';
$strReloadFailed = '� ������������ ��� MySQL �������.';
$strReloadMySQL = '������������ ��� MySQL';
$strRememberReload = '�������� ��� ������������� ��� ����������.';
$strRenameTable = '����������� ������ ��';
$strRenameTableOK = '� ������� %s ������������� �� %s';
$strRepairTable = '����������� ������';
$strReplace = '�������������';
$strReplaceTable = '������������� ��������� ������ �� �� ������';
$strReset = '���������';
$strReType = '�������������';
$strRevoke = '��������';
$strRevokeGrant = '�������� �����������';
$strRevokeGrantMessage = '����������� �� �������� ����������� ���';
$strRevokeMessage = '����������� �� �������� ���';
$strRevokePriv = '�������� ����������';
$strRowLength = '������� �������';
$strRows = '�������';
$strRowsFrom = '������� ��� �������� ���';
$strRowSize = ' ������� ������� ';
$strRowsStatistic = '���������� �������';
$strRunning = '��� ������ ��� ';
$strRunQuery = '������� ����������';

$strSave = '����������';
$strSelect = '�������';
$strSelectFields = '������� ������ (����������� ���):';
$strSelectNumRows = '���� ���������';
$strSend = '��������';
$strSequence = '���������';
$strServerChoice = '������� ����������';
$strServerVersion = '������ ����������';
$strSetEnumVal = '�� � ����� ��� ������ ����� �enum� � �set�, �������� �������� ��� ����� ��������������� ��� ���� �����������: \'�\',\'�\',\'�\'...<br /> �� ���������� �� �������� ��� ������� ������ ("\") � ���� ���������� ("\'"), �������� �� �� ������� ������ ���� ���� (��� ��������� \'\\\\���\' � \'�\\\'�\').';
$strShow = '��������';
$strShowingRecords = '�������� �������� ';
$strShowPHPInfo = '�������� ����������� PHP';
$strShowThisQuery = ' �������� ��� ���� ����� ��� ��������� ';
$strSingly = '(��������)';
$strSize = '�������';
$strSort = '����������';
$strSpaceUsage = '����� �����';
$strSQLQuery = 'SQL ���������';
$strStatement = '��������';
$strStrucCSV = '�������� CSV';
$strStrucData = '���� ��� ��������';
$strStrucDrop = '�������� �drop table�';
$strStrucExcelCSV = '����� CSV ��� �������� Ms Excel';
$strStrucOnly = '���� � ����';
$strSubmit = '��������';
$strSuccess = '� SQL ��������� ��� ����������� ��������';
$strSum = '������';

$strTable = '������� ';
$strTableComments = '������ ������';
$strTableEmpty = '�� ����� ��� ������ ����� ����!';
$strTableMaintenance = '��������� ������';
$strTables = '%s �������/�������';
$strTableStructure = '���� ������ ��� ��� ������';
$strTableType = '����� ������';
$strTextAreaLength = ' �������� ��� ������� ���,<br /> ���� �� ����� ������ �� �� ������ �� ��������� ';
$strTheContent = '�� ����������� ��� ������� ��� ���� ���������.';
$strTheContents = '�� ����������� ��� ������� ����������� �� ����������� ��� ����������� ������ ��� ������� �� ���� �������� � �������� ������.';
$strTheTerminator = '� ���������� ���������� ��� ������.';
$strTotal = '��������';
$strType = '�����';

$strUncheckAll = '��������� ����';
$strUnique = '��������';
$strUpdateQuery = '��������� ��� ����������';
$strUsage = '�����';
$strUseBackquotes = '�������������� ������� ���������� �� �� ������� ��� ������� ��� ��� ������';
$strUser = '�������';
$strUserEmpty = '�� ����� ��� ������ ����� ����!';
$strUserName = '����� ������';
$strUsers = '�������';
$strUseTables = '����� �������';

$strValue = '����';
$strViewDump = '�������� (schema) ��� ������';
$strViewDumpDB = '�������� (schema) ��� �����';

$strWelcome = '����������� ��� ';
$strWithChecked = '�� �������:';
$strWrongUser = '����������� �������/������� ���������. ������ ���������.';

$strYes = '���';

$strZip = '�������� �zip�';

// To translate
$strAPrimaryKey = 'A primary key has been added on %s';//to translate
$strAnIndex = 'An index has been added on %s';//to translate
$strCopyTable = 'Copy table to (database<b>.</b>table):';
$strDatabaseHasBeenDropped = 'Database %s has been dropped.';  //to translate
$strDeleteUserMessage = 'You have deleted the user %s.';//to translate
$strFieldHasBeenDropped = 'Field %s has been dropped';//to translate
$strFieldsEnclosedBy = 'Fields enclosed by';//to translate
$strFieldsEscapedBy = 'Fields escaped by';//to translate
$strFieldsTerminatedBy = 'Fields terminated by';//to translate
$strFlushTable = 'Flush the table ("FLUSH")';
$strIndexHasBeenDropped = 'Index %s has been dropped';//to translate
$strKeepPass = 'Do not change the password';//to translate
$strLinesTerminatedBy = 'Lines terminated by';//to translate
$strMoveTable = 'Move table to (database<b>.</b>table):';
$strMoveTableOK = 'Table %s has been moved to %s.';
$strNoFrames = 'phpMyAdmin is more friendly with a <b>frames-capable</b> browser.';
$strNoQuery = 'No SQL query!';  //to translate
$strPrimaryKeyHasBeenDropped = 'The primary key has been dropped';//to translate
$strRunningAs = 'as';
$strRunSQLQuery = 'Run SQL query/queries on database %s';//to translate
$strShowAll = 'Show all'; // to translate
$strShowCols = 'Show columns';
$strShowTables = 'Show tables';
$strStartingRecord = 'Starting record';//to translate
$strTableHasBeenDropped = 'Table %s has been dropped';//to translate
$strTableHasBeenEmptied = 'Table %s has been emptied';//to translate
$strTableHasBeenFlushed = 'Table %s has been flushed';
$strUpdatePrivMessage = 'You have updated the privileges for %s.';//to translate
$strUpdateProfile = 'Update profile:';//to translate
$strUpdateProfileMessage = 'The profile has been updated.';//to translate
?>
