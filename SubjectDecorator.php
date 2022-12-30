<?php


abstract class SubjectDecorator implements Isubject
{
    protected Isubject $subject;


    public function __construct(Isubject $subject)
    {
        $this->subject=$subject;
        
    }

    public function Type()
    {
        return $this->subject->Type();
    }

    


}


?>
