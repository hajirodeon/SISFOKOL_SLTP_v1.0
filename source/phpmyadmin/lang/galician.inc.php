<?php
/* $Id: galician.inc.php,v 1.29 2001/10/22 22:03:34 lem9 Exp $ */

$charset = 'iso-8859-1';
$left_font_family = 'verdana, helvetica, arial, geneva, sans-serif';
$right_font_family = 'helvetica, arial, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
$byteUnits = array('Bytes', 'KB', 'MB', 'GB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';


$strAccessDenied = 'Acceso Negado';
$strAction = 'Acci�n';
$strAddDeleteColumn = 'Adicionar/Eliminar columnas de campo';
$strAddDeleteRow = 'Adicionar/Eliminar filas de criterios';
$strAddNewField = 'Adicionar un novo campo';
$strAddPriv = 'Adicionar un novo privilexio';
$strAddPrivMessage = 'Privilexio adicionado.';
$strAddSearchConditions = 'Condici�n da pesquisa (ou sexa, o complemento da cl�usula "WHERE"):';
$strAddUser = 'Adicionar un novo usuario';
$strAddUserMessage = 'Usuario adicionado.';
$strAffectedRows = 'Filas que van ser afectadas:';
$strAfter = 'Despois de';
$strAll = 'Todos';
$strAlterOrderBy = 'Ordenar a tabela por';
$strAnalyzeTable = 'Analizar a tabela';
$strAnd = 'E';
$strAnIndex = 'Adicionouse un �ndice a %s';
$strAny = 'Calquer';
$strAnyColumn = 'Calquer columna';
$strAnyDatabase = 'Calquer banco de datos';
$strAnyHost = 'Calquer servidor';
$strAnyTable = 'Calquer tabela';
$strAnyUser = 'Calquer usuario';
$strAPrimaryKey = 'Adicionouse unha chave primaria a %s';
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'No comezo da tabela';
$strAtEndOfTable = 'Ao final da tabela';
$strAttr = 'Atributos';

$strBack = 'Voltar';
$strBinary = ' Binario ';
$strBinaryDoNotEdit= ' Binario - non editar ';
$strBookmarkLabel = 'Nome';
$strBookmarkQuery = 'A procura de SQL foi gardada';
$strBookmarkThis = 'Gardar esta procura de SQL';
$strBookmarkView = 'S� visualizar';
$strBrowse = 'Visualizar';
$strBzip = 'comprimido no formato "bzipped"';

$strCantLoadMySQL = 'Non foi posible carregar a extensi�n do MySQL;<br>comprobe, por favor, a configuraci�n do PHP.';
$strCarriage = 'Car�cter de retorno: \\r';
$strChange = 'Mudar';
$strCheckAll = 'Marc�-los todos';
$strCheckDbPriv = 'Verificar os privilexios do banco de datos';
$strCheckTable = 'Verificar a tabela';
$strColumn = 'Columna';
$strColumnNames = 'Nomes das Columnas';
$strCompleteInserts = 'Inserci�ns completas';
$strConfirm = 'Est� seguro/a?';
$strCopyTableOK = 'Tabela \$table copiada para \$new_name.';
$strCreate = 'Crear';
$strCreateNewDatabase = 'Crear un novo banco de datos';
$strCreateNewTable = 'Crear unha nova tabela neste banco de datos ';
$strCriteria = 'Criterio';

$strData = 'Datos';
$strDatabase = 'Banco de Datos ';
$strDatabaseHasBeenDropped = 'A base de datos %s foi eliminada.';
$strDatabases = 'Bancos de Datos';
$strDatabasesStats = 'Estat�sticas dos bancos de datos';
$strDataOnly = 'S� os datos';
$strDefault = 'Padr�n';
$strDelete = 'Eliminar';
$strDeleted = 'Rexistro eliminado';
$strDeletedRows = 'Filas borradas:';
$strDeleteFailed = 'Non foi posible eliminar!';
$strDeleteUserMessage = 'Acaba de eliminar o usuario %s.';
$strDescending = 'Descendente';
$strDisplay = 'Mostrar';
$strDisplayOrder = 'Mostrar en orde:';
$strDoAQuery = 'Faga unha "procura por exemplo" (o comod�n � "%")';
$strDocu = 'Documentaci�n';
$strDoYouReally = 'Seguro? ';
$strDrop = 'Eliminar';
$strDropDB = 'Elimina o banco de datos: ';
$strDropTable = 'Eliminar a tabela';
$strDumpingData = 'Extraindo datos da tabela';
$strDynamic = 'din�mico';

$strEdit = 'Modificar';
$strEditPrivileges = 'Modificar privilexios';
$strEffective = 'Efectivo';
$strEmpty = 'Borrar';
$strEmptyResultSet = 'MySQL retornou um conxunto vac�o (ex. cero rexistros).';
$strEnd = 'Fin';
$strEnglishPrivileges = ' Nota: os nomes de privilexios do MySQL est�n en ingl�s';
$strError = 'Erro';
$strExtendedInserts = 'Inserci�ns extendidas';
$strExtra = 'Extra';

$strField = 'Campo';
$strFieldHasBeenDropped = 'Eliminouse o campo %s';
$strFields = 'Campos';
$strFieldsEmpty = ' O reconto de campos di que non hai neng�n! ';
$strFieldsEnclosedBy = 'Os campos delim�tanse con';
$strFieldsEscapedBy = 'Os campos esc�panse con';
$strFieldsTerminatedBy = 'Os campos rematan por';
$strFixed = 'fixo';
$strFlushTable = 'Fechar a tabela ("FLUSH")';
$strFormat = 'Formato';
$strFormEmpty = 'Falta un valor no formulario!';
$strFullText = 'Textos completos';
$strFunction = 'Funci�ns';

$strGenTime = 'Xerado en';
$strGo = 'Executar';
$strGrants = 'Conceder';
$strGzip = 'comprimido no formato "gzipped"';

$strHasBeenAltered = 'foi alterado.';
$strHasBeenCreated = 'foi creado.';
$strHome = 'Comezo ("Home")';
$strHomepageOfficial = 'P�xina Oficial do phpMyAdmin';
$strHomepageSourceforge = 'P�xina do phpMyAdmin en Sourceforge';
$strHost = 'Servidor';
$strHostEmpty = 'O nome do servidor est� vac�o!';

$strIdxFulltext = 'Texto completo';
$strIfYouWish = 'Para carregar s� algunhas columnas da tabela, faga unha lista separada por v�rgulas.';
$strIndex = '�ndice';
$strIndexHasBeenDropped = 'Eliminouse o �ndice %s';
$strIndexes = '�ndices';
$strInsert = 'Inserir';
$strInsertAsNewRow = 'Inserir unha nova columna';
$strInsertedRows = 'Filas inseridas:';
$strInsertNewRow = 'Inserir un novo rexistro';
$strInsertTextfiles = 'Inserir un arquivo de texto na tabela';
$strInstructions = 'Instrucci�ns';
$strInUse = 'en uso';
$strInvalidName = '"%s" i unha palabra reservada. Non se pode utilizar como nome dun banco de datos, dunha tabela ou dun campo.';

$strKeepPass = 'Non mude o contrasinal';
$strKeyname = 'Nome chave';
$strKill = 'Matar (kill)';

$strLength = 'Tama�o';
$strLengthSet = 'Tama�o/Definir*';
$strLimitNumRows = 'rexistros por p�xina';
$strLineFeed = 'Car�cter de alimentaci�n de li�a: \\n';
$strLines = 'Li�as';
$strLinesTerminatedBy = 'As li�as rematan por';
$strLocationTextfile = 'Localizaci�n do arquivo de texto';
$strLogin = 'Login'; //to translate, but its not in use ...
$strLogout = 'Sair';

$strModifications = 'As modificaci�ns foron gardadas';
$strModify = 'Modificar';
$strMySQLReloaded = 'MySQL reiniciado.';
$strMySQLSaid = 'Mensaxes do MySQL: ';
$strMySQLShowProcess = 'Mostrar os procesos';
$strMySQLShowStatus = 'Mostrar informaci�n de tempo de execuci�n do MySQL';
$strMySQLShowVars = 'Mostrar as variables de sistema do MySQL';

$strName = 'Nome';
$strNbRecords = 'N�mero de rexistros';
$strNext = 'Seguinte';
$strNo = 'Non';
$strNoDatabases = 'Non hai neng�n banco de datos';
$strNoDropDatabases = 'Os comandos "Eliminar banco de datos" non est�n permitidos.';
$strNoFrames = 'phpMyAdmin usa-se mellor cun navegador que <b>acepte molduras</b>.';
$strNoModification = 'Sen cambios';
$strNoPassword = 'Sen Contrasinal';
$strNoPrivileges = 'Sen Privilexios';
$strNoRights = 'Non ten direitos suficientes para estar aqu� agora!';
$strNoTablesFound = 'Non se achou nengunha tabela no banco de datos';
$strNotNumber = 'Non � un n�mero!';
$strNotValidNumber = ' non � un n�mero v�lido para unha fila!';
$strNoUsersFound = 'Non se achou nengun(s) usuario(s).';
$strNull = 'Nulo';
$strNumberIndexes = ' N�mero de �ndices avanzados ';

$strOftenQuotation = 'Xeralmente son aspas. OPCIONAL significa que s� os campos de caracteres son delimitados por caracteres "delimitadores"';
$strOptimizeTable = 'Optimizar a tabela';
$strOptionalControls = 'Opcional. Controla como se han de ler e escreber os caracteres especiais.';
$strOptionally = 'OPCIONAL';
$strOr = 'ou';
$strOverhead = 'De m�is (Overhead)';

$strPartialText = 'Textos parciais';
$strPassword = 'Contrasinal';
$strPasswordEmpty = 'O contrasinal est� vac�o!';
$strPasswordNotSame = 'Os contrasinais non son os mesmos!';
$strPHPVersion = 'Versi�n do PHP';
$strPmaDocumentation = 'Documentaci�n do phpMyAdmin';
$strPos1 = 'Inicio';
$strPrevious = 'Anterior';
$strPrimary = 'Primaria';
$strPrimaryKey = 'Chave primaria';
$strPrimaryKeyHasBeenDropped = 'Eliminouse a chave primaria';
$strPrintView = 'Visualizaci�n previa da impresi�n';
$strPrivileges = 'Privilexios';
$strProperties = 'Propiedades';

$strQBE = 'Procurar pondo un exemplo ("QBE")';
$strQBEDel = 'Eliminar';
$strQBEIns = 'Inserir';
$strQueryOnDb = 'Procura tipo SQL no banco de datos';

$strRecords = 'Rexistros';
$strReloadFailed = 'A reinicializaci�n do MySQL fallou.';
$strReloadMySQL = 'Reinicializar o MySQL';
$strRememberReload = 'Lembre-se recarregar o servidor.';
$strRenameTable = 'Renomear a tabela para';
$strRenameTableOK = 'Tabela \$table renomeada para \$new_name';
$strRepairTable = 'Reparar a tabela';
$strReplace = 'Substituir';
$strReplaceTable = 'Substituir os datos da tabela polos do ficheiro';
$strReset = 'Reiniciar';
$strReType = 'Reescreber';
$strRevoke = 'Revogar';
$strRevokeGrant = 'Revogar privilexio de conceder';
$strRevokeGrantMessage = 'Revogou o privilexio de conceder para';
$strRevokeMessage = 'Revogou os privilexios para';
$strRevokePriv = 'Revogar privilexios';
$strRowLength = 'Lonxitude da fila';
$strRows = 'Filas';
$strRowsFrom = 'filas, a comezar da';
$strRowSize= ' Tama�o da fila ';
$strRowsStatistic = 'Estatist�cas da Fila';
$strRunning = 'a rodar no servidor ';
$strRunningAs = 'como';
$strRunQuery = 'Enviar esta procura';
$strRunSQLQuery = 'Efectuar unha procura SQL na base de datos %s';

$strSave = 'Gardar';
$strSelect = 'Procurar';
$strSelectFields = 'Seleccione os campos (m�nimo 1)';
$strSelectNumRows = 'a procurar';
$strSend = 'Enviar <I>(gravar nun ficheiro)</I><br>';
$strSequence = 'Secuencia';
$strServerChoice = 'Escolla de Servidor';
$strServerVersion = 'Versi�n do servidor';
$strSetEnumVal = 'Se o tipo de campo � "enum" ou "set", introduza os valores usando este formato: \'a\',\'b\',\'c\'...<br />Se precisar p�r unha barra invertida (" \ ") ou aspas simples (" \' ") entre estes valores, preceda a barra e as aspas de barras invertidas (por exemplo \'\\\\xyz\' ou \'a\\\'b\').';
$strShow = 'Mostrar';
$strShowAll = 'Ver todos os rexistros';
$strShowCols = 'Mostrar as columnas';
$strShowingRecords = 'Mostrando rexistros ';
$strShowPHPInfo = 'Mostrar informaci�n sobre o PHP';
$strShowTables = 'Mostrar as tabelas';
$strShowThisQuery = ' Mostrar esta procura aqu� outra vez ';
$strSingly = 'a refacer logo de inserci�ns e destruci�ns (shingly)';
$strSize = 'Tama�o';
$strSort = 'Ordenar';
$strSpaceUsage = 'Uso do espazo';
$strSQLQuery = 'comando SQL';
$strStartingRecord = 'A comezar un rexistro'; //FUZZY
$strStatement = 'Informaci�ns';
$strStrucCSV = 'Datos CSV';
$strStrucData = 'Estructura e datos';
$strStrucDrop = 'Adicionar \'Eliminar tabela anterior se existe\'';
$strStrucExcelCSV = 'CSV (para datos de Ms Excel)';
$strStrucOnly = 'S� a estructura';
$strSubmit = 'Submeter';
$strSuccess = 'O seu comando de SQL executou-se com �xito';
$strSum = 'Suma';

$strTable = 'tabela ';
$strTableComments = 'Comentarios da tabela';
$strTableEmpty = 'O nome da tabela est� vac�o!';
$strTableHasBeenDropped = 'Eliminouse a tabela %s';
$strTableHasBeenEmptied = 'Vaciouse a tabela %s';
$strTableHasBeenFlushed = 'Fechouse a tabela %s';
$strTableMaintenance = 'Tabela de manutenci�n';
$strTables = '%s tabela(s)';
$strTableStructure = 'Estructura da tabela';
$strTableType = 'Tipo da tabela';
$strTextAreaLength = ' Por causa da sua lonxitude,<br> este campo pode non ser editable ';
$strTheContent = 'O conte�do do seu arquivo foi inserido';
$strTheContents = 'O conte�do do arquivo substitu�u o conte�do da tabela que ti�a a mesma chave primaria ou �nica';
$strTheTerminator = 'O car�cter que separa os campos.';
$strTotal = 'total';
$strType = 'Tipo';

$strUncheckAll = 'Quitar-lles as marcas a todos';
$strUnique = '�nico';
$strUpdatePrivMessage = 'Acaba de actualizar os privilexios de %s.';
$strUpdateProfile = 'Actualizar o perfil:';
$strUpdateProfileMessage = 'Actualizouse o perfil.';
$strUpdateQuery = 'Actualizar a procura';
$strUsage = 'Uso';
$strUseBackquotes = 'Protexer os nomes das tabelas e dos campos con&nbsp;" ` "';
$strUser = 'Usuario';
$strUserEmpty = 'O nome do usuario est� vac�o!';
$strUserName = 'Nome do usuario';
$strUsers = 'Usuarios';
$strUseTables = 'Usar as tabelas';

$strValue = 'Valor';
$strViewDump = 'Ver o esquema do volcado da tabela';
$strViewDumpDB = 'Ver o esquema do volcado do banco de datos';

$strWelcome = 'Benvido/a ao ';
$strWithChecked = 'Todos os marcados';
$strWrongUser = 'Usuario ou contrasinal errado. Acceso negado.';

$strYes = 'Si';

$strZip = 'comprimido no formato "zipped"';

// To translate
$strCopyTable = 'Copy table to (database<b>.</b>table):';
$strMoveTable = 'Move table to (database<b>.</b>table):';
$strMoveTableOK = 'Table %s has been moved to %s.';
$strNoQuery = 'No SQL query!';  //to translate
?>
