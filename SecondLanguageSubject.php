<?php
require_once ("Isubject.php");
require_once ("SingletonPattern.php");


class SecondLanguageSubjects implements Isubject
{
    
    public function Type()
    {
        $db = ConnectDB::getInstance();
        $conn = $db->getconnection();
        

        echo " Second language subject ";
    }
}

?>