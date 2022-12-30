<?php
require_once ("IAddAction.php");
require_once ("SingletonPattern.php");
//require_once ("AddAssignmentInterface.php");



class AddQuiz   implements IAddAction 
{
    
    public function Add()
    {
        
        $db2 = ConnectDB::getInstance();
        $conn2 = $db2->getconnection();
        
        
        
        $Quizcode=$db2->check($_POST['Quizcode']);
        $Quiztitle=$db2->check($_POST['Quiztitle']);
        $subjectid = $db2->check($_POST['subject']);
        
        
        if($this->insert_record($Quizcode,$Quiztitle,$subjectid))
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
        

        

        $query="INSERT INTO quizzes (Id, Title,SubjectId) VALUES ('$x','$y',$z')";//checkPoint1

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