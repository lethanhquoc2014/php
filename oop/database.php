<?php
// require_once("config.php");

class Database
{
    public $connection;

    private function __construct()
    {
        $databaseName = $GLOBALS['configuration']['db'];
        $serverName = $GLOBALS['configuration']['host'];
        $databaseUser = $GLOBALS['configuration']['user'];
        $databasePassword = $GLOBALS['configuration']['pass'];
        $databasePort = $GLOBALS['configuration']['port'];

        $this->connection = mysql_connect($serverName . ":" . $databasePort, $databaseUser, $databasePassword);
        mysql_set_charset('latin1', $this->connection);
        if ($this->connection) {
            if (!mysql_select_db($databaseName)) {
                throw new Exception('Cannot find: "' . $databaseName . '"');
            }
        } else {
            throw new Exception('Cannot connect to the database.');
        }
    }

    public static function connect()
    {
        static $database = null;
        if (is_null($database)) {
            $database = new Database();
        }
        return $database->connection;
    }

    public static function reader($query, $connection)
    {
        $cursor = mysql_query($query, $connection);
        return $cursor;
    }

    public static function read($cursor)
    {
        return mysql_fetch_assoc($cursor);
    }

    public static function query($query, $connection)
    {
        $result = mysql_query($query, $connection);
        return mysql_num_rows($result);
    }

    public static function insertOrUpdate($query, $connection)
    {
        $result = mysql_query($query, $connection);
        return intval(mysql_insert_id($connection));
    }
}
