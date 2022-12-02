<?php
namespace source\Database;
include("../config/config.php");

use \PDO;
use \PDOException;

 class Connect {  

   private static $pdo;


   private function __construct() {  
   } 
 
   public static function getInstance() {  
     if (!isset(self::$pdo)) {  
       try {  
         $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_PERSISTENT => TRUE);  
         self::$pdo = new PDO("mysql:host=" . CONF_DB_HOST . "; dbname=" . CONF_DB_NAME . "; charset=" . CONF_DB_CHARSET . ";", CONF_DB_USER, CONF_DB_PASS, $opcoes);  
       } catch (PDOException $e) {  
         print "Erro: " . $e->getMessage();  
       }  
     }  
     return self::$pdo;  
   }  
 }