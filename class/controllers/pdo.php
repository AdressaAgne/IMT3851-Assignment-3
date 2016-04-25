<?php 
class Database{
	public $db;
	
	/**
	 * Database connetion setup
	 * return void
	 */
	public function __construct($config) {
        try {
            $dns = 'mysql:host='.$config['db_host'].';dbname='.$config['db_name'];
            $this->db = new PDO($dns, $config['db_username'], $config['db_password']);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            
        } catch (PDOException $e) {
            die("<p><strong>Could not connect to database:</strong></p><pre>$e</pre><p><a href='/install'>Install database</a></p>");
        }
	}
    
	/**
	 * PDO bindValue
	 * @param object &$pdo   PDO
	 * @param array  &$array ['name' => 'value',...] :name will be value
	 * Using htmlspecialchars() instead of strip_tags(), so users can still use :> smileys and <--- arrows.
	 */
	public function arrayBinder(&$pdo, &$array) {
		foreach ($array as $key => $value) {
			$pdo->bindValue(':'.$key, htmlspecialchars($value));
		}
	}
}