<?php
require_once ("IAddAction.php");
require_once ("SingletonPattern.php");
//require_once ("AddAssignmentInterface.php");



class AddPreparation   implements IAddAction 
{
    
    public function Add()
    {
        
        $db2 = ConnectDB::getInstance();
        $conn2 = $db2->getconnection();
        
        
        
        $Preparationcode=$db2->check($_POST['Preparationcode']);
        $Preparationtitle=$db2->check($_POST['Preparationtitle']);
        //$subjectid = $db2->check($_POST['subject']);
        
        if($this->insert_record($Preparationcode,$Preparationtitle))
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
        

        

        $query="INSERT INTO preparation (Id, title) VALUES ('$x','$y')";

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