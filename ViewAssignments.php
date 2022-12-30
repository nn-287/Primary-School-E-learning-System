<?php
require_once ("IViewAction.php");
require_once ("SingletonPattern.php");


class ViewAssignments implements IViewAction 
{
    
    
    public function view()
    {
        $db = ConnectDB::getInstance();
        $conn = $db->getconnection();

        $query="SELECT * FROM assignments";
        //$query = "SELECT Id, title, subject.Name AS Subject-id FROM assignments2 JOIN subject ON subject.id=assignments2.suject-id";
        $result=mysqli_query($conn,$query);

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