<?php
include("../model/db.php");
if(isset($_POST["sm"]))
{
    $fname=$_POST["fn"];
    $lname=$_POST["ln"];
    $ag=$_POST["age"];
    $desg=$_POST["des"]; 
    $eml=$_POST["em"];
    $pre=$_REQUEST["prel"];
    $password=$_POST["pass"];
    $file=$_POST["fl"];
    $mydb= new db();
    $myconn = $mydb->openCon();
    $mydb->insertUser($fname,$lname,$ag,$desg,$pre,$eml,$password,$file,"employee",$myconn);
}
?>