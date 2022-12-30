<?php
require_once ("IViewAction.php");
require_once ("ViewAssignments.php");
require_once ("ViewQuiz.php");
require_once ("ViewClasstask.php");

class SubjectActivities
{
    private IViewAction $iviewaction2;
    

    public function __construct(IViewAction $iviewaction)
    {
        $this->iviewaction2=$iviewaction;
        
    }
    

    


    public function ExcuteViewActivities()
    {
        return $this->iviewaction2->view();
    }
    


}