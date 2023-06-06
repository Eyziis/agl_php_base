<?php
include("DBConf.php");
class Database
{
    private static $db;
    private $connection;

    private function __construct() {
        $Conf = new DBConf;
        $conninfro = array("Database"=>$Conf->db, "UID"=>$Conf->user, "PWD"=>$Conf->password);

        $this->connection = sqlsrv_connect( $Conf->host, $conninfro);
    }

    function __destruct() {
        sqlsrv_close($this->connection);
    }

    public static function getConnection() {
        if (self::$db == null) {
            self::$db = new Database();
        }
        return self::$db->connection;
    }
}