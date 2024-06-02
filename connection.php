<?php class Database {
    public static $connection;

    public static function setupConnection() {
        if (!isset(Database::$connection)) {
            $hostName = 'localhost';
            $username = 'tife';
            $password = 'Iayush2003.';
            $database = 'tife';
            $port = '3306';

            Database::$connection = new mysqli($hostName, $username, $password, $database, 3306);
        }
    }

    public static function iud($q) {
        Database::setupConnection();
        Database::$connection->query($q);
    }

    public static function search($q) {
        Database::setupConnection();
        $resultset = Database::$connection->query($q);
        return $resultset;
    }
} ?>
