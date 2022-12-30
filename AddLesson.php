<?php
require_once ("IAddAction.php");
require_once ("SingletonPattern.php");
//require_once ("AddAssignmentInterface.php");



class AddLessons   implements IAddAction 
{
    
    public function Add()
    {
        
        $db2 = ConnectDB::getInstance();
        $conn2 = $db2->getconnection();
        
        
        
        $Lessoncode=$db2->check($_POST['Lessoncode']);
        $Lessontitle=$db2->check($_POST['Lessontitle']);
        
        
        if($this->insert_record($Lessoncode,$Lessontitle))
        {
            //echo '<div class="alert alert-success">Your record has been added successfully.</div>';
        }
        else
        {
            //echo '<div class="alert alert-danger">Failed to add you record.</div>';
        }

        
    }

    public function insert_record($x,$y)
    {
        $db2 = ConnectDB::getInstance();
        $conn2 = $db2->getconnection();
        

        

        $query="INSERT INTO lessons (Id, Title) VALUES ('$x','$y')";//checkPoint1

        $result=mysqli_query($conn2,$query);
        

        if($result)
        {
            return true;
            
            
        }
        else
        {
            return false;
        }


    }
    

  
}


?>