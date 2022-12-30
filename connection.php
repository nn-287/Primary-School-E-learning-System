<?php

//session_start();
$connect = mysqli_connect("localhost","root","","edu_tech");

//header("Location:about.html");

if ($connect==false)
{
    die("Connection error ");
}
else
{
    echo "Success";
}
?>