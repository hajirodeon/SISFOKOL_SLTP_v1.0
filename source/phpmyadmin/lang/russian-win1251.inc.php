<?php
/* $Id: russian-win1251.inc.php,v 1.81 2001/10/21 20:50:11 loic1 Exp $ */

$charset = 'windows-1251';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('����', '��', '��', '��');

$day_of_week = array('��', '��', '��', '��', '��', '��', '��');
$month = array('���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y �., %H:%M';


$strAccessDenied = '� ������� ��������';
$strAction = '��������';
$strAddDeleteColumn = '��������/������� ������� ��������';
$strAddDeleteRow = '��������/������� ��� ��������';
$strAddNewField = '�������� ����� ����';
$strAddPriv = '�������� ����� ����������';
$strAddPrivMessage = '���� ��������� ����� ����������';
$strAddSearchConditions = '�������� ������� ������ (���� ��� ������� "where"):';
$strAddUser = '�������� ������ ������������';
$strAddUserMessage = '���� �������� ����� ������������.';
$strAffectedRows = '���������� ����:';
$strAfter = '�����';
$strAll = '���';
$strAlterOrderBy = '�������� ������� �������';
$strAnalyzeTable = '������ �������';
$strAnd = '�';
$strAnIndex = '��� �������� ������ ��� %s';
$strAny = '�����';
$strAnyColumn = '����� �������';
$strAnyDatabase = '����� ���� ������';
$strAnyHost = '����� ����';
$strAnyTable = '����� �������';
$strAnyUser = '����� ������������';
$strAPrimaryKey = '��� �������� ��������� ���� � %s';
$strAscending = '����������';
$strAtBeginningOfTable = '� ������ �������';
$strAtEndOfTable = '� ����� �������';
$strAttr = '��������';

$strBack = '�����';
$strBinary = ' �������� ';
$strBinaryDoNotEdit = ' �������� ������ - �� ������������� ';
$strBookmarkLabel = '�����';
$strBookmarkQuery = '�������� �� SQL-������';
$strBookmarkThis = '�������� �� ������ SQL-������';
$strBookmarkView = '������ ��������';
$strBrowse = '�����';
$strBzip = '�������� � "bzip"';

$strCantLoadMySQL = '���������� MySQL �� ����������,<br />��������� ������������ PHP.';
$strCarriage = '������� �������: \\r';
$strChange = '��������';
$strCheckAll = '�������� ���';
$strCheckDbPriv = '��������� ���������� ���� ������';
$strCheckTable = '��������� �������';
$strColumn = '�������';
$strColumnNames = '�������� �������';
$strCompleteInserts = '������ �������';
$strConfirm = '�� ������������� ������ ������� ���?';
$strCopyTable = '����������� ������� � (���� ������<b>.</b>�������):';
$strCopyTableOK = '������� %s ���� ����������� � %s.';
$strCreate = '�������';
$strCreateNewDatabase = '������� ����� ��';
$strCreateNewTable = '������� ����� ������� � �� ';
$strCriteria = '��������';

$strData = '������';
$strDatabase = '�� ';
$strDatabaseHasBeenDropped = '���� ������ %s ���� �������.';
$strDatabases = '���� ������';
$strDatabasesStats = '���������� ��� ������';
$strDataOnly = '������ ������';
$strDefault = '�� ���������';
$strDelete = '�������';
$strDeleted = '��� ��� ������';
$strDeletedRows = '��������� ���� ���� �������:';
$strDeleteFailed = '��������� ��������!';
$strDeleteUserMessage = '��� ������ ������������ %s.';
$strDescending = '����������';
$strDisplay = '��������';
$strDisplayOrder = '������� ���������:';
$strDoAQuery = '��������� "������ �� �������" (������ ������������: "%")';
$strDocu = '������������';
$strDoYouReally = '�� ������������� ������� ';
$strDrop = '����������';
$strDropDB = '���������� �� ';
$strDropTable = '������� �������';
$strDumpingData = '���� ������ �������';
$strDynamic = '������������';

$strEdit = '������';
$strEditPrivileges = '�������������� ����������';
$strEffective = '�������������';
$strEmpty = '��������';
$strEmptyResultSet = 'MySQL ������� ������ ��������� (�.�. ���� �����).';
$strEnd = '�����';
$strEnglishPrivileges = ' ����������: ���������� MySQL �������� �� ��������� ';
$strError = '������';
$strExtendedInserts = '����������� �������';
$strExtra = '�������������';

$strField = '����';
$strFieldHasBeenDropped = '���� %s ���� �������';
$strFields = '����';
$strFieldsEmpty = ' ������ ������� �����! ';
$strFieldsEnclosedBy = '���� ��������� �';
$strFieldsEscapedBy = '���� ������������';
$strFieldsTerminatedBy = '���� ���������';
$strFixed = '�������������';
$strFlushTable = '�������� ��� ������� ("FLUSH")';
$strFormat = '������';
$strFormEmpty = '��������� �������� ��� �����!';
$strFullText = '������ ������';
$strFunction = '�������';

$strGenTime = '����� ��������';
$strGo = '�����';
$strGrants = '�����';
$strGzip = '�������� � "gzip"';

$strHasBeenAltered = '���� ��������.';
$strHasBeenCreated = '���� �������.';
$strHome = '� ������';
$strHomepageOfficial = '����������� �������� phpMyAdmin';
$strHomepageSourceforge = '�������� phpMyAdmin �� Sourceforge';
$strHost = '����';
$strHostEmpty = '������ ��� �����!';

$strIdxFulltext = '���������';
$strIfYouWish = '���� �� ������� ��������� ������ ��������� ������� �������, ������� ����������� �������� ������ �����.';
$strIndex = '������';
$strIndexes = '�������';
$strIndexHasBeenDropped = '������ %s ��� ������';
$strInsert = '��������';
$strInsertAsNewRow = '�������� ����� ���';
$strInsertedRows = '���������� ����:';
$strInsertNewRow = '�������� ����� ���';
$strInsertTextfiles = '�������� ��������� ����� � �������';
$strInstructions = '����������';
$strInUse = '������������';
$strInvalidName = '"%s" - �������� ����������������� ������, �� �� ������ ������������ ��� � �������� ����� ���� ������/�������/����.';

$strKeepPass = '�� ������ ������';
$strKeyname = '��� �����';
$strKill = '�����';

$strLength = '������';
$strLengthSet = '�����/��������*';
$strLimitNumRows = '������� �� ��������';
$strLineFeed = '������ ��������� �����: \\n';
$strLines = '�����';
$strLinesTerminatedBy = '������ ���������';
$strLocationTextfile = '����������������� ���������� �����';
$strLogin = '���� � �������';  // To translate, but its not in use ...
$strLogout = '����� �� �������';

$strModifications = '����������� ���� ���������';
$strModify = '��������';
$strMoveTable = '����������� ������� � (���� ������<b>.</b>�������):';
$strMoveTableOK = '������� %s ���� ���������� � %s.';
$strMySQLReloaded = 'MySQL �������������.';
$strMySQLSaid = '����� MySQL: ';
$strMySQLShowProcess = '�������� ��������';
$strMySQLShowStatus = '�������� ��������� MySQL';
$strMySQLShowVars = '�������� ��������� ���������� MySQL';

$strName = '���';
$strNbRecords = '����� �������';
$strNext = '�����';
$strNo = '���';
$strNoDatabases = '�� �����������';
$strNoDropDatabases = '��������� "DROP DATABASE" ���������.';
$strNoFrames = '��� ������ phpMyAdmin ����� ������� � ���������� <b>�������</b>.';
$strNoModification = '��� ���������';
$strNoPassword = '��� ������';
$strNoPrivileges = '��� ����������';
$strNoQuery = '��� SQL-�������!';
$strNoRights = '�� �� ������ ���������� ���� ��� �����!';
$strNoTablesFound = '� �� �� ���������� ������.';
$strNotNumber = '��� �� �����!';
$strNotValidNumber = ' ������������ ���������� �����!';
$strNoUsersFound = '�� ������ ������������.';
$strNull = '����';
$strNumberIndexes = ' ���������� ����������� �������� ';

$strOftenQuotation = '������ �������. �� ������ ��������, ��� ������ ���� char � varchar ����������� � �������.';
$strOptimizeTable = '�������������� �������';
$strOptionalControls = '�� ������. ������������ ��� ������ ��� ������ ����������� �������.';
$strOptionally = '�� ������';
$strOr = '���';
$strOverhead = '��������� �������';

$strPartialText = '��������� ������';
$strPassword = '������';
$strPasswordEmpty = '������ ������!';
$strPasswordNotSame = '������ �� ���������!';
$strPHPVersion = '������ PHP';
$strPmaDocumentation = '������������ �� phpMyAdmin';
$strPos1 = '������';
$strPrevious = '�����';
$strPrimary = '���������';
$strPrimaryKey = '��������� ����';
$strPrimaryKeyHasBeenDropped = '��������� ���� ��� ������';
$strPrintView = '������ ��� ������';
$strPrivileges = '����������';
$strProperties = '��������';

$strQBE = '������ �� �������';
$strQBEDel = '�������';
$strQBEIns = '��������';
$strQueryOnDb = 'SQL-������ �� ';

$strRecords = '������';
$strReloadFailed = '�� ������� ������������� MySQL.';
$strReloadMySQL = '������������� MySQL';
$strRememberReload = '�� �������� ������������� ������.';
$strRenameTable = '������������� ������� �';
$strRenameTableOK = '������� %s ���� ������������� � %s';
$strRepairTable = '�������� �������';
$strReplace = '���������';
$strReplaceTable = '��������� ������ ������� ������� �� �����';
$strReset = '��������������';
$strReType = '�������������';
$strRevoke = '��������';
$strRevokeGrant = '�������� �������������� ����';
$strRevokeGrantMessage = '���� �������� �������������� ���� ���';
$strRevokeMessage = '�� �������� ���������� ���';
$strRevokePriv = '�������� ����������';
$strRowLength = '����� ����';
$strRows = '����';
$strRowsFrom = '����� ��';
$strRowSize = ' ������ ���� ';
$strRowsStatistic = '���������� ����';
$strRunning = '�� ';
$strRunningAs = '���';
$strRunQuery = '��������� ������';
$strRunSQLQuery = '��������� SQL ������(�) �� �� %�';

$strSave = '���������';
$strSelect = '�������';
$strSelectFields = '������� ���� (������� ����):';
$strSelectNumRows = '�� �������';
$strSend = '�������';
$strSequence = '����.';
$strServerChoice = '����� �������';
$strServerVersion = '������ �������';
$strSetEnumVal = '��� ����� ���� "enum" � "set", ������� �������� �� ����� �������: \'a\',\'b\',\'c\'...<br />���� ��� ������������ ������ �������� ����� ����� ("\"") ��� ��������� ������� ("\'") ����� ���� ��������, ��������� ����� ���� �������� ����� ����� (��������, \'\\\\xyz\' ��� \'a\\\'b\').';
$strShow = '��������';
$strShowAll = '�������� ���';
$strShowCols = '�������� �������';
$strShowingRecords = '���������� ������ ';
$strShowPHPInfo = '�������� ���������� � PHP';
$strShowTables = '�������� �������';
$strShowThisQuery = ' �������� ������ ������ ����� ';
$strSingly = '(��������)';
$strSize = '������';
$strSort = '�������������';
$strSpaceUsage = '������������ ������������';
$strSQLQuery = 'SQL-������';
$strStartingRecord = '�������� � ������';
$strStatement = '��������'; // ???To translate
$strStrucCSV = 'CSV ������';
$strStrucData = '��������� � ������';
$strStrucDrop = '�������� �������� �������';
$strStrucExcelCSV = 'CSV ��� ������ Ms Excel';
$strStrucOnly = '������ ���������';
$strSubmit = '���������';
$strSuccess = '��� SQL-������ ��� ������� ��������';
$strSum = '�����';

$strTable = '������� ';
$strTableComments = '����������� � �������';
$strTableEmpty = '������ �������� �������!';
$strTableHasBeenDropped = '������� %s ���� �������';
$strTableHasBeenEmptied = '������� %s ���� ����������';
$strTableHasBeenFlushed = '��� ������� ��� ������� %s';
$strTableMaintenance = '������������ �������';
$strTables = '%s ������(�)';
$strTableStructure = '��������� �������';
$strTableType = '��� �������';
$strTextAreaLength = ' ��-�� ������� �����,<br /> ��� ���� �� ����� ���� ���������������� ';
$strTheContent = '���������� ����� ���� �������������.';
$strTheContents = '���������� ����� �������� ���������� ������� ��� ����� � ����������� ���������� ��� ����������� �������.';
$strTheTerminator = '������ ��������� �����.';
$strTotal = '�����';
$strType = '���';

$strUncheckAll = '����� ������� �� ����';
$strUnique = '����������';
$strUpdatePrivMessage = '���� �������� ���������� ���';
$strUpdateProfile = '�������� �������:';
$strUpdateProfileMessage = '������� ��� ��������.';
$strUpdateQuery = '��������� ������';
$strUsage = '�������������';
$strUseBackquotes = '�������� ������� � ��������� ������ � �����';
$strUser = '������������';
$strUserEmpty = '������ ��� ������������!';
$strUserName = '��� ������������';
$strUsers = '������������';
$strUseTables = '������������ �������';

$strValue = '��������';
$strViewDump = '����������� ���� (�����) �������';
$strViewDumpDB = '����������� ���� (�����) ��';

$strWelcome = '����� ���������� � ';
$strWithChecked = '� �����������:';
$strWrongUser = '��������� �����/������. � ������� ��������.';

$strYes = '��';

$strZip = '��������� � "zip"';
?>
