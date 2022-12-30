<?php
require_once ("IAddAction.php");
require_once ("AddAssignment.php");
require_once ("AddPreparation.php");
require_once ("AddQuiz.php");
require_once ("AddClasstask.php");

class SubjectActivitiesadd 
{
    private IAddAction $iaddaction;
    

    public function __construct(IAddAction $iaddaction)
    {
        $this->iaddaction=$iaddaction;
        
    }
    

    


    public function ExcuteAddActivities()
    {
        return $this->iaddaction->Add();
    }
    


}