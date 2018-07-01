<?php
/* $Id: tbl_move_copy.php,v 1.4 2001/10/11 22:25:28 loic1 Exp $ */


/**
 * Insert datas from one table to another one
 *
 * @param   string  the original insert statement
 *
 * @global  string  the database name
 * @global  string  the original table name
 * @global  string  the target database and table names
 * @global  string  the sql query used to copy the data
 */
function my_handler($sql_insert = '')
{
    global $db, $table, $target;
    global $sql_insert_data;

    $sql_insert = eregi_replace('INSERT INTO (`?)' . $table . '(`?)', 'INSERT INTO ' . $target, $sql_insert);
    $result     = mysql_query($sql_insert) or mysql_die('', $sql_insert, '', $GLOBALS['err_url']);
    
    $sql_insert_data .= $sql_insert . ';' . "\n";
} // end of the 'my_handler' function


/**
 * Gets some core libraries
 */
require('./libraries/grab_globals.lib.php');
require('./libraries/common.lib.php');


/**
 * Defines the url to return to in case of error in a sql statement
 */
$err_url = 'tbl_properties.php'
         . '?lang=' . $lang
         . '&amp;server=' . $server
         . '&amp;db=' . urlencode($db)
         . '&amp;table=' . urlencode($table);


/**
 * Selects the database to work with
 */
mysql_select_db($db);


/**
 * A target table name has been sent to this script -> do the work
 */
if (isset($new_name) && trim($new_name) != '') {
    $use_backquotes = 1;
    $asfile         = 1;

    if (get_magic_quotes_gpc()) {
        if (!empty($target_db)) {
            $target_db = stripslashes($target_db);
        } else {
            $target_db = stripslashes($db);
        }
        $new_name      = stripslashes($new_name);
    }

    // Ensure the target is valid
    if (count($dblist) > 0 &&
        (pmaIsInto($db, $dblist) == -1 || pmaIsInto($target_db, $dblist) == -1)) {
        exit();
    }
    if (MYSQL_INT_VERSION < 32306) {
        check_reserved_words($target_db, $err_url);
        check_reserved_words($new_name, $err_url);
    }

    $source = backquote($db) . '.' . backquote($table);
    $target = backquote($target_db) . '.' . backquote($new_name);

    include('./libraries/build_dump.lib.php');

    $sql_structure = get_table_def($db, $table, "\n", $err_url);
    $sql_structure = eregi_replace('^CREATE TABLE (`?)' . $table . '(`?)', 'CREATE TABLE ' . $target, $sql_structure);
    $result        = @mysql_query($sql_structure);
    if (mysql_error()) {
        include('./header.inc.php');
        mysql_die('', $sql_structure, '', $err_url);
    } else if (isset($sql_query)) {
        $sql_query .= "\n" . $sql_structure . ';';
    } else {
        $sql_query = $sql_structure . ';';
    }

    // Copy the data
    if ($result != FALSE && $what == 'data') {
        // speedup copy table - staybyte - 22. Juni 2001
        if (MYSQL_INT_VERSION >= 32300) {
            $sql_insert_data = 'INSERT INTO ' . $target . ' SELECT * FROM ' . $source;
            $result          = @mysql_query($sql_insert_data);
            if (mysql_error()) {
                include('./header.inc.php');
                mysql_die('', $sql_insert_data, '', $err_url);
            }
        } // end MySQL >= 3.23
        else {
            $sql_insert_data = '';
            get_table_content($db, $table, 0, 0, 'my_handler', $err_url);
        } // end MySQL < 3.23
        $sql_query .= "\n\n" . $sql_insert_data;
    }

    // Drops old table if the user has requested to move it
    if (isset($submit_move)) {
        $sql_drop_table = 'DROP TABLE ' . $source;
        $result         = @mysql_query($sql_drop_table);
        if (mysql_error()) {
            include('./header.inc.php');
            mysql_die('', $sql_drop_table, '', $err_url);
        }
        $sql_query      .= "\n\n" . $sql_drop_table . ';';
        $db             = $target_db;
        $table          = $new_name;
    }

    $message   = (isset($submit_move) ? $strMoveTableOK : $strCopyTableOK);
    $message   = sprintf($message, $source, $target);
    $reload    = 1;
    $js_to_run = 'functions.js';
    include('./header.inc.php');
} // end is target table name


/**
 * No new name for the table!
 */
else {
    include('./header.inc.php');
    mysql_die($strTableEmpty, '', '', $err_url);
} 


/**
 * Back to the calling script
 */
require('./tbl_properties.php');
?>
