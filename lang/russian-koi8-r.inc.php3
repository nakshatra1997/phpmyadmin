<?php
/* $Id$ */

/**
 * Translated by Gosha Sakovich <gt2 at users.sourceforge.net>
 *               Artyom Rabzonov <tyomych at gmx.net>
 */

$charset = 'koi8-r';
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('����', '��', '��', '��');

$day_of_week = array('��', '��', '��', '��', '��', '��', '��');
$month = array('���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y �., %H:%M';

$strAPrimaryKey = '��� �������� ��������� ���� � %s';
$strAccessDenied = '� ������� ��������';
$strAction = '��������';
$strAddDeleteColumn = '��������/������� ������� ��������';
$strAddDeleteRow = '��������/������� ��� ��������';
$strAddNewField = '�������� ����� ����';
$strAddPriv = '�������� ����� ����������';
$strAddPrivMessage = '���� ��������� ����� ����������';
$strAddSearchConditions = '�������� ������� ������ (���� ��� ������� "where"):';
$strAddToIndex = '�������� � �������&nbsp;%s&nbsp;��������(�)';
$strAddUser = '�������� ������ ������������';
$strAddUserMessage = '���� �������� ����� ������������.';
$strAffectedRows = '���������� ����:';
$strAfter = '����� %s';
$strAfterInsertBack = '�������';
$strAfterInsertNewInsert = '�������� ����� ������';
$strAll = '���';
$strAlterOrderBy = '�������� ������� �������';
$strAnIndex = '��� �������� ������ ��� %s';
$strAnalyzeTable = '������ �������';
$strAnd = '�';
$strAny = '�����';
$strAnyColumn = '����� �������';
$strAnyDatabase = '����� ���� ������';
$strAnyHost = '����� ����';
$strAnyTable = '����� �������';
$strAnyUser = '����� ������������';
$strAscending = '�� �����������';
$strAtBeginningOfTable = '� ������ �������';
$strAtEndOfTable = '� ����� �������';
$strAttr = '��������';

$strBack = '�����';
$strBinary = ' �������� ';
$strBinaryDoNotEdit = ' �������� ������ - �� ������������� ';
$strBookmarkDeleted = '�������� ���� �������.';
$strBookmarkLabel = '�����';
$strBookmarkQuery = '�������� �� SQL-������';
$strBookmarkThis = '�������� �� ������ SQL-������';
$strBookmarkView = '������ ��������';
$strBrowse = '�����';
$strBzip = '������������ � bzip';

$strCantLoadMySQL = '���������� MySQL �� ����������,<br />��������� ������������ PHP.';
$strCantLoadRecodeIconv = '�� ���� ��������� iconv ��� recode, ����������� ��� ��������������� ��������. ��������� php-������������ � ��������� �� ������������� ��� ��������� ��������������� �������� � phpMyAdmin.';
$strCantRenameIdxToPrimary = '������������� ������������� ������ � PRIMARY!';
$strCantUseRecodeIconv = '�� ���� ������������ iconv �������: �� libiconv, �� recode_string, ���� �� ����� ��������� extension reports. ��������� php-������������.';
$strCardinality = '���������� ���������';
$strCarriage = '������� �������: \\r';
$strChange = '��������';
$strChangeDisplay = '�������� ���� ��� �����������';
$strChangePassword = '�������� ������';
$strCheckAll = '�������� ���';
$strCheckDbPriv = '��������� ���������� ��';
$strCheckTable = '��������� �������';
$strChoosePage = '�������� �������� ��� ��������������';
$strColumn = '�������';
$strColumnNames = '�������� �������';
$strComments = '�����������';
$strCompleteInserts = '������ �������';
$strConfigFileError = 'phpMyAdmin �� ����� ��������� ������ �� ����������������� �����!  <br />��������� ������� - �������������� ������.<br />�������� ���� ���� (config.inc.php) ��������������� �� ��������. ���� ����� ��������� �� ������� - ��������� ��. ���� ������ �������� - ��� � �������';
$strConfigureTableCoord = '�������� ���������� ������� %s';
$strConfirm = '�� ������������� ������ ������� ���?';
$strCookiesRequired = 'Cookies ������ ���� �������� ����� ����� �����.';
$strCopyTable = '����������� ������� � (���� ������<b>.</b>�������):';
$strCopyTableOK = '������� %s ���� ����������� � %s.';
$strCreate = '�������';
$strCreateIndex = '������� ������ ��&nbsp;%s&nbsp;��������';
$strCreateIndexTopic = '������� ����� ������';
$strCreateNewDatabase = '������� ����� ��';
$strCreateNewTable = '������� ����� ������� � �� %s';
$strCreatePage = '������� ����� ��������';
$strCriteria = '��������';

$strData = '������';
$strDataOnly = '������ ������';
$strDatabase = '�� ';
$strDatabaseHasBeenDropped = '���� ������ %s ���� �������.';
$strDatabaseWildcard = '���� ������ (�������� �������������  ��������):';
$strDatabases = '���� ������';
$strDatabasesStats = '���������� ��� ������';
$strDefault = '�� ���������';
$strDelete = '�������';
$strDeleteFailed = '��������� ��������!';
$strDeleteUserMessage = '��� ������ ������������ %s.';
$strDeleted = '��� ��� ������';
$strDeletedRows = '��������� ���� ���� �������:';
$strDescending = '�� ��������';
$strDisplay = '��������';
$strDisplayOrder = '������� ���������:';
$strDisplayPDF = '�������� PDF-�����';
$strDoAQuery = '��������� "������ �� �������" (������ ������������: "%")';
$strDoYouReally = '�� ������������� ������� ';
$strDocu = '������������';
$strDrop = '����������';
$strDropDB = '���������� �� %s';
$strDropTable = '������� �������';
$strDumpXRows = '���� %s �������, ������� � %s.';
$strDumpingData = '���� ������ �������';
$strDynamic = '������������';

$strEdit = '������';
$strEditPDFPages = '�������� PDF-��������';
$strEditPrivileges = '�������������� ����������';
$strEffective = '�������������';
$strEmpty = '��������';
$strEmptyResultSet = 'MySQL ������� ������ ��������� (�.�. ���� �����).';
$strEnd = '�����';
$strEnglishPrivileges = ' ����������: ���������� MySQL �������� �� ��������� ';
$strError = '������';
$strExport = '�������';
$strExportToXML = '������� � XML-������';
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
$strFormEmpty = '��������� �������� ��� �����!';
$strFormat = '������';
$strFullText = '������ ������';
$strFunction = '�������';

$strGenBy = '���������';
$strGenTime = '����� ��������';
$strGo = '�����';
$strGrants = '�����';
$strGzip = '������������ � gzip';

$strHasBeenAltered = '���� ��������.';
$strHasBeenCreated = '���� �������.';
$strHaveToShow = '�� ������ ������� �� ����� ����� ������� ��� �����������';
$strHome = '� ������';
$strHomepageOfficial = '����������� �������� phpMyAdmin';
$strHomepageSourceforge = '�������� phpMyAdmin �� Sourceforge';
$strHost = '����';
$strHostEmpty = '������ ��� �����!';

$strIdxFulltext = '���������';
$strIfYouWish = '���� �� ������� ��������� ������ ��������� ������� �������, ������� ����������� �������� ������ �����.';
$strIgnore = '������������';
$strInUse = '������������';
$strIndex = '������';
$strIndexHasBeenDropped = '������ %s ��� ������';
$strIndexName = '��� �������&nbsp;:';
$strIndexType = '��� �������&nbsp;:';
$strIndexes = '�������';
$strInsert = '��������';
$strInsertAsNewRow = '�������� ����� ���';
$strInsertNewRow = '�������� ����� ���';
$strInsertTextfiles = '�������� ��������� ����� � �������';
$strInsertedRows = '���������� ����:';
$strInstructions = '����������';
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
$strLinkNotFound = '����� �� �������';
$strLinksTo = '����� �';
$strLocationTextfile = '����������������� ���������� �����';
$strLogPassword = '������:';
$strLogUsername = '������������:';
$strLogin = '���� � �������';
$strLogout = '����� �� �������';

$strMissingBracket = '��������� ������';
$strModifications = '����������� ���� ���������';
$strModify = '��������';
$strModifyIndexTopic = '�������� ������';
$strMoveTable = '����������� ������� � (���� ������<b>.</b>�������):';
$strMoveTableOK = '������� %s ���� ���������� � %s.';
$strMySQLCharset = 'MySQL-���������';
$strMySQLReloaded = 'MySQL �������������.';
$strMySQLSaid = '����� MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% �� %pma_s2% ��� %pma_s3%';
$strMySQLShowProcess = '�������� ��������';
$strMySQLShowStatus = '�������� ��������� MySQL';
$strMySQLShowVars = '�������� ��������� ���������� MySQL';

$strName = '���';
$strNext = '�����';
$strNo = '���';
$strNoDatabases = '�� �����������';
$strNoDescription = '��� ��������';
$strNoDropDatabases = '������� "������� ��" ���������.';
$strNoFrames = '��� ������ phpMyAdmin ����� ������� � ���������� <b>�������</b>.';
$strNoIndex = '������ �� ���������!';
$strNoIndexPartsDefined = '����� ������� �� ����������!';
$strNoModification = '��� ���������';
$strNoPassword = '��� ������';
$strNoPhp = '��� PHP-����';
$strNoPrivileges = '��� ����������';
$strNoQuery = '��� SQL-�������!';
$strNoRights = '�� �� ������ ���������� ���� ��� �����!';
$strNoTablesFound = '� �� �� ���������� ������.';
$strNoUsersFound = '�� ������ ������������.';
$strNone = '���';
$strNotNumber = '��� �� �����!';
$strNotSet = '������� <b>%s</b> �� �������';
$strNotValidNumber = ' ������������ ���������� �����!';
$strNull = '����';
$strNumSearchResultsInTable = '%s ������(��) � ������� <i>%s</i>';
$strNumSearchResultsTotal = '<b>�����:</b> <i>%s</i> ������(��)';

$strOftenQuotation = '������ �������. "�� ������" ��������, ��� ������ ���� char � varchar ����������� � �������.';
$strOperations = '��������';
$strOptimizeTable = '�������������� �������';
$strOptionalControls = '�� ������. ������������ ��� ������ ��� ������ ����������� �������.';
$strOptionally = '�� ������';
$strOptions = '�����';
$strOr = '���';
$strOverhead = '��������� �������';

$strPHPVersion = '������ PHP';
$strPageNumber = '����� ��������:';
$strPartialText = '��������� ������';
$strPassword = '������';
$strPasswordEmpty = '������ ������!';
$strPasswordNotSame = '������ �� ���������!';
$strPdfDbSchema = '��������� ���� "%s" - �������� %s';
$strPdfInvalidPageNum = '�������������� ����� PDF-��������!';
$strPdfInvalidTblName = '������� "%s" �� ����������!';
$strPhp = '������� PHP-���';
$strPmaDocumentation = '������������ �� phpMyAdmin';
$strPmaUriError = '��������� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ������ ���� ����������� � ����� ���������������� �����!';
$strPos1 = '������';
$strPrevious = '�����';
$strPrimary = '���������';
$strPrimaryKey = '��������� ����';
$strPrimaryKeyHasBeenDropped = '��������� ���� ��� ������';
$strPrimaryKeyName = '��� ���������� ����� ������ ���� PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>������</b> ���� ��������� <b>������</b> ���������� �����!)';
$strPrintView = '������ ��� ������';
$strPrivileges = '����������';
$strProperties = '��������';

$strQBE = '������&nbsp;��&nbsp;�������';
$strQBEDel = '�������';
$strQBEIns = '��������';
$strQueryOnDb = 'SQL-������ �� <b>%s</b>:';

$strReType = '�������������';
$strRecords = '������';
$strReferentialIntegrity = '��������� ����������� ������:';
$strRelationView = '��������� ���';
$strReloadFailed = '�� ������� ������������� MySQL.';
$strReloadMySQL = '������������� MySQL';
$strRememberReload = '�� �������� ������������� ������.';
$strRenameTable = '������������� ������� �';
$strRenameTableOK = '������� %s ���� ������������� � %s';
$strRepairTable = '�������� �������';
$strReplace = '���������';
$strReplaceTable = '��������� ������ ������� ������� �� �����';
$strReset = '��������������';
$strRevoke = '��������';
$strRevokeGrant = '�������� �������������� ����';
$strRevokeGrantMessage = '���� �������� �������������� ���� ��� %s';
$strRevokeMessage = '�� �������� ���������� ��� %s';
$strRevokePriv = '�������� ����������';
$strRowLength = '����� ����';
$strRowSize = ' ������ ���� ';
$strRows = '����';
$strRowsFrom = '����� ��';
$strRowsModeHorizontal = '��������������';
$strRowsModeOptions = '� %s ������, ��������� ����� ������ %s �����';
$strRowsModeVertical = '������������';
$strRowsStatistic = '���������� ����';
$strRunQuery = '��������� ������';
$strRunSQLQuery = '��������� SQL ������(�) �� �� %�';
$strRunning = '�� %s';

$strSQL = 'SQL';
$strSQLQuery = 'SQL-������';
$strSQLResult = 'SQL-���������';
$strSave = '���������';
$strScaleFactorSmall = '������� ������� ������������ ����������� ���� ������� �� �������������';
$strSearch = '������';
$strSearchFormTitle = '������ � ���� ������';
$strSearchInTables = '� �������(��):';
$strSearchNeedle = '�����(�) ��� ��������(�) ��������� (������� "%") �:';
$strSearchOption1 = '���� ���� �����';
$strSearchOption2 = '��� �����';
$strSearchOption3 = '������ ������������';
$strSearchOption4 = '���������� ���������';
$strSearchResultsFor = '������ � "<i>%s</i>" %s:';
$strSearchType = '������:';
$strSelect = '�������';
$strSelectADb = '�������� ��';
$strSelectAll = '�������� ���';
$strSelectFields = '������� ���� (������� ����):';
$strSelectNumRows = '�� �������';
$strSelectTables = '�������� �������(�)';
$strSend = '�������';
$strServerChoice = '����� �������';
$strServerVersion = '������ �������';
$strSetEnumVal = '��� ����� ���� "enum" � "set", ������� �������� �� ����� �������: \'a\',\'b\',\'c\'...<br />���� ��� ������������ ������ �������� ����� ����� ("\"") ��� ��������� ������� ("\'") ����� ���� ��������, ��������� ����� ���� �������� ����� ����� (��������, \'\\\\xyz\' ��� \'a\\\'b\').';
$strShow = '��������';
$strShowAll = '�������� ���';
$strShowColor = '�������� ����';
$strShowCols = '�������� �������';
$strShowGrid = '�������� �����';
$strShowPHPInfo = '�������� ���������� � PHP';
$strShowTableDimension = '�������� ����������� �������';
$strShowTables = '�������� �������';
$strShowThisQuery = ' �������� ������ ������ ����� ';
$strShowingRecords = '���������� ������ ';
$strSingly = '(��������)';
$strSize = '������';
$strSort = '�������������';
$strSpaceUsage = '������������ ������������';
$strSplitWordsWithSpace = '�����, ����������� �������� (" ").';
$strStatement = '���������';
$strStrucCSV = 'CSV ������';
$strStrucData = '��������� � ������';
$strStrucDrop = '�������� �������� �������';
$strStrucExcelCSV = 'CSV ��� ������ Ms Excel';
$strStrucOnly = '������ ���������';
$strStructPropose = '������������ ��������� �������';
$strStructure = '���������';
$strSubmit = '���������';
$strSuccess = '��� SQL-������ ��� ������� ��������';
$strSum = '�����';

$strTable = '������� ';
$strTableComments = '����������� � �������';
$strTableEmpty = '������ �������� �������!';
$strTableHasBeenDropped = '������� %s ���� �������';
$strTableHasBeenEmptied = '������� %s ���� �������';
$strTableHasBeenFlushed = '��� ������� ��� ������� %s';
$strTableMaintenance = '������������ �������';
$strTableStructure = '��������� �������';
$strTableType = '��� �������';
$strTables = '%s ������(�)';
$strTextAreaLength = ' ��-�� ������� �����,<br /> ��� ���� �� ����� ���� ���������������� ';
$strTheContent = '���������� ����� ���� �������������.';
$strTheContents = '���������� ����� �������� ���������� ������� ��� ����� � ����������� ���������� ��� ����������� �������.';
$strTheTerminator = '������ ��������� �����.';
$strTotal = '�����';
$strType = '���';

$strUncheckAll = '����� ������� �� ����';
$strUnique = '����������';
$strUnselectAll = '����� ������� �� ����';
$strUpdatePrivMessage = '���� �������� ���������� ���';
$strUpdateProfile = '�������� �������:';
$strUpdateProfileMessage = '������� ��� ��������.';
$strUpdateQuery = '��������� ������';
$strUsage = '�������������';
$strUseBackquotes = '�������� ������� � ��������� ������ � �����';
$strUseTables = '������������ �������';
$strUser = '������������';
$strUserEmpty = '������ ��� ������������!';
$strUserName = '��� ������������';
$strUsers = '������������';

$strValue = '��������';
$strViewDump = '����������� ���� �������';
$strViewDumpDB = '����������� ���� ��';

$strWelcome = '����� ���������� � %s';
$strWithChecked = '� �����������:';
$strWrongUser = '��������� �����/������. � ������� ��������.';

$strYes = '��';

$strZip = '������������ � zip';

$strRelationNotWorking = '�������������� ����������� ��� ������ �� ���������� ��������� ����������. ��� ����������� ������� ������� %s����%s.';
$strAllTableSameWidth = '�������� ��� ������� � ����� �������?';
$strPdfNoTables = '��� ������';
$strDisplayFeat = '�������� �������������� �����������';
$strCreatePdfFeat = '�������� PDF-�����';
$strColComFeat = '�������� ����������� ��������';
$strDisabled = '����������';
$strEnabled = '��������';
$strOK = '������';
$strNotOK = '�� ������';

$strGeneralRelationFeat = '�������� ����������� ������';
$strNoValidateSQL = 'Skip Validate SQL';  //to translate
$strValidateSQL = 'Validate SQL';  //to translate
$strNoExplain = 'Skip Explain SQL';  //to translate
$strExplain = 'Explain SQL';  //to translate
$strCharsetOfFile = 'Character set of the file:'; //to translate
$strBeginCut = 'BEGIN CUT';  //to translate
$strEndCut = 'END CUT';  //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnknownPunctation = 'Unknown Punctation String';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate
$strEndRaw = 'END RAW';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
?>
