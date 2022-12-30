<?php
require_once ("IAddAction.php");
require_once ("SingletonPattern.php");
//require_once ("AddAssignmentInterface.php");



class AddClasstask   implements IAddAction 
{
    
    public function Add()
    {
        
        $db2 = ConnectDB::getInstance();
        $conn2 = $db2->getconnection();
        
        
        
        $taskcode=$db2->check($_POST['taskcode']);
        $tasktitle=$db2->check($_POST['tasktitle']);
        //$subjectid = $db2->check($_POST['subject']);
        
        if($this->insert_record($taskcode,$tasktitle))
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
        

        

        $query="INSERT INTO classtasks (Taskcode,Tasktitle) VALUES ('$x','$y')";//checkPoint1

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