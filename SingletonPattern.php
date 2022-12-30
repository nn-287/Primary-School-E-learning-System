
<?php

include_once("SubjectActivitiesadd.php");
class ConnectDB
{
    private static $instance = null;//Instance of type singleton.
    private $conn;

    private $db_host="localhost";
    private $db_user="root";
    private $db_password="";
    private $db_name="edu_tech";


    private function __construct()
    {
        
        $this->conn = new mysqli($this->db_host, $this->db_user, $this->db_password, $this->db_name);
        
        if (mysqli_connect_error()) 
        {
            trigger_error("Failed to conencto to MySQL: " . mysqli_connect_error(), E_USER_ERROR);
        } 
        else 
        {

        }
        
    }


    public static function getinstance()
      {
        if(!self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
      }

      

    public function getconnection()
    {
        return $this->conn;
    }

    
    public function check($a)
    {
        $check = mysqli_real_escape_string($this->conn,$a);
        return $check;
    }






}


//Unit test (1A):
/*
$db = ConnectDB::getInstance();
$mysqli = $db->getconnection(); 
print_r($mysqli);

$db = ConnectDB::getInstance();
$conn2 = $db->getconnection();
print_r($conn2);

*/

/*//Unit test (1B):
$db = ConnectDB::getInstance();
print_r($db);

$db2 = ConnectDB::getInstance();
print_r($db2);
*/

/*
$db = ConnectDB::getInstance();
print_r($db);
*/

?>