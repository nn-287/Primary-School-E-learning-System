<?php
require_once ("IAddAction.php");
require_once ("SingletonPattern.php");
//require_once ("AddAssignmentInterface.php");



class AddAssignments   implements IAddAction 
{
    
    public function Add()
    {
        
        $db2 = ConnectDB::getInstance();
        $conn2 = $db2->getconnection();
        
        
        
        $Assignmentcode=$db2->check($_POST['Assignmentcode']);
        $Assignmenttitle=$db2->check($_POST['Assignmenttitle']);
        $subjectid = $db2->check($_POST['subject']);
        
        if($this->insert_record($Assignmentcode,$Assignmenttitle,$subjectid))
        {
            //echo '<div class="alert alert-success">Your record has been added successfully.</div>';
        }
        else
        {
            //echo '<div class="alert alert-danger">Failed to add you record.</div>';
        }

        
    }

    public function insert_record($x,$y,$z)
    {
        $db2 = ConnectDB::getInstance();
        $conn2 = $db2->getconnection();
        

        

        $query="INSERT INTO assignments (Id, Title, SubjectId) VALUES ('$x','$y','$z')";

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