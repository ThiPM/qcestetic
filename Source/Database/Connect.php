<?php
namespace source\Database;

use \PDO;
use \PDOException;

class Connect{
    private $HOST   = "localhost";
    private $USER   = "root";
    private $DBNAME = "bd_qcestetic";
    private $PASSWD = "";
    
    private $OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];
    
    private static $instance;
    
    /**
     * @return PDO
     */
    public static function getInstance():PDO{
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO(
                    "mysql:host=" . "localhost" . ";dbname=" . 'qcestetica',
                    'root',
                    '',
                    
                    );
            } catch (PDOException $exception) {
                
            }
        }
        return self::$instance;
    }
    
    private function __construct()
    {
    }
    private function __clone()
    {
    }

}