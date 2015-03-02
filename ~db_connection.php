<?php
/**
 * Wrapper for MySQLi
 *
 * Creates a database connection on demand
 */
class DBConnection {
    private static $db;
    private function connect() {
        if(!isset(self::$db)) {
            self::$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        }
    }
    public function __call($name, $arguments) {
        $this->connect();
        return call_user_func_array(array(self::$db, $name), $arguments);
    }
    public function __get($name) {
        $this->connect();
        return self::$db->$name;
    }
    public function __set($name, $value) {
        $this->connect();
        self::$db->$name = $value;
    }
    public function __isset($name) {
        $this->connect();
        return isset(self::$db->$name);
    }
    public function __unset($name) {
        $this->connect();
        unset(self::$db->$name);
    }
}

?>