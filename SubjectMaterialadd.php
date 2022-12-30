<?php
require_once ("IAddAction.php");
require_once ("AddLesson.php");
//require_once ("AddPreparation.php");

class SubjectMaterialadd          
{
    private IAddAction $iaddaction2;
    

    public function __construct(IAddAction $iaddaction)
    {
        $this->iaddaction2=$iaddaction;
        
    }


    public function ExcuteAddMaterial()
    {
        return $this->iaddaction2->Add();
    }
    


}



?>