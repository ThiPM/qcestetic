<?php
namespace source\Database;

use \PDO;
use \PDOException;

 define('HOST', '51.79.72.47');  
 define('DBNAME', 'hostdeprojetos_qcestetica');  
 define('CHARSET', 'utf8');  
 define('USER', 'hostdeprojetos_trlsites');  
 define('PASSWORD', 'Cq)*wcLG=!6P');  

 class Connect {  

   private static $pdo;


   private function __construct() {  
   } 
 
   public static function getInstance() {  
     if (!isset(self::$pdo)) {  
       try {  
         $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_PERSISTENT => TRUE);  
         self::$pdo = new PDO("mysql:host=" . HOST . "; dbname=" . DBNAME . "; charset=" . CHARSET . ";", USER, PASSWORD, $opcoes);  
       } catch (PDOException $e) {  
         print "Erro: " . $e->getMessage();  
       }  
     }  
     return self::$pdo;  
   }  
 }