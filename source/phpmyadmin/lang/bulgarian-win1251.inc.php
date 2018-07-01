<?php
/* $Id: bulgarian-win1251.inc.php,v 1.82 2001/10/20 13:05:04 lem9 Exp $ */

$charset = 'windows-1251';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';


$strAccessDenied = '������� ������';
$strAction = '��������';
$strAddDeleteColumn = '������/������ ������ �� ��������';
$strAddDeleteRow = '������/������ ��� �� ��������';
$strAddNewField = '������ ���� ����';
$strAddPriv = '�������� �� ���� ����������';
$strAddPrivMessage = '��� ��������� ���� ����������.';
$strAddSearchConditions = '������ ������� �� ������� (���� �� "where" �������):';
$strAddUser = '�������� �� ��� ����������.';
$strAddUserMessage = '��� ��������� ��� ����������.';
$strAffectedRows = '��������� ����:';
$strAfter = '����';
$strAll = 'All'; //to translate
$strAlterOrderBy = 'Alter table order by'; //to translate
$strAnalyzeTable = '����������� �� ���������';
$strAnd = '�';
$strAnIndex = '���� ������� ������ �� %s';
$strAny = '�����';
$strAnyColumn = '����� ������';
$strAnyDatabase = '����� ���� �����';
$strAnyHost = '����� ����';
$strAnyTable = '����� �������';
$strAnyUser = '����� ����������';
$strAPrimaryKey = '�e�e ������� ������e� ���� ��� ';
$strAscending = '��������';
$strAtBeginningOfTable = '�� �������� �� ���������';
$strAtEndOfTable = '�� ���� �� ���������';
$strAttr = '��������';

$strBack = '�����';
$strBinary = ' ������� ';
$strBinaryDoNotEdit = ' ������� - �� ���������� ';
$strBookmarkLabel = '������';
$strBookmarkQuery = 'Bookmarked SQL-query'; //to translate
$strBookmarkThis = 'Bookmark this SQL-query'; //to translate
$strBookmarkView = '���� �����������';
$strBrowse = '��������';
$strBzip = '"������ bzip"';

$strCantLoadMySQL = '�� ���� �� ������ MySQL ������������,<br />���� ��������� �������������� �� PHP.';
$strCarriage = '������ CR: \\r';
$strChange = '�������';
$strCheckAll = '�������� ������';
$strCheckDbPriv = 'Check Database Privileges'; //to translate
$strCheckTable = '�������� �� ���������';
$strColumn = '������';
$strColumnNames = '��� �� ������';
$strCompleteInserts = 'Complete inserts'; //to translate
$strConfirm = '������������ �� ������� �� �� ���������?';
$strCopyTable = '�������� �� ������� (���� �� �����<b>.</b>�������):';
$strCopyTableOK = '������� %s ���� �������� � %s.';
$strCreate = '������';
$strCreateNewDatabase = '������ ���� ��';
$strCreateNewTable = '������ ���� ������� � �� ';
$strCriteria = '��������';

$strData = '�����';
$strDatabase = '�� ';
$strDatabaseHasBeenDropped = '������ ����� %s ���� �������.';
$strDatabases = '���� �����';
$strDatabasesStats = '���������� �� ������ �� �����';
$strDataOnly = '���� �����';
$strDefault = '�� ������������';
$strDelete = '������';
$strDeleted = '����� ���� ������';
$strDeletedRows = '������� ������:';
$strDeleteFailed = '��������� ���������!';
$strDeleteUserMessage = '��� �������� ���������� %s.';
$strDescending = '��������';
$strDisplay = '������';
$strDisplayOrder = '������ ��������:';
$strDoAQuery = '������� "��������� �� ������" (������ ��  ����������: "%")';
$strDocu = '������������';
$strDoYouReally = '������������ �� ������� ';
$strDrop = '�������';
$strDropDB = '������� �� ';
$strDropTable = '������ ���������';
$strDumpingData = '���� (�����) �� ������� � ���������';
$strDynamic = '���������';

$strEdit = '�����������';
$strEditPrivileges = '����������� �� ������������';
$strEffective = 'Effective'; //to translate
$strEmpty = '��������';
$strEmptyResultSet = 'MySQL ����� ������ �������� (�.�. ���� ������).';
$strEnd = '����';
$strEnglishPrivileges = ' ���������: ������� �� ������������ �� MySQL �� �������� �� ���������. ';
$strError = '������';
$strExtra = '������������';

$strField = '����';
$strFieldHasBeenDropped = '������ %s ���� �������';
$strFields = '������';
$strFieldsEmpty = ' ������ �� �������� � ������! ';
$strFieldsEnclosedBy = '�������� �� �������� ���';
$strFieldsEscapedBy = 'Fields escaped by';
$strFieldsTerminatedBy = '�������� ��������� ���';
$strFixed = 'fixed'; //to translate
$strFormat = '������';
$strFormEmpty = '������ �������� � ������� !';
$strFunction = '�������';

$strGenTime = '����� �� ����������';
$strGo = '�������';
$strGrants = 'Grants'; //to translate
$strGzip = '"������ gzip"';

$strHasBeenAltered = '���� ���������.';
$strHasBeenCreated = '���� ���������.';
$strHome = '������';
$strHomepageOfficial = '��������� phpMyAdmin ��� ��������';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download Page'; //to translate
$strHost = '����';
$strHostEmpty = '����� �� ����� � ������!';

$strIfYouWish = '��� ������� �� �������� ���� ����� ������ �� ���������, ������� ������ �� �������� ��������� ��� �������.';
$strIndex = '������';
$strIndexes = '�������';
$strIndexHasBeenDropped = '������� %s ���� ������';
$strInsert = '������';
$strInsertAsNewRow = '������ ���� ��� ���';
$strInsertedRows = '�������� ����:';
$strInsertNewRow = '������ ��� ���';
$strInsertTextfiles = '������ �������� ������� � ���������';
$strInstructions = '����������';
$strInUse = '�����';
$strInvalidName = '"%s" � �������� ���� � ��� �� ������ �� � ���������� �� ��� �� ���� �� �����,������� ��� ����. ';

$strKeepPass = '�� �� �� ����� ��������';
$strKeyname = '��� �� �����';
$strKill = 'Kill'; //to translate

$strLength = '�������';
$strLengthSet = '�������/��������*';
$strLimitNumRows = '���� �� ��������';
$strLineFeed = '������ �� ���� �� ���: \\n';
$strLines = '������';
$strLinesTerminatedBy = '������� ��������� �';
$strLocationTextfile = '�������������� �� ��������� ����';
$strLogin = ''; //to translate, but its not in use ...
$strLogout = '����� �� ���������';

$strModifications = '��������� ���� ���������';
$strModify = '������';
$strMoveTable = '����������� �� ������� ��� (���� �� �����<b>.</b>�������):';
$strMoveTableOK = '��������� %s ���� ���������� ��� %s.';
$strMySQLReloaded = 'MySQL � ����������.';
$strMySQLSaid = 'MySQL ��������: ';
$strMySQLShowProcess = '������ ���������';
$strMySQLShowStatus = '������ ����������� �� MySQL';
$strMySQLShowVars = '������ ���������� ���������� �� MySQL';

$strName = '���';
$strNbRecords = '����� �� �����';
$strNext = '�������';
$strNo = '��';
$strNoDatabases = '���� ���� �� �����';
$strNoDropDatabases = '"DROP DATABASE" ������� � ���������.';
$strNoModification = '���� �������';
$strNoPassword = '���� ������';
$strNoPrivileges = '���� ����������';
$strNoQuery = '���� SQL ������!';
$strNoTablesFound = '� �� ���� �������.';
$strNotNumber = '���� �� � �����!';
$strNotValidNumber = ' �� � ������� ����� �� ���!';
$strNoUsersFound = '���� ����������(�).';
$strNull = '����';
$strNumberIndexes = ' Number of advanced indexes '; //to translate

$strOffSet = '����������';
$strOftenQuotation = '���������� �������. �� ����� ��������, �� ���� ������ char � varchar �� ��������� � �������.';
$strOptimizeTable = '������������ �� ���������';
$strOptionalControls = '�� �����. ���������� ��� �� �� ����� ��� ����� ��������� �������.';
$strOptionally = '�� �����';
$strOr = '���';
$strOverhead = 'Overhead'; //to translate

$strPassword = '������';
$strPasswordEmpty = '�������� � ������!';
$strPasswordNotSame = '�������� �� � ������!';
$strPHPVersion = '������ �� PHP ';
$strPmaDocumentation = 'phpMyAdmin ������������';
$strPos1 = '������';
$strPrevious = '��������';
$strPrimary = '��������';
$strPrimaryKey = '�������� ����';
$strPrimaryKeyHasBeenDropped = ' ��������� ���� ���� ������.';
$strPrintView = '������ �� �����';
$strPrivileges = '����������';
$strProperties = '��������';

$strQBE = '��������� �� ������';
$strQBEDel = 'Del';  //to translate (used in tbl_qbe.php)
$strQBEIns = 'Ins';  //to translate (used in tbl_qbe.php)
$strQueryOnDb = 'SQL-������ ��� ������ �� ����� ';

$strRecords = '������';
$strReloadFailed = '��������� ���� �� ������������ �� MySQL.';
$strReloadMySQL = '��������� MySQL';
$strRememberReload = '�� ���������� �� ����������� �������.';
$strRenameTable = '����������� ��������� ��';
$strRenameTableOK = '������� %s ���� ������������ �� %s';
$strRepairTable = '��������� �� ���������';
$strReplace = '�������';
$strReplaceTable = '������� ������� �� ��������� � ������� �� �����';
$strReset = '�������';
$strReType = '������';
$strRevoke = '������';
$strRevokeGrant = 'Revoke Grant'; //to translate
$strRevokeGrantMessage = 'You have revoked the Grant privilege for'; //to translate
$strRevokeMessage = '��� ��������� ������������ ��';
$strRevokePriv = '������ �� ����������';
$strRowLength = '������� �� ����';
$strRows = 'Rows'; //to translate
$strRowsFrom = '���� ���������� ��';
$strRowSize = ' ������ �� ��� ';
$strRowsStatistic = '���������� �� ����';
$strRunning = '� ��������� �� ';
$strRunningAs = '����';
$strRunQuery = '������� �����������';
$strRunSQLQuery = '���������� SQL ������/������ ��� ���� �� ����� %s';

$strSave = '������';
$strSelect = '������';
$strSelectFields = '������ ���� (������� ����):';
$strSelectNumRows = '� �����������';
$strSend = '�������';
$strSequence = 'Seq.'; //to translate
$strServerChoice = '����� �� ������';
$strServerVersion = '������ �� �������';
$strSetEnumVal = '��� ���� �� ������ � "enum" ��� "set", ���� �������� ����������� ����������� ���� ������: \'a\',\'b\',\'c\'...<br />��� � ���������� �� ������� ������� ����� ("\") ��� �������� ("\'") ����� ���� ���������, ������� ������� ����� ���� ��� (��������:  \'\\\\xyz\' ��� \'a\\\'b\').';
$strShow = '������';
$strShowCols = '������ ��������';
$strShowingRecords = '������� ������ ';
$strShowPHPInfo = '������ ���������� �� PHP ';
$strShowTables = '������ ���������';
$strShowThisQuery = ' ������ ���� ������ ������ ';
$strSingly = '(singly)'; //to translate
$strSize = '������';
$strSort = '��������';
$strSpaceUsage = '���������� �����';
$strSQLQuery = 'SQL-���������';
$strStatement = 'Statements'; //to translate
$strStrucCSV = 'CSV �����';
$strStrucData = '��������� � �����';
$strStrucDrop = '������ \'������ ���������\'';
$strStrucExcelCSV = 'CSV �� Ms Excel �����';
$strStrucOnly = '���� �����������';
$strSubmit = '�������';
$strSuccess = '������ SQL-��������� ���� ��������� �������';
$strSum = '����';

$strTable = '������� ';
$strTableComments = '��������� ��� ���������';
$strTableEmpty = '����� �� ��������� � ������!';
$strTableHasBeenDropped = '��������� %s ���� �������';
$strTableHasBeenEmptied = '��������� %s ���� ����������';
$strTableMaintenance = '��������� �� ���������';
$strTables = '%s �������(�)';
$strTableStructure = '��������� �� �������';
$strTableType = '��� �� ���������';
$strTextAreaLength = ' ������ �������� ��,<br /> ���� ���� ���� �� �� � ������������ ';
$strTheContent = '������������ �� ����� ���� �����������.';
$strTheContents = '������������ �� ����� �������� ������������ �� ��������� �� ������ � ��������� �������� ��� �������� �������.';
$strTheTerminator = '������ �� ���� �� ����.';
$strTotal = '������';
$strType = '���';

$strUncheckAll = '����������� ������';
$strUnique = '��������';
$strUpdatePrivMessage = '���  ���������� ������������ �� %s.';
$strUpdateProfile = '���������� �� ������:';
$strUpdateProfileMessage = '������� ���� �������.';
$strUpdateQuery = '������� �����������';
$strUsage = 'Usage'; //to translate
$strUser = '����������';
$strUserEmpty = '��������������� ��� � ������!';
$strUserName = '������������� ���';
$strUsers = '�����������';
$strUseTables = '��������� ���������';

$strValue = '��������';
$strViewDump = '������ ���� (�����) �� ���������';
$strViewDumpDB = '������ ���� (�����) �� ��';

$strWelcome = '����� ����� � ';
$strWithChecked = '������ ��� �������:'
$strWrongUser = '������ ���/������. ������� ������.';

$strYes = '��';

$strZip = '"������ zip"';

// To translate
$strExtendedInserts = 'Extended inserts';
$strFlushTable = 'Flush the table ("FLUSH")';
$strFullText = 'Full Texts';//to translate
$strIdxFulltext = 'Fulltext';  //to translate 
$strNoFrames = 'phpMyAdmin is more friendly with a <b>frames-capable</b> browser.';
$strNoRights = 'You don\'t have enough rights to be here right now!'; //to translate
$strPartialText = 'Partial Texts';//to translate
$strShowAll = 'Show all'; // to translate
$strStartingRecord = 'Starting record';//to translate
$strTableHasBeenFlushed = 'Table %s has been flushed';
$strUseBackquotes = 'Use backquotes with tables and fields\' names';
?>
