<?php
require_once ("IViewAction.php");
require_once ("ViewLessons.php");
require_once ("ViewPreparation.php");

class SubjectMaterial          
{
    private IViewAction $iviewaction;
    

    public function __construct(IViewAction $iviewaction)
    {
        $this->iviewaction=$iviewaction;
        
    }


    public function ExcuteView()
    {
        return $this->iviewaction->view();
    }
    


}



?>