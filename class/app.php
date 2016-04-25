<?php

/**
*   PHP -v 7.0
*   HTML/SASS - BEM/SMACSS
*   IMT3851 Assignment 3
*   Team Whisky:
*       Agne Ødegaard    |  140699
*       Mia Tollaksvik   |  14xxxx
*       Øyvind Grimstad  |  140694
*       Vegard Brestad   |  14xxxx
*/

/**
*   File includes
*/
require_once("controllers/pdo.php");


/**
*   Main Class
*/
class App{
    /**
    *   App params
    */
    public static $debug = true,
                  $config;
    
    /**
    *   Other Classes
    */
    public $pdo;
    
    /**
     * App Construct
     * @private
     */
    public function __construct(){
        self::$config = parse_ini_file("data/config.ini");
        
        $this->pdo = new Database(self::$config);
        
        if(self::$debug){
            echo '<pre>';
            print_r($this);
            echo '</pre>';
        }
    }

}

$app = new App();