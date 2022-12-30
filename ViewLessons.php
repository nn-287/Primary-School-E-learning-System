<?php
require_once ("IViewAction.php");
require_once ("SingletonPattern.php");

class ViewLessons  implements IViewAction 
{
    
    public function view()
    {
        $db = ConnectDB::getInstance();
        $conn2 = $db->getconnection();

        $query="SELECT * FROM lessons";
        $result=$conn2->query($query);
        
        if($result->num_rows>0)
        {
            return $result;
        }
        else
        {
            return false;
        }
    }
    

  
}


?>