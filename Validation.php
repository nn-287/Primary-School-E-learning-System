<?php
include("SingletonPattern.php");

session_start();

if(isset($_POST['signin']))
{
    $Id=$_POST["Id"];
    $password=$_POST["password"];
    $usertype=$_POST["usertype"];

    if(empty($Id))
    {
      echo "Error";
      header("Location:LoginForm.php");

    }
    else if(empty($password))
    {
      echo "Error";
      header("Location:LoginForm.php");

    }
    else if(empty($usertype))
    {
      echo "Error";
      header("Location:LoginForm.php");

    }
    else
    {
      
      $db = ConnectDB::getInstance();
      $conn2 = $db->getconnection();

      $query="SELECT * FROM users WHERE Id= '$Id' AND password='$password' AND usertype='$usertype'  ";
      $result=mysqli_query($conn2,$query);

      if(mysqli_num_rows($result)==1)
      {
        if($usertype=="student")
        {
          //header("Location:about.html");
        }
        else if($usertype=="teacher")
        {  
          header("Location:TeacherIndex.php");
          
        }
        else if($usertype=="parent")
        {
          header("Location:ParentsHomePage.php");
        }

        
      }
      
    }
}

?>