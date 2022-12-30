<?php
require_once ("SingletonPattern.php");
class FrenchSubject extends SubjectDecorator 
{
    
    public function Type()
    {
        
        return "French" . parent::Type();

    }

}


?>