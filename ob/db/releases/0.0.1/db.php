<?php
namespace Ob\Db;

/**
 * Database Connection Class.
 *
 * @package         Obullo 
 * @subpackage      Obullo.database     
 * @category        Database
 * @version         0.1
 * 
 */

Class Db {
    
    /**
    * Constructor
    */
    function __construct($db_var = 'db', $params = '')
    {
        if(isset(\Ob\getInstance()->{$db_var}) AND is_object(\Ob\getInstance()->{$db_var}))
        {
           return;   // Lazy Loading.  
        }
        
        if($db_var !== false)
        {
           \Ob\getInstance()->{$db_var} = $this->connect($db_var, $params); 
        }
        
        \Ob\log\me('debug', 'Db Class Initialized.');
    }
    
    /**
    * Connect to Database
    * 
    * @param    mixed   $param database parameters
    * @param    string  $db_var database variable
    * @return   object of PDO Instance.
    */
    public function connect($db_var = 'db', $params = '')
    {   
        if(isset(\Ob\getInstance()->{$db_var}) AND is_object(\Ob\getInstance()->{$db_var}))
        {
           return;   // Lazy Loading.  
        }
        
        $dbdriver = is_array($params) ? $params['dbdriver'] : \Ob\db('dbdriver', $db_var); 
        $hostname = \Ob\db('hostname', $db_var);
        
        if(is_array($params))
        {
            $options = array_merge($params, array('default_db' => $db_var));
        }
        else
        {
            $options = array('default_db' => $db_var);
        }
        
        if($hostname == false)
        {
            throw new \Exception('The ' . $db_var . ' database configuration undefined in your config/database.php file.');
        }
        
        //----------- MONGO PACKAGE SUPPORT ------------//
        
        if(strtolower($dbdriver) == 'mongo') 
        {
            $mongo = new \Ob\Mongo\Mongo();
            
            return $mongo->connect();
        }
        
        //----------- MONGO PACKAGE SUPPORT END ------------//

        $packages = getConfig('packages');
        
        if($packages['db_layer'] == 'Database_Pdo')
        {
            $database = new \Ob\Database_Pdo\Database_Pdo();
            return $database->connect($dbdriver, $options);
        } 
        else // Native database support.
        {
            $database = new \Ob\Database\Database();
            return $database->connect($dbdriver, $options);
        }
        
        return false;        
    }
}

/* End of file db.php */
/* Location: ./ob/db/releases/0.0.1/db.php */